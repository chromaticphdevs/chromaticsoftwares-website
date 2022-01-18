<?php

  class Mailer extends SoftwareController
  {

    public function __construct()
    {
      $this->loadModels([
        'mailer' => 'mailerModel'
      ]);
    }
    public function index()
    {

        $data = [
          'sentEmails' => readWrittenLog('marketedPersonal.txt'),
          'messages'   => $this->mailer->all()
        ];

        if(isset($_GET['message_id']))
          $data['message'] = $this->mailer->get($_GET['message_id']);

        return $this->view('mailer/index' , $data);
    }


    public function doAction()
    {
      if(request()->is_post())
      {
        if(isset($_POST['send_email'])){
          $this->send();
        }

        if(isset($_POST['save_template'])) {
          $this->saveTemplate();
        }

        if(isset($_POST['update_template']))
        {
          $this->updateTemplate();
        }

        if(isset($_POST['delete_template']))
        {
          $this->deleteTemplate();
        }
      }
    }
    public function deleteTemplate()
    {
      $result = $this->mailer->delete(request()->post('message_id'));

      if(!$result) {
        flash_err();
        return request()->return();
      }
      Flash::set("Email template Update");
      return appRedirect("mailer/index");
    }
    
    public function updateTemplate()
    {
      $post = request()->posts();

      $postData = [
        'subject'  => $post['subject'],
        'header'   => $post['text_heading'],
        'contact'  => $post['contact'],
        'email'    => $post['email'],
        'body'     => $post['message']
      ];

      $saveEmail = $this->mailer->update($postData , $post['message_id']);

      if(!$saveEmail) {
        flash_err();
        return request()->return();
      }

      Flash::set("Email template Update");
      return appRedirect("mailer/index?message_id={$post['message_id']}");
    }

    public function saveTemplate()
    {
      $post = request()->posts();

      $postData = [
        'subject' => $post['subject'],
        'header'  => $post['text_heading'],
        'contact'  => $post['contact'],
        'email'   => $post['email'],
        'body'   => $post['message']
      ];

      $saveEmail = $this->mailer->store($postData);

      if(!$saveEmail) {
        flash_err();
        return request()->return();
      }

      Flash::set("Email template saved");
      return appRedirect("mailer/index?message_id={$saveEmail}");
    }
    public function send()
    {
      $post = request()->posts();

      $emailBody = email_tmp_banner($post['text_heading'] , $post['contact'] , $post['message']);

      $result = _mail($post['email'] , $post['subject'] , $emailBody, $post['contact']);

      if($result) {

        Flash::set("Email Sent to {$post['contact']} : {$post['email']}");

        $file = 'marketedPersonal.txt';

        $dateTime = date('M d, Y h:i:s A');

        $log  = "Sent to {$post['contact']} : {$post['email']} on $dateTime";

        writeLog($file , $log);
      }else {
        Flash::set("Email Did not sent" , 'danger');
      }


      return appRedirect("Mailer");

    }
  }
