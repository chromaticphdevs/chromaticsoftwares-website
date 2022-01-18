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
    <link href="<?php echo _path_vendor('cork/assets/css/authentication/form-1.css')?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo _path_vendor('cork/assets/css/forms/theme-checkbox-radio.css')?>">

    <link rel="stylesheet" type="text/css" href="<?php echo _path_vendor('cork/assets/css/forms/switches.css')?>">

    <style>
    .form-image .l-image {
        background-image: url("<?php echo _path_asset('webapp.png')?>") !important;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #060818;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 75%;
        background-position-x: center;
        background-position-y: center;
    }

    </style>
</head>
<body class="form">
    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <?php produce('content')?>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
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
