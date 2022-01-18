<?php

  class API_AccountVerification extends SoftwareController
  {
    public function __construct()
    {
      $this->accountVerification = $this->model('AccountVerificationModel');
      $this->account = $this->model('AccountModel');
    }

    public function codeVerify()
    {
      $code = request()->post('code');

      $result = $this->accountVerification->getByCode($code);
      /*
      *IF VERIFIED
      *LOGIN ACCOUNT
      */
      if($result)
      {
        //update verification
        $this->accountVerification->setVerified($result->id);
        //verify account
        $this->accountVerification->verifyAccount($result->account_id);

        $account = $this->account->get($result->account_id);
        Flash::set("Welcome to " . appName() . ' Orgaize your customers and prioritize your tasks!');
        Auth::set('user' , $account);
      }

      ee(api_response($result));
    }


    // public function loginVerified()
    // {
    //   $res = request()->is_post();
    //
    //   $user_id = request()->post('user_id');
    //
    //   if(!$res)
    //     return err_service();
    //
    //   $account = $this->model->get($user_id);
    //
    //   Auth::set('user' , $account);
    //
    //   ee(api_response($account->id));
    // }
  }
