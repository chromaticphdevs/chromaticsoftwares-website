<?php unset($inputAttr['form'])?>

<?php $contacts = $customer->contacts?>
<div class="card">
    <div class="card-header">
        <h5>Contacts</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo appRequest('/customers/updateContact')?>" 
            method="post" id="edit_contact_form" name="edit_contact_form">
            <?php Form::hidden("customer_id" , "$customer->id");?>
            <?php foreach($contacts as $key => $row) :?>
            <?php Form::hidden("contact[{$key}][id]" , "$row->id");?>
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <?php Form::select("contact[{$key}][type]" , $contactTypes , $row->type , $inputAttr)?>
                    </div>
                    <div class="col-9">
                        <?php Form::text("contact[{$key}][value]" , $row->value , $inputAttr)?>
                    </div>
                </div>                  
            </div>
            <?php endforeach?>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php Form::submit('submit'  , 'Save Changes' , [
            'class' => 'btn btn-primary',
            'form'  => 'edit_contact_form'
        ])?>
    </div>
</div>