<?php view('templates/headers')?>
</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
  <header class="header header_style_01">
    <?php echo view('templates/navigation')?>
  </header>


  <div style="margin-top:70px;">

  </div>

  <div class="container">
    <h4> List <a href="/ImageUploader/create">Create Image</a> </h4>

    <div class="row">
      <?php foreach($images as $key => $row) :?>
        <?php if($row != '..' && $row != '.') :?>
        <div class="col-md-4">
          <img src="<?php echo $imagePath.DS.$row?>" alt="<?php echo $row?>" style="width:150px">
          <p style="width:100%; word-break:break-all"><?php echo $imagePath.DS.$row?></p>
        </div>
        <?php endif;?>
      <?php endforeach?>
    </div>
  </div>

<?php echo view('templates/footer')?>

  <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
  <?php echo view('templates/scripts')?>
</body>
</html>
