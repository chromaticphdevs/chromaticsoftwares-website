<?php build('content')?>

<div class="row layout-spacing layout-top-spacing" id="cancel-row">
<div class="col-md-12 layout-spacing text-right">
    <div class="card">
        <div class="card-header">
        <?php Form::submit('submit'  , 'Save Transaction' , [
            'class' => 'btn btn-primary',
            'form'  => $form
        ])?>
        </div>
    </div>
</div>
<div class="col-md-12  layout-spacing">
    <?php
      Form::open([
        'method' => 'post',
        'action' => appRequest('transactions/update'),
        'id'     => $form,
        'name'   => $form
      ]);
    ?>
    <?php Form::hidden('id', $transaction->id)?>
    <div class="card">
        <?php Flash::show()?>
        <div class="card-header">
            <h5>Transaction</h5>
        </div>
        <div class="card-body">
            <div class="form-group">
                <?php $inputRequired['placeholder'] = 'Title'?>
                <?php Form::label('Title')?>
                <?php Form::text('title' , $transaction->title , $inputRequired)?>
            </div>

            <div class="form-group">
                <?php Form::label('date')?>
                <?php Form::date('date' , $transaction->date , $inputAttr)?>
            </div>

            <div class="form-group">
                <?php $inputRequired['placeholder'] = 'Description'?>
                <?php Form::label('Description')?>
                <?php Form::textarea('description' , $transaction->description , $inputRequired)?>
            </div>
        </div>
    </div>
    <?php Form::close()?>
</div>
<?php endbuild()?>


<?php appGrab('templates/base')?>
