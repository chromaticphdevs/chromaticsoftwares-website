<?php view('templates/headers')?>
    <link rel="stylesheet" href="<?php echo base_url('css/pages/projects.css')?>">

    <style media="screen">
    #banner .head-line {
      color: #fff;
      text-align: left;
      padding-top: 90px;
    }

    #banner .head-line .overlay
    {
      display: block;
      background: rgba(0,0,0 , .5);
      min-width:350px;
      max-width: 1000px;
      padding: 20px 0px;
      margin:0px auto;
    }
    </style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div> -->
    <!-- end loader -->
    <!-- END LOADER -->
    <header class="header header_style_01">
      <?php echo view('templates/navigation')?>
    </header>

    <div id="header">
      <div id="banner">
        <div class="head-line">
          <div class="overlay">
            <h3>You are lost</h3>

            <p class="sub-text">
              <p><?php echo $message?></p>
            </p>
          </div>
        </div>
      </div>
      <!-- END OF BANNER -->
    </div>


  <div class="container">
    <div class="text-center">
      <h1 class="content-spacing"> <strong>Story</strong> </h1>
    </div>

  </div>


  <?php echo view('templates/footer')?>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php echo view('templates/scripts')?>
</body>
</html>
