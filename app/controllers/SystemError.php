<?php   

    class SystemError extends Controller
    {

        public function __construct()
        {
            $this->referrer = $_SERVER['HTTP_REFERER'] ?? '';
            
        }

        public function index()
        {
            $this->load();
        }
        public function load()
        {
            if(isset($_GET['page'])) {

                $page = $_GET['page'];
                
                switch(strtolower($page)) 
                {
                    case 'lost':
                        $data = [
                            'message' => $_GET['message'] ?? 'You are lost'             
                        ];
                        return $this->view('error/lost', $data);
                    break;
                }
            }
        }
    }