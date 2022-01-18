<?php

    class SmsSettings extends SoftwareController
    {
        public function __construct()
        {
            $this->smsSettings = $this->model('smsSettingModel');

            if(empty(Auth::get('user'))) {
                return appRedirect("accounts/login");
            }
        }

        public function index()
        {

            $account = Auth::get('user');

            $setting = $this->smsSettings->getByAccount($account->id);

            if(!$setting) {
                //create settings
                $sms_id = $this->smsSettings->store([
                    'account_id' => $account->id,
                    'signature'  => $account->first_name,
                    'changes'    => 0
                ]);

                $setting = $this->smsSettings->get($sms_id);
            }

            $data = [
                'setting' => $setting
            ];

            return $this->view('sms_settings/index' , $data);
        }

        public function update()
        {
            $post = request()->posts();

            $setting = $this->smsSettings->get($post['id']);

            // if($setting->changes == 3) {
            //     Flash::set("You've reached maximum signature changes" ,'warning');
            //     return appRedirect("smsSettings");
            // }

            if($setting->signature == $post['signature'])
            {
                Flash::set("Not saved no changes found" ,'warning');
                return appRedirect("smsSettings");
            }

            $res = $this->smsSettings->update([
                'signature' => $post['signature'],
                'changes'   => $setting->changes + 1
            ] , $post['id']);

            Flash::set("Signature updated!");

            if(!$res) {
                Flash::set("Something went wrong" , 'danger');
            }

            return appRedirect("smsSettings");
        }
    }
