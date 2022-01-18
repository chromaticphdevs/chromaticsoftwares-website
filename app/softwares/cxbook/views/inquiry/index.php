<?php build('content')?>
<h2>Our Inquiries</h2>

<div class="card card-grey">
  <div class="card-body">
    <table class="table">
      <thead>
        <th>#</th>
        <th>Email</th>
        <th>Industry</th>
        <th>Fullname</th>
        <th>Company</th>
        <th>Notes</th>
        <th>Time</th>
      </thead>

      <tbody>
        <?php foreach($inquiries as $key => $row) :?>
          <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $row->email?></td>
            <td><?php echo $row->industry?></td>
            <td><?php echo $row->fullname?></td>
            <td><?php echo $row->company?></td>
            <td><?php echo $row->notes?></td>
            <td><?php echo date_long($row->created_at , 'M d, Y')?></td>
          </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>
</div>
<?php endbuild()?>
<?php appGrab('templates/base')?>
