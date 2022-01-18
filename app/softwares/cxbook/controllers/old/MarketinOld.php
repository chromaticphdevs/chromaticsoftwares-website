<?php

    class MarketingAnnouncements extends SoftwareController
    {

        public function __construct()
        {
            $this->customer = $this->model('CustomerModel');

            $this->loadModels([
                'customer'     => 'CustomerModel',
                'marketingLog' => 'marketingLogModel',
                'marketingLogitem' => 'marketingLogitemModel',
                'smsSetting'   => 'SmsSettingModel',
                'emailSetting'   => 'EmailSettingModel'
            ]);

            if(empty(Auth::get('user'))) {
                return appRedirect("accounts/login");
            }
        }

        public function index()
        {
            $logs = $this->marketingLog->getByAccount(Auth::get('user')->id);

            $data = [
                'logs' => $logs
            ];


            return $this->view('marketing_announcements/index' , $data);
        }

        public function send()
        {
            $post = request()->posts();

            $bad = smsWithSig($post['sms']['message'] , $post['sms']['signature']);

            $errors = [];
            $email = '';
            $sms   = '';

            if(!isset($post['hasEmail'])) {
                $email = 'Email not included';
            }else{
                if(empty($post['email']['body'])) {
                   $errors[] = 'Email body is missing';
                }

                if(empty($post['email']['subject'])) {
                    $errors[] = 'Email subject is missing';
                }
            }

            if(!isset($post['hasSMS'])) {
                $sms  = 'SMS not included';
            }else{
                if(empty($post['sms']['message'])) {
                    $errors[] = 'SMS cannot be empty';
                }
            }


            if(!empty($errors)) {
                //error
                Flash::set(implode(',' , $errors) , 'danger');
                return appRedirect("MarketingAnnouncements/create");
            }
            /**
             * Email is included to be sent
             */
            if(empty($email)) {
                $email = "subject:{$post['email']['subject']} \n body:{$post['email']['body']}";
            }
            /**
             * Email is included to be sent
             */
            if(empty($sms)) {
                $sms  = $post['sms']['message'];
            }

            $log_id = $this->marketingLog->store([
                'account_id' => Auth::get('user')->id,
                'email'      => $email,
                'sms'        => $sms
            ]);

            $recipients = $post['recipients'];

            foreach($recipients as $key => $row)
            {
                $emailLog = "";
                $smsLog   = "";

                if(!isset($post['hasEmail'])) {
                    $emailLog = "Email Sending not included";
                }else{
                    $clean_email = str_to_email($row['email']);

                    $emailRes = _mail($clean_email , $post['email']['subject'] ,
                    $post['email']['body'] , $post['email']['name'] ,
                    $post['email']['reply_to']);

                    if($emailRes !== TRUE)
                        $emailLog = "email is not sent $emailRes";
                    $emailLog = "Sent on {$clean_email}";
                }

                if(!isset($post['hasSMS'])) {
                    $smsLog = "SMS sending not included";
                }else{
                    $clean_mobile =  str_to_mobile($row['mobile']);

                    $smsRes = Itexmo::fire($post['sms']['message'], $clean_mobile);

                    if(!$smsRes)
                        $smsLog = "mobile is not sent";
                    $smsLog = "Sent on {$clean_mobile}";
                }

                $logged = $this->marketingLogitem->store([
                    'log_id'      => $log_id,
                    'customer_id' => $row['id'],
                    'email'       => $emailLog,
                    'mobile'      => $smsLog
                ]);

                if(!$logged) {
                    $errors[] = "Error occured on marketing log item customer_id : {$row['id']}";
                }

                Flash::set("Your announcement has been sent!");

                return appRedirect("MarketingAnnouncements/");
            }
        }

        public function create()
        {
            $account = Auth::get('user');

            $form = 'advertise_form';

            $data = [
                'form' => [
                    'input' => [
                        'class' => 'form-control',
                        'form'    => $form,
                    ],
                    'name' => $form
                ],

                'recipients' => $this->customer->getAccountCustomers($account->id) ,

                'emailSetting' => $this->emailSetting->getByAccount($account->id),
                'smsSetting' => $this->smsSetting->getByAccount($account->id),
            ];

            if(isset($_GET['filter']))
            {
              $data['recipients'] =  $this->customer->getAccountCustomersWithEmail($account->id);
            }

            return $this->view('marketing_announcements/create' , $data);
        }
    }
