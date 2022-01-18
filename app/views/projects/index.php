<?php view('templates/headers')?>
    <link rel="stylesheet" href="<?php echo base_url('css/pages/projects.css')?>">

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
          </div>
        </div>
      </div>
      <!-- END OF BANNER -->
    </div>


  <div class="container">

    <div class="divider">

    </div>
    <div class="row">
      <?php foreach($projects as $key => $row) :?>
        <?php $image = $row['screenshots'][0] ?>
        <div class="col-md-3 box-item text-center">
          <h4 class="header" style="color:var(--primary)">
            <?php echo strtoupper($row['industry'])?>
          </h4>
          <?php if($row['access']) :?>
            <div class="icon">
              <a href="/projects/show/<?php echo $key?>">
                <img src="<?php echo base_url("assets/projects/{$key}/{$image}")?>" alt="">
              </a>
            </div>
            <?php else:?>
            <div class="">
              <h5>Classified</h5>
            </div>
          <?php endif;?>
          <h4 style="color:var(--primary)"><?php echo $row['started']?></h4>
          <p><?php echo $key?></p>
        </div>
      <?php endforeach?>
    </div>
  </div>


  <?php echo view('templates/footer')?>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php echo view('templates/scripts')?>
</body>
</html>
