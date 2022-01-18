<?php

    class EmailSettings extends SoftwareController
    {

        public function __construct()
        {
            $this->emailSettings = $this->model('emailSettingModel');

            if(empty(Auth::get('user'))) {
                return appRedirect("accounts/login");
            }
        }

        public function index()
        {

            $account = Auth::get('user');

            $setting = $this->emailSettings->getByAccount($account->id);

            if(!$setting) {
                //create settings
                $sms_id = $this->emailSettings->store([
                    'account_id' => $account->id,
                    'name'  => $account->first_name,
                    'reply_to' => $account->email
                ]);

                $setting = $this->emailSettings->get($sms_id);
            }

            $data = [
                'setting' => $setting
            ];

            return $this->view('email_settings/index' , $data);
        }

        public function update()
        {
            $post = request()->posts();

            $data = array_remove_kitem('id' , $post);

            $res = $this->emailSettings->update($data , $post['id']);

            if(!$res) {
                Flash::set("Update failed");

                return request()->referrer();
            }

            Flash::set("Email settings updated");

            return appRedirect("EmailSettings");
        }
    }
