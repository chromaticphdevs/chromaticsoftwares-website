<?php view('templates/headers')?>
    <style media="screen">
      #contact{
        background: rgb(2,0,36);
        background: linear-gradient(176deg, rgba(2,0,36,0.9976365546218487) 0%,
        rgba(16,55,92,1) 41%, rgba(14,111,105,0.938813025210084) 100%);
      }

      #contact{
        margin-top:50px;
      }

      #contact-content{
        padding: 20px;
      }
      @media (max-width: 992px)
      {
        #contact{
          margin-top: 0px;
        }
        #contact-content{
        padding: 5px;
      }
      }
    </style>
</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
    <header class="header header_style_01">
      <?php echo view('templates/navigation')?>
    </header>
    <main>
      <section id="contact">
        <div class="col-sm-12 col-md-6 mx-auto bg-white" style="padding:30px">
          <div id="contact-content">
            <h2><strong>Contact Us</strong> </h2>
            <?php Flash::show()?>
            <p>You can directly email us at <strong><?php echo MAILER_AUTH['username']?></strong> or message using the form below. </p>
            <p>
              All submitted information will be kept confidential.
            </p>

            <?php echo Form::open([
              'method' => 'post',
              'action' => 'inquiries/store'
              ])?>
              <div class="form-group">
                <label for="#">Your Name</label>
                <?php
                  $attr = [
                    'placeholder' => 'eg. Jhon Doe',
                    'class' => 'form-control',
                    'required' => ''
                  ];
                  Form::text('fullname' , '' , $attr);
                ?>
              </div>

              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                  <label for="#">Company Name</label>
                  <?php
                    $attr = [
                      'placeholder' => 'Eg. Chromatic',
                      'class' => 'form-control',
                      'required' => ''
                    ];
                    Form::text('company' , '' , $attr);
                  ?>
                </div>

                <div class="col-md-6 col-sm-12">
                  <label for="#">Industry</label>
                  <?php
                    $attr = [
                      'placeholder' => 'Eg. Software',
                      'class' => 'form-control',
                      'required' => ''
                    ];
                    Form::text('industry' , '' , $attr);
                  ?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 col-sm-12">
                  <label for="#">Email</label>
                  <?php
                    $attr = [
                      'placeholder' => '',
                      'class' => 'form-control',
                      'required' => ''
                    ];
                    Form::text('email' , '' , $attr);
                  ?>
                </div>

                <div class="col-md-6 col-sm-12">
                  <label for="#">Phone</label>
                  <?php
                    $attr = [
                      'placeholder' => '',
                      'class' => 'form-control',
                      'required' => ''
                    ];
                    Form::text('phone' , '' , $attr);
                  ?>
                </div>
              </div>

              <div class="form-group">
                <label for="#">Tell us something</label>
                <textarea name="notes" rows="4" class="form-control"></textarea>
              </div>

              <!-- <div class="form-group">
                <label for="newsletters">
                  <input type="checkbox" id="newsletters" name="" value="">
                  Subcribe to news letters
                </label>
              </div> -->

              <input type="submit" name="" value="Send Message"
                class="btn btn-danger">
            <?php echo Form::close()?>
          </div>
        </div>
      </section>
    </main>


  <?php echo view('templates/footer_contact')?>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <?php echo view('templates/scripts')?>
</body>
</html>
