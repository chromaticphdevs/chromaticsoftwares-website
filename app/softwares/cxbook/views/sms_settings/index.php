<?php build('content')?>

<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-md-5 layout-spacing">
        <div class="card">
            <?php Flash::show()?>
            <div class="card-header">
                <h4>Configure your SMS</h4>
            </div>

            <div class="card-body">
                <form action="<?php echo appRequest('smsSettings/update')?>" method="post">
                    <?php Form::hidden('id' , $setting->id)?>
                    <div class="form-group">
                        <label for="#">Signature</label>
                        <input type="text" class="form-control" 
                        name="signature" id="sms_signature"
                        value="<?php echo $setting->signature?>" 
                        placeholder="Eg. Chromatic">
                        <!-- <small>Maximum of 3 signature changes for free accounts</small> -->
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Save Signature">
                    </div>
                </form>
            </div>
        </div>

        <div class="layout-spacing"></div>

        <div class="card">
            <div class="card-header">
                <h4>INFO</h4>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <td><?php echo $setting->type?></td>
                        </tr>
                        <tr>
                            <th>Sms Per Day</th>
                            <td><?php echo $setting->max_sent?></td>
                        </tr>
                        <tr>
                            <th>Signature</th>
                            <td><?php echo $setting->signature?></td>
                        </tr>
                        <tr>
                            <th>Signature Changes</th>
                            <td><?php echo $setting->changes?>x</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-7 layout-spacing">
        <div class="card">
            <div class="card-header">
                <h4>Preview</h4>
            </div>

            <div class="card-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, laudantium possimus 
                    officiis est modi ullam quasi, 
                    molestias!
                    <br>
                    - <strong><span id="sms_signature_view">Your Signature Here.</span></strong>
                </p>
            </div>
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