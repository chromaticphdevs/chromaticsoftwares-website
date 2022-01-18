<div class="row">
    <div class="col-md-5  layout-spacing">
        <form action="<?php echo appRequest('customers/updatePersonal')?>" 
        method="post" name="<?php echo $formPersonal?>" 
        id="<?php echo $formPersonal?>"">

        <?php Form::hidden('customer_id' , $customer->id)?>
            <div class="card">
                <div class="card-header">
                    <h5>Personal</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <?php $inputRequired['placeholder'] = 'First Name'?>
                        <?php Form::label('First Name')?>
                        <?php Form::text('first_name' , $customer->first_name , $inputRequired)?>
                    </div>

                    <div class="form-group">
                        <?php $inputAttr['placeholder'] = 'Last Name'?>
                        <?php Form::label('Last Name')?>
                        <?php Form::text('last_name' , $customer->last_name , $inputAttr)?>
                    </div>

                    <div class="form-group">
                        <?php $inputAttr['placeholder'] = 'Address'?>
                        <?php Form::label('Address')?>
                        <?php Form::textarea('address' , $customer->address , $inputAttr)?>
                    </div>

                    <div class="form-group">
                        <?php $inputAttr['placeholder'] = 'Company'?>
                        <?php Form::label('Company')?>
                        <?php Form::text('company_name' , $customer->company_name , $inputAttr)?>
                    </div>

                    <div class="form-group">
                        <?php $inputAttr['placeholder'] = 'Industry'?>
                        <?php Form::label('Industry')?>
                        <?php Form::text('industry' , $customer->industry , $inputAttr)?>
                    </div>
                </div>
            </div>
            <?php unset($inputAttr['placeholder'])?>
        </form>
    </div>

    <div class="col-md-7  layout-spacing">
        <?php $inputAttr['form'] = $formPersonal?>
        <div class="card">
            <div class="card-header">
                <h5>Notes</h5>
            </div>
            <div class="card-body">
                <?php $inputAttr['rows'] = 5?>
                <div class="form-group">
                    <?php Form::textarea('notes' , $customer->notes ,$inputAttr)?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
        <?php Form::submit('submit'  , 'Save Contact' , [
            'class' => 'btn btn-primary',
            'form'  => $formPersonal
        ])?>

        <?php Form::submit('submit'  , 'Cancel' , [
            'class' => 'btn btn-danger',
            'form'  => $formPersonal
        ])?>
        </div>
    </div>
</div>