<p>You can directly email us at <strong><?php echo MAILER_AUTH['username']?></strong> or message using the form below. </p>
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
    <div class="col">
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

    <div class="col">
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
    <div class="col">
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

    <div class="col">
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
