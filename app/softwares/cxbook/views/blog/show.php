<?php build('content')?>
<div class="col-md-12 layout-spacing">
    <div class="card">
        <div class="card-header text-right">
        	<a href="<?php echo appRequest("Blogs/")?>" class="btn btn-primary btn-sm">Blogs</a>
        	<a href="<?php echo makeRequest("Blogs/show/{$blog->slug}")?>" class="btn btn-warning btn-sm" target="_blank">Read</a>
            <a href="<?php echo appRequest("Blogs/edit/{$blog->id}")?>" class="btn btn-primary btn-sm">Edit Blog</a>
            <a href="<?php echo appRequest("BlogArticle/create/?blog_id={$blog->id}")?>" 
            	class="btn btn-primary btn-sm">Add Article</a>
        </div>
    </div>
</div>
		
<div class="row">
	<div class="col-md-6">
		<h4><?php  echo $blog->title?></h4>
		<div>
			<img src="<?php echo $uploadLink.DS.$blog->wallpaper?>" style="width: 400px">
		</div>

		<section>
			<table class="table">
				<tbody>
					<tr>
						<td colspan="2"><h4>General</h4></td>
					</tr>
					<tr>
						<td>Title</td>
						<td><?php echo $blog->title?></td>
					</tr>
					<tr>
						<td>Sub Title</td>
						<td><?php echo $blog->sub_title?></td>
					</tr>
					<tr>
						<td>Wallpaper</td>
						<td>
							<div><?php echo $uploadLink.DS.$blog->wallpaper?></div>
							<div><strong><?php echo $blog->wallpaper_alt?></strong></div>
						</td>
					</tr>

					<tr>
						<td>Created On</td>
						<td>
							<div><?php echo time_since($blog->created_at)?></div>
							<div><?php echo date_long($blog->created_at, 'M d ,Y')?></div>
						</td>
					</tr>



					<tr>
						<td colspan="2"><h4>SEO</h4></td>
					</tr>
					<tr>
						<td>Keyword</td>
						<td><?php echo $seo->keyword?></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><p><?php echo $seo->description?></p></td>
					</tr>
					<tr>
						<td>Author</td>
						<td><?php echo $seo->author?></td>
					</tr>

					<tr>
						<td colspan="2"><h4>Facebook OPEN GRAPH</h4></td>
					</tr>
					<tr>
						<td>Title</td>
						<td><p><?php echo $fbog->title?></p></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><?php echo $fbog->description?></td>
					</tr>
					<tr>
						<td>Image</td>
						<td><?php echo $fbog->image?></td>
					</tr>
					<tr>
						<td>Type</td>
						<td><?php echo $fbog->type?></td>
					</tr>
					<tr>
						<td>URL</td>
						<td><?php echo $fbog->url?></td>
					</tr>
				</tbody>
			</table>
		</section>
	</div>

	<div class="col-md-5 offset-md-1">
		<h4>Articles</h4>
		<div class="layout-top-spacing"></div>
		<ul id="current-files">
			<?php foreach($articles as $key => $row) :?>
				<li data-position="<?php echo $row->position?>" id="<?php echo 'items-'.$row->id?>">
					<div class="article">
						<p><?php echo date_long($row->created_at ,'M d, Y')?></p>
						<h5><?php echo $row->title?></h5>
						<p><?php echo $row->sub_title?></p>
						<div>
							<span class="badge badge-info"><?php echo time_since($row->created_at)?></span>
							<a href="<?php echo appRequest("BlogArticle/edit/{$row->id}")?>">
								<span class="badge badge-danger">Edit</span>
							</a>
						</div>
					</div>
				</li>
			<?php endforeach?>
		</ul>
	</div>
</div>
<?php endbuild()?>

<?php build('scripts')?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
  $(document).ready(function(evt) {

    $("#current-files").sortable(
      {
      axis: 'y',
      update: function (event, ui)
      {
          var data = $(this).sortable('serialize');

          $.ajax({
              data: data,
              type: 'POST',
              url: getURL('cxbook/API_BlogArticle/reorderItems'),

              success:function(response) {
                console.log(response);
              }
          });
      }
    }
  );
  });
</script>
<?php endbuild()?>

<?php appGrab('templates/base')?>