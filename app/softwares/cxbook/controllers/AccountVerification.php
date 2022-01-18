 <?php

    class AccountVerification extends SoftwareController
    {

        public function __construct()
        {
          $this->accountVerification = $this->model('AccountVerificationModel');
          $this->account = $this->model('AccountModel');
        }
        public function index()
        {
            $data = [];

            return $this->view('account_verification/index' , $data);
        }


        public function codeVerify()
        {
          $code = request()->post('code');

          $result = $this->accountVerification->getByCode($code);

          ee(api_response($result));
        }

        /*
        *Resend Verification Code
        */
        public function resendVerification($account_id)
        {
          $account = $this->account->get($account_id);

          $this->accountVerification->createToken($account_id);

          $link = $this->accountVerification->getLink();
          $code = $this->accountVerification->getdbData('code');
          $emailSubject = "Thank your for your signing up to our ".appName();

          $emailBody = email_tmp($account->first_name , $account->last_name ,
              " To start organizing your customers and start growing, verify your account first <br />
              type this code on verification page
              <strong> $code </strong>");

          _mail($account->email, appName() .' Account Verification', $emailBody);

          Flash::set("You're one step away to setup your account , Enter the verification code that has been sent to your email {$account->email}");

          return appRedirect('AccountVerification/index');

        }

        public function verify()
        {
            if(isset($_GET['token'] , $_GET['id'])) {

                $verification = $this->accountVerification->get($_GET['id']);

                if(!$verification)
                {
                    $data = [
                        "message" => 'Verification Not Found'
                    ];
                    return $this->view('account_verification/err' , $data);
                }

                if($_GET['token'] != $verification->token)
                {
                    $data = [
                        "message" => 'Token not matched'
                    ];
                    return $this->view('account_verification/err' , $data);
                }


                /*
                *VERIFY ACCOUNT
                */

                $result = $this->accountVerification->update([
                  'is_verified' => true
                ] , $verification->id);

                if(!$result) {
                  Flash::set("Account Verification Failed" , 'danger');
                  return redirect('cxbook');
                }

                $account = $this->account->getPublic($verification->account_id);

                Auth::set('user' , $account);

                Flash::set("Welcome !  {$account->first_name}");

                return appRedirect("Accounts");

            }
        }
    }
