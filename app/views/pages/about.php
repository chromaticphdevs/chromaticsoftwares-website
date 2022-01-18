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

    .story {
      line-height: 200%;
    }
    .action-widget {
      background: #10375c;
      color:#fff;
      padding: 20px;
      border-radius: 20px;
      margin:30px 0px;
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
            <h3><?php echo strtoupper($title)?></h3>

            <p class="sub-text">
            Chromatic Softwares Provide Business Software Solutions for thriving companies that need efficient , 
            fast and affordable software to support and empower their Growing Business operations.
            </p>
          </div>
        </div>
      </div>
      <!-- END OF BANNER -->
    </div>
    
  <div class="container mt-5">
    <div class="row text-center">
      <div class="col">
        <h1> <strong>Mission</strong> </h1>
        <p>To Provide Efficient , Fast And Affordable software solutions for thriving companies which can support their business day to day operations.</p>
      </div>

      <div class="col">
        <h1> <strong>Vision</strong> </h1>
        <p>Provide companies software solutions that tailor fit to their needs and deliver the solutions in an instant, and provide amazing customer support and affordable software operations.</p>
      </div>
    </div>
  </div>

  <div class="container story">
    <div class="col-md-9 mx-auto">
        <div class="text-center action-widget">
          <h4 style="color:#fff"> Let the next billion dollar software company make solutions for you</h4>
          <a href="/Contact" class="btn btn-primary">Hire us</a>
        </div>
      </div>
  </div>


  <?php echo view('templates/footer')?>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php echo view('templates/scripts')?>
</body>
</html>
