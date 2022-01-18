<?php

  class Mailer extends Controller
  {

    public function __construct()
    {

    }

    public function index()
    {
        $data = [
          'email' => [
            'message' => "<p>
            I'm reaching out today because I'am seeking for opportunity to develop software applications
            for growing property management companies just like Property Expert.
            </p>

            <p>
            The software that will be developed will be based on your business
            specific requirements.
            </p>

            <p>
            Please let me know if the company is interested for innovation and we can setup some time to discuss the details further,
            I look forward to hearing from you
            </p>",


            'subject' => "Custom Software Application For Business Opportunity",
            'textHeading' => "Software Application for your Property Management Business"
          ],

          'sentEmails' => readWrittenLog('marketedPersonal.txt')

        ];
        return $this->view('mailer/index' , $data);
    }

    public function create()
    {

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


      return redirect("Mailer");

    }
  }
