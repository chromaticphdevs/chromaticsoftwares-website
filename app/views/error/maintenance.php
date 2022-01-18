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
  <link href="<?php echo _path_vendor('cork/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo _path_vendor('cork/assets/css/pages/error/style-maintanence.css')?>" rel="stylesheet" type="text/css" />
</head>
<body class="maintanence text-center">

    <div class="container-fluid maintanence-content">
        <div class="">
            <div>
                <img alt="logo" src="<?php echo _path_asset('logo.png')?>">
            </div>
            <h1 class="error-title">Under Maintenance</h1>
            <p class="error-text">Thank you for visiting us.</p>
            <p class="text">We are currently working on making some improvements <br/> to give you better user experience.</p>
            <p class="text">Please visit us again shortly.</p>
            <a href="index.html" class="btn btn-info mt-4">Home</a>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo _path_vendor('cork/assets/js/libs/jquery-3.1.1.min.js')?>"></script>
    <script src="<?php echo _path_vendor('cork/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo _path_vendor('cork/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo _path_vendor('cork/assets/js/authentication/form-1.js')?>"></script>
</body>
</html>
