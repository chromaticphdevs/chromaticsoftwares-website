<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Site Metas -->
    <title><?php echo $headers['title'] ?? SITE_NAME?></title>
    <meta name="keywords" content="<?php echo $headers['keywords'] ?? KEY_WORDS?>">
    <meta name="description" content="<?php echo $headers['keywords'] ?? DESCRIPTION?>">
    <meta name="author" content="<?php echo $headers['keywords'] ?? AUTHOR?>">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/xs-logo.png')?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/xs-logo.png')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('tmp/css/bootstrap.min.css')?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url('tmp/style.css')?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('tmp/css/responsive.css')?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('tmp/css/custom.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main/global.css')?>">

    <!-- REQUIRED JS -->
    <script type="text/javascript" src="<?php echo base_url('js/core.js')?>"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172982658-1"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,200&display=swap" rel="stylesheet">

    <style type="text/css">
        body
        {
            font-family: 'Montserrat', sans-serif !important;
            padding: 0px;
        }
    </style>
