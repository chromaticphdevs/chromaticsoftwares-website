<?php view('templates/headers')?>
</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
  <header class="header header_style_01">
    <?php echo view('templates/navigation')?>
  </header>


  <div style="margin-top:70px;">

  </div>

  <div class="container">
    <h4> List <a href="/ImageUploader/">View Images</a> </h4>
    <?php Form::open($form)?>

      <div class="form-group">
        <?php Form::label('Image name')?>
        <?php Form::text('imageName')?>
      </div>
      <div class="form-group">
        <?php Form::label('Image Upload')?>
        <?php Form::file('image')?>
      </div>


      <div class="form-group">
        <?php Form::submit('submit' , 'Submit' , ['class' => 'btn btn-primary btn-sm'])?>
      </div>
    <?php Form::close()?>
  </div>

<?php echo view('templates/footer')?>

  <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
  <?php echo view('templates/scripts')?>
</body>
</html>
