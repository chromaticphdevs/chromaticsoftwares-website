<?php build('content')?>
<div class="row layout-spacing layout-top-spacing" id="cancel-row">
<?php
    Form::open([
        'method' => 'post',
        'action' => appRequest('Customers/store'),
        'id'     => $form['name'],
        'name'   => $form['name']
    ]);

    Form::close();
?>
    <div class="col-md-12 layout-spacing ">
        <div class="card">
            <div class="text-right">
                <div class="card-header">
                <?php Form::submit('submit'  , 'Save Contact' , [
                    'class' => 'btn btn-primary',
                    'form'  => $form['name']
                ])?>

                <?php Form::submit('submitAdd'  , 'Save And Add' , [
                    'class' => 'btn btn-info',
                    'form'  => $form['name']
                ])?>
                </div>
            </div>

            <?php Flash::show()?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <?php 
                        Form::label('First Name');
                        Form::text('first_name' , '' , [
                            'class' => 'form-control',
                            'form'  => $form['name']
                        ]);
                    ?>
                </div>

                <div class="form-group">
                    <?php 
                        Form::label('Last Name');
                        Form::text('last_name' , '' , [
                            'class' => 'form-control',
                            'form'  => $form['name']
                        ]);
                    ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <?php Form::label('Contact')?>
                    <div class="row">
                        <div class="col-4">
                            <?php
                                Form::text('contact[type][]' , 'email' , [
                                    'class' => 'form-control',
                                    'form'  => $form['name'],
                                    'readonly' => ''
                                ]);
                            ?>
                        </div>
                        <div class="col-8">
                            <?php
                                Form::text('contact[value][]' , FormInput::all()['contact']['value'][0] ?? '' , [
                                    'class' => 'form-control',
                                    'form'  => $form['name']
                                ]);
                            ?>
                        </div>
                    </div>                  
                </div>

                <div class="form-group">
                    <?php Form::label('Contact')?>
                    <div class="row">
                        <div class="col-4">
                            <?php
                                Form::text('contact[type][]' , 'tel' , [
                                    'class' => 'form-control',
                                    'form'  => $form['name'],
                                    'readonly' => ''
                                ]);
                            ?>
                        </div>
                        <div class="col-8">
                            <?php
                                Form::text('contact[value][]' , FormInput::all()['contact']['value'][1] ?? '' , [
                                    'class' => 'form-control',
                                    'form'  => $form['name']
                                ]);
                            ?>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <?php 
                        Form::label('Company');
                        Form::text('company_name' , '' , [
                            'class' => 'form-control',
                            'form'  => $form['name']
                        ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endbuild()?>


<?php appGrab('templates/base')?>