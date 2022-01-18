<?php view('templates/headers')?>

<style type="text/css">
  #pageContent{
    min-height: 400px;
  }
  .blog{
    min-height: 250px;
    padding: 10px;
    margin:10px;

    background-color: #d6d6d6;
  }
  .blog h4{
    font-weight: bold;
  }
</style>
</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
    <header class="header header_style_01">
      <?php echo view('templates/navigation')?>
    </header>

  <div style="margin-top: 75px"></div>

  <div class="container">
    <section id="pageContent">
      <div class="row">
        <?php foreach($blogs as $key => $row):?>
          <div class="col-md-3 blog">
            <a href="/blogs/show/<?php echo $row->slug?>">
              <h4><?php echo $row->title?></h4>
              <img src="<?php echo $pathLink.DS.$row->wallpaper?>"
                style="width: 100%">
            </a>
          </div>
        <?php endforeach?>
      </div>
    </section>
  </div>
  <?php echo view('templates/footer')?>
  <?php echo view('templates/scripts')?>
</body>
</html>
