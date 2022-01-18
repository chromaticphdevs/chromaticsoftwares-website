<?php   

    class Resume extends Controller
    {
        public function index()
        {
            $filePath = GET_PATH_UPLOAD.DS.'resume.pdf';

            print <<<EOF
                <center>
                    <iframe src="{$filePath}" style='height:100vh; min-width:1000px;' > </iframe>
                </center>
            EOF;
        }
    }