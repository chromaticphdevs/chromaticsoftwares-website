<?php
class Inquiries extends Controller
{
    public function __construct()
    {
      $this->model = new InquiryModel();
    }

    public function store()
    {
      $errors = [];
      $inputs = request()->posts();
      //check the following
      if(empty($inputs['fullname'])) {
        $errors [] = " Your name is required";
      }

      if(!empty($inputs['email'])) {

        /*VALIDATE EMAIL*/
        if(! is_email($inputs['email']))
        {
          Flash::set("Invalid Email");
          return request()->return();
        }

        $inquiry = $this->model->getByEmail($inputs['email']);

        if(is_array($inquiry) && count($inquiry) > 3) {

          Flash::set("<strong> {$inquiry->fullname} </strong>, your inquiries has been already sent ,
          we will contact you as soon as posible. Thank your for reaching us!");

          return redirect('contact');
        }
      }else{
        $errors [] = "Email is required";
      }


      $inputs['notes'] = filter_var($inputs['notes'] , FILTER_SANITIZE_STRING);

      try{

        $result = $this->model->store($inputs);

        $subject = "Chromatic Softwares - Thank you for reaching us";
        $message = "
          Your Inquiry has been sent. extect a reply from us within 24 hours
          <ul>
           <li>Full Name : {$inputs['fullname']}</li>
           <li>Company : {$inputs['company']}</li>
           <li>Industry : {$inputs['industry']}</li>
           <li>Message :
            <p>{$inputs['notes']}</p>
           </li>
          </ul>
        ";

        $body = email_tmp($inputs['fullname'] , $subject , $message);

        $sendToClient = _mail($inputs['email'] , $subject , $body);

        $content = <<<EOF
        <ul>
          <li><strong> Someone Just Sent Inquiry</strong></li>
          <li>Email: {$inputs['email']}</li>
          <li>Industry: {$inputs['industry']}</li>
          <li>Company: {$inputs['company']}</li>
          <li>Notes: <p>{$inputs['notes']}</p></li>
        </ul>
        EOF;

        /*SEND EMAIL TO ME*/
        $bccAndCc = [
          'bcc' => 'gonzalesmarkangeloph@gmail.com'
        ];

        $sendToCompany = _mail(MAILER_AUTH['username'] , "{$inputs['fullname']} has sent an inquiry" , $content , null, null, $bccAndCc);

      }catch(Exception $e){
        Flash::set($e->getMessage() , 'danger');
      }

      if($result) {
        Flash::set("Inquiries has been sent ! , Thank <strong>{$inputs['fullname']}</strong>, your for reaching us we will contact your asap");
      }else{
        Flash::set('Snap!' , 'danger');
      }
      return redirect('contact');
    }
}
