<?php   

    class SmsTesting extends Controller
    {

        public function index()
        {
            
            return $this->view('testing/sms');
        }

        public function send()
        {
        
            $res = Itexmo::fire('sample text ' . uniqid() , $post['mobile']);

            Flash::set("Text Result : {$res}");

            return redirect("SmsTesting/index");
        }
    }