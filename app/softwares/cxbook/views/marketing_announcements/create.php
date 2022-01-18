<?php build('content')?>
<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-md-12 layout-spacing">
        <div class="card">
            <?php
                Form::open([
                    'method' => 'post',
                    'action' => appRequest('MarketingAnnouncements/send'),
                    'id'     => $form['name'],
                    'name'     => $form['name'],
                ]);
                Form::close();
            ?>

            <div class="card-header text-right">
                <?php Form::submit('submit'  , 'Send' , [
                    'class' => 'btn btn-primary',
                    'form'  => $form['name']
                ])?>
                <a href="<?php echo appRequest('MarketingAnnouncements/index')?>" class="btn btn-warning ">Logs</a>
            </div>
        </div>

        <?php Flash::show()?>
    </div>
    <div class="col-md-12 layout-spacing">
      <div class="card">
          <div class="card-header">
            <h4>To Send</h4>
          </div>
          <div class="card-body">
              <div class="form-group">
                  <label for="#">Subject</label>
                  <?php Form::text('email[subject]' , '' , $form['input']);?>
              </div>

              <div class="form-group">
                  <?php $form['input']['rows'] = 3?>
                  <label for="#">Body</label>
                  <?php Form::textarea('email[body]' , '' , $form['input']);?>
                  <?php unset($form['input']['rows'])?>
              </div>

              <div class="row form-group">
                  <?php $form['input']['readonly'] = ''?>
                  <div class="col">
                      <label for="#">Name</label>
                      <?php Form::text('email[name]' , $emailSetting->name , $form['input']);?>
                  </div>
                  <div class="col">
                      <label for="#">Reply  To</label>
                      <?php Form::text('email[reply_to]' , $emailSetting->reply_to , $form['input']);?>
                  </div>
                  <?php unset($form['input']['readonly'])?>
              </div>

              <a href="#">Choose content on pre-built emails</a>
          </div>
      </div>
      <div class="layout-spacing"></div>
    </div>
</div>

<div class="col-md-12 layout-spacing">
    <div class="card">
        <div class="card-header">
            <h4>Recipients</h4>
            <a href="?filter=withEmailOnly">With Email Only</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </thead>

                <tbody>
                    <?php $isChecked = 'checked'?>
                    <?php foreach($recipients as $key => $row) :?>
                        <?php $isChecked = $key > 9 ? '' : 'checked'?>

                        <tr>
                            <td>
                                <label for="<?php echo $row->id?>">
                                <?php echo ++$key?>
                                <?php echo Form::checkbox("recipients[$key][id]" , $row->id , [
                                    'id' => $row->id,
                                    'form' => $form['name'],
                                    $isChecked => ''
                                ])?>
                            </label>
                            </td>
                            <td>
                                <?php echo $row->fullname()?>
                                <?php
                                    Form::hidden("recipients[$key][email]" , $row->emailFirst() , [
                                        'form' => $form['name']
                                    ]);
                                    Form::hidden("recipients[$key][mobile]" , $row->mobileFirst() ,[
                                        'form' => $form['name']
                                    ]);
                                ?>
                            </td>
                            <td><?php echo $row->emailFirst()?></td>
                            <td><?php echo $row->mobileFirst()?></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endbuild()?>

<?php build('scripts')?>
    <script>

        let sig = document.getElementById("sms_signature");

        let sigView = document.getElementById("sms_signature_view");

        sigView.textContent = sig.value;

        sig.addEventListener("keyup" , function() {
            sigView.textContent = sig.value;
        });
    </script>
<?php endbuild()?>
<?php appGrab('templates/base')?>
