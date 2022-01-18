<?php build('content')?>

<div class="row layout-spacing layout-top-spacing">
    <div class="col-lg-12 layout-spacing">
        <div class="card">
        <?php Flash::show()?>
            <div class="card-body">
                <h2><?php echo $customer->fullname()?></h2>
                <div class="row">
                    <div class="col-md-5">
                        <table class="table">
                            <thead>
                                <?php foreach($customer->contacts as $key => $row): ?>
                                <tr>
                                    <th><?php echo ucwords($row->type)?></th>
                                    <td><?php echo $row->value?></td>
                                </tr>
                                <?php endforeach?>
                                <tr>
                                    <td>
                                        <a href="<?php echo appRequest("customers/edit/{$customer->id}")?>">Edit <i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="col-md-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <td><?php echo $customer->company_name?></td>
                                </tr>
                                <tr>
                                    <th>Industry</th>
                                    <td><?php echo $customer->industry?></td>
                                </tr>
                            </thead>
                        </table>

                        <div>
                            <span class="h5">Notes</span>
                            <p>
                                <?php echo $customer->notes?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Transactions</h3>
                <a href="<?php echo appRequest("transactions/create?customer_id=$customer->id")?>">Create <i class="fa fa-plus"></i> </a>
                <table class="table">
                  <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                  </thead>

                  <tbody>
                    <?php foreach($transactions as $key => $row) :?>
                      <tr>
                        <td><?php echo ++$key?></td>
                        <td><?php echo $row->title?></td>
                        <td><?php echo date_long($row->date , 'M d, Y')?></td>
                        <td>
                          <label for="tool-tip">
                            <?php echo crop_string($row->title , 50)?>
                          </label>
                        </td>

                        <td>
                          <a href="<?php echo apprequest("Transactions/edit/{$row->id}")?>"
                            class="btn btn-primary btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endbuild()?>


<?php appGrab('templates/base')?>
