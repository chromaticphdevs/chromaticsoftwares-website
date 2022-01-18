<?php

    class AccountLogin extends SoftwareController
    {

        public function __construct()
        {
            $this->account = $this->model('AccountModel');
        }

        public function login()
        {
            $post = request()->posts();

            $key = $post['key'];
            $password = $post['password'];

            $user = $this->account->getByEmail($key);


            if(!$user) {
                Flash::set("User {$key} not found" , 'warning');
                return appRedirect("Accounts/login");
            }

            if(!password_verify($password , $user->password)) {
                Flash::set("Incorrect Password" , 'warning');
                return request()->return();
            }

            if(!$user->is_verified)
            {
              $resendVerification = appRequest("AccountVerification/resendVerification/{$user->id}");
              $verificationpage   = appRequest("AccountVerification/index");
              Flash::set("You're account is not yet verified , we sent it on your email '{$user->email}'
              <a href='$resendVerification'>Resend Verification</a>
              <a href='$verificationpage'>Verify</a>" , 'warning');
              return appRedirect("accounts/login");
            }

            Auth::set('user' , $user);

            $userWelcomeName = ucwords($user->first_name . ' '. $user->last_name);

            Flash::set("Welcome back! {$userWelcomeName}");

            return appRedirect("Accounts/");
        }
    }
