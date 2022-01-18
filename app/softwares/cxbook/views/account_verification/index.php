<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo appName() .'|' .SITE_NAME?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo _path_vendor('cork/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo _path_vendor('acork/ssets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?php echo _path_vendor('cork/assets/css/pages/privacy/privacy.css')?>" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- REQUIRED JS -->

    <?php get_required_js()?>
</head>
<body>


    <div id="headerWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 class="main-heading">Thank you for signing up to <?php echo appName()?></h2>
                </div>
            </div>
        </div>
    </div>

    <div id="privacyWrapper" class="">
        <div class="privacy-container">
            <div class="privacyContent">
                <div class="privacy-content-container">
                    <section class="text-center">
                        <?php Flash::show()?>
                        <h5>Confirm your registration on your email and your good to go</h5>
                        <div class="col-md-5 mx-auto">
                          <p id="message"></p>
                          <input type="text" name="" value=""
                          placeholder="Eg. 1234" class="form-control"
                          id="codeverify">
                          <p>Enter four digit code here</p>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="<?php echo _path_vendor('cork/assets/js/libs/jquery-3.1.1.min.js')?>"></script>
    <script src="<?php echo _path_vendor('cork/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo _path_vendor('cork/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script>
        // Scroll To Top
        $(document).ready(function(evt)
        {
            $("#codeverify").keyup(function(evt){

              let code = $(this).val();

              /*CLEAR MESSAGE*/
              $("#message").html("");
              /*SHOULD BE GREATER OR EQUAL 4*/
              if(code.length < 4) return;

              $.post(getURL('cxbook/API_AccountVerification/codeVerify'),
              { code: code} ,
              function(response) {

                console.log(response);
                response = JSON.parse(response);

                if(response.status == 'false')
                  return alert("Internal Server Error");

                if(response.data == false){
                  $("#message").html("Invalid Code");
                }else{

                  console.log(response.data);
                  window.location = getURL('cxbook/accounts');
                }
              });
            });
        });
    </script>


</body>
</html>
