<?php build('content')?>

<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-md-12 layout-spacing">
        <div id="withoutSpacing" class="no-outer-spacing">

            <?php foreach($logs as $key => $log) :?>
            <div class="card">
                <div class="card-header" id="<?php echo 'logs_header'.$log->id?>">
                    <section class="mb-0 mt-0">
                        <div role="menu" class="" data-toggle="collapse" 
                        data-target="#<?php echo 'logs'.$log->id?>" aria-expanded="true"
                        aria-controls="<?php echo 'logs'.$log->id?>">
                            <?php echo date_long($log->created_at , 'M d,Y h:i:s a')?>
                        </div>
                    </section>
                </div>

                <div id="<?php echo 'logs'.$log->id?>" class="collapse <?php echo $key == '0' ? 'show' : ''?>" 
                aria-labelledby="<?php echo 'logs_header'.$log->id?>" 
                data-parent="#withoutSpacing">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Email</h5>
                                <p><?php echo $log->email?></p>
                            </div>
                            <div class="col-md-6">
                                <h5>SMS</h5>
                                <p><?php echo $log->sms?></p>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <th>Customer</th>
                                <th>Mobile</th>
                                <th>Email</th>
                            </thead>

                            <tbody>
                                <?php foreach($log->items as $item) :?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo appRequest("customers/show/{$item->id}")?>" 
                                            class="bs-tooltip rounded" target="_blank"
                                            data-placement="top" title="Click To View Customer">
                                                <?php echo $item->full_name?>
                                            </a>
                                        </td>
                                        <td><?php echo $item->mobile?></td>
                                        <td><?php echo $item->email?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach?>
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


<?php build('headers')?>
<link href="<?php echo _path_vendor('cork/assets/css/components/tabs-accordian/custom-accordions.css')?>" rel="stylesheet" type="text/css" />
<?php endbuild()?>
<?php appGrab('templates/base')?>