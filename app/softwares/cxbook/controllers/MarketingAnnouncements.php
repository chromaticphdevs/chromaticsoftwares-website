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

            $errors = [];
            $email = '';

            /*Check if email body is not empty*/
            if(empty($post['email']['body'])) {
               $errors[] = 'Email body is missing';
            }
            /*Check if email subject is not empty*/
            if(empty($post['email']['subject'])) {
                $errors[] = 'Email subject is missing';
            }


            if(!empty($errors)) {
                //error
                Flash::set(implode(',' , $errors) , 'danger');
                return request()->return();
            }

            /**
             * Email is included to be sent
             */
            if(empty($email)) {
                $email = "subject:{$post['email']['subject']} \n body:{$post['email']['body']}";
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

                $clean_email = str_to_email($row['email']);

                $emailRes = _mail($clean_email , $post['email']['subject'] ,
                $post['email']['body'] , $post['email']['name'] ,
                $post['email']['reply_to']);

                if($emailRes !== TRUE)
                    $emailLog = "email is not sent $emailRes";
                $emailLog = "Sent on {$clean_email}";
                

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
