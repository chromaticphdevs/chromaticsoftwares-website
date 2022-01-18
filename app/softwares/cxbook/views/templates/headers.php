<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo appName()?></title>
    <script type="text/javascript" src="<?php echo base_url('js/core.js')?>"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="<?php echo _path_vendor('cork/assets/css/loader.css')?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo _path_vendor('cork/assets/js/loader.js')?>"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo _path_vendor('cork/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo _path_vendor('cork/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo _path_third_party('fontawesome/css/fontawesome.min.css')?>" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="<?php echo _path_vendor('cork/plugins/font-icons/fontawesome/css/regular.css')?>">
    <link rel="stylesheet" href="<?php echo _path_vendor('cork/plugins/font-icons/fontawesome/css/fontawesome.css')?>">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px)!important;
        }

        .card-dark{
            background-color: #0e0e0f;
            
        }

        .card-grey{
            background-color: #d9d9d9;
        }

        .card-grey .card-body,
        .card-grey .card-body label,
        .card-grey .card-header > * {
            color: #000;
        }

        .card-dark .card-body  *,
        .card-dark .card-header > * {
            color: #fff;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
