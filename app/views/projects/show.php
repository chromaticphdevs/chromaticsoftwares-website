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
    <main>
      <div class="divider"></div>
      <section id="summary" class="content-section">
        <div class="container">
          <div class="row justify-content-between">
            <ul class="col-md-6 list-unstyled">
              <li> <strong>Industry : </strong> <?php echo ucwords($project['industry'])?> </li>
              <li> <strong>Project Started: </strong> <?php echo $project['started']?> </li>
            </ul>

            <div class="col-md-6 col-sm-12" style="text-align:right">
              <img src="<?php echo base_url("assets/projects/{$project['logo']}")?>"
              alt="<?php echo $title.'-'.'logo'?>" style="width:300px; display:block; margin:0px auto">
            </div>
          </div>
        </div>
      </section>
      <div class="divider"></div>

      <section class="screenshots">
        <div class="container">
          <div class="screenshot">
            <img src="<?php echo base_url("assets/projects/{$title}/{$project['screenshots'][0]}")?>">
          </div>

          <div class="row justify-content-between">
            <div class="screenshot col-md-5">
              <img src="<?php echo base_url("assets/projects/{$title}/{$project['screenshots'][1]}")?>">
            </div>

            <div class="screenshot col-md-5">
              <img src="<?php echo base_url("assets/projects/{$title}/{$project['screenshots'][2]}")?>">
            </div>
          </div>
        </div>
      </section>


      <section class="text-center">
        <h4> <strong>Key Features</strong> </h4>
        <div class="#">
          <ul>
            <?php foreach($project['product_specification']['features'] as $key => $row) :?>
              <li><?php echo $row?></li>
            <?php endforeach?>
          </ul>
        </div>

        <p>Stack :
          <?php foreach($project['product_specification']['tech'] as $key => $row) : ?>
            <strong><?php echo $row?></strong>
          <?php endforeach?>
        </p>
      </section>
    </main>


  <?php echo view('templates/footer')?>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php echo view('templates/scripts')?>
</body>
</html>
