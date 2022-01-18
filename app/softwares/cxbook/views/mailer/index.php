<?php build('content')?>
<h2>Send Email To Customers</h2>
<?php Flash::show()?>

<div class="card card-grey">
  <div class="card-body">
    <?php
      Form::open([
        'method' => 'post',
        'action' => appRequest('Mailer/doAction')
      ]);
    ?>

    <div class="row">
      <div class="col-md-5">
        <table>
          <tr>
            <td>Subject</td>
            <td><?php Form::text('subject' , $message->subject ?? '', ['required' => ''])?></td>
          </tr>

          <tr>
            <td>Text Heading</td>
            <td><?php Form::text('text_heading' , $message->header ?? '' , ['required' => ''])?></td>
          </tr>

          <tr>
            <td>Contact</td>
            <td><?php Form::text('contact' , '')?></td>
          </tr>

          <tr>
            <td>Email</td>
            <td><?php Form::text('email' , '' )?></td>
          </tr>

          <tr>
            <td>Send</td>
            <td><?php Form::submit('send_email' , 'send', ['class' => 'btn btn-primary btn-sm'])?></td>
          </tr>

          <?php if(isset($message)) :?>
          <tr>
            <td>Save</td>
            <td>
              <?php
                Form::hidden('message_id' , $message->id);
                Form::submit('update_template' , 'Update Changes', ['class' => 'btn btn-warning btn-sm']);
                Form::submit('delete_template' , 'Delete Template', ['class' => 'btn btn-danger btn-sm']);
              ?>
            </td>
          </tr>
          <?php else:?>
          <tr>
            <td>Save</td>
            <td><?php Form::submit('save_template' , 'Save Template', ['class' => 'btn btn-warning btn-sm'])?></td>
          </tr>
          <?php endif;?>
        </table>
      </div>

      <div class="col-md-7">
        <?php Form::textarea('message' , $message->body ?? 'message here' , ['id' => 'ckeditor' , 'class' => 'form-control' ,'required' => ''])?>
      </div>
    </div>

    <?php Form::close()?>
  </div>
</div>

<div class="card card-grey layout-top-spacing">
  <div class="card-body">
    <section>
      <h2>Sent Emails</h2>

      <p>
        <?php echo $sentEmails ?>
      </p>
    </section>
  </div>
</div>

<div class="card card-grey layout-top-spacing">
  <div class="card-body">
    <table class="table">
      <thead>
        <th>Subject</th>
        <th>Header</th>
        <th>Message</th>
        <th>Action</th>
      </thead>

      <tbody>
        <?php foreach($messages as $key => $row) :?>
          <tr>
            <td><?php echo $row->subject?></td>
            <td><?php echo $row->header?></td>
            <td><?php echo $row->body?></td>
            <td>
              <a href="<?php echo appRequest("/Mailer/index?message_id={$row->id}")?>" class="btn btn-primary btn-sm">select</a>
            </td>
          </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>
</div>
<?php endbuild()?>

<?php build('scripts')?>
  <script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/ckeditor.js')?>"></script>
  <script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/adapters/jquery.js')?>"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $( '#ckeditor' ).ckeditor()

    });
  </script>
<?php endbuild()?>

<?php build('headers')?>
<style type="text/css">
  body, html {
        padding: 0;
        margin: 0;

        font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;
        margin: 0px auto;
        box-sizing: border-box;
      }

      table{
        width: 100%;
      }

      table tr td{
        padding: 5px 0px;
      }
      table tr td:nth-of-type(odd)
      {
        font-weight: bold;
        width: 30%;
      }

      input[type='text']
      {
        width: 100%;
      }
</style>
<?php endbuild()?>
<?php appGrab('templates/base')?>
