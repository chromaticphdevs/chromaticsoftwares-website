<?php build('content')?>
<div class="col-md-12 layout-spacing">
    <div class="card">
        <div class="card-header text-right">
            <a href="<?php echo appRequest('Blogs/create')?>"
            	class="btn btn-primary btn-sm">Create</a>
        </div>
    </div>
</div>

<h4>Blogs</h4>
<div class="card card-grey">
	<?php Flash::show()?>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>Title</th>
				<th>Sub</th>
				<th>Wallpaper</th>
				<th>Action</th>
			</thead>

			<tbody>
				<?php foreach($blogs as $key => $row) :?>
					<tr>
						<td>
							<?php echo crop_string($row->title , 50)?>
							<br>
							<a href="<?php echo makeRequest("blogs/show/{$row->slug}")?>" target="_blank">
								<span class="badge badge-primary">
									Read
								</span>
							</a>
						</td>
						<td><?php echo crop_string($row->sub_title, 30)?></td>
						<td><img src="<?php echo $uploadLink.DS.$row->wallpaper?>"
							style="width: 150px"></td>
						<td>
							<a href="<?php echo appRequest("Blogs/show/{$row->id}")?>" class="btn btn-primary btn-sm">
							View</a>
						</td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<?php endbuild()?>


<?php appGrab('templates/base')?>
