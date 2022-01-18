<?php build('content')?>

<!--  GENERAL -->
<div class="col-md-12 layout-spacing">
    <div class="card">
        <?php
            Form::open([
                'method' => 'post',
                'action' => appRequest('Blogs/update'),
                'id'     => $form['name'],
                'name'     => $form['name'],
                'enctype'  => 'multipart/form-data'
            ]);

            Form::hidden('blog_id' , $blog->id);
			Form::hidden('seo_id' , $seo->id);
			Form::hidden('fbog_id' , $fbog->id);

            Form::close();
        ?>

        <div class="card-header text-right">
            <?php Form::submit('submit'  , 'Save Changes' , [
                'class' => 'btn btn-primary',
                'form'  => $form['name']
            ])?>

            <a href="<?php echo appRequest('BlogArticle/create/?blog_id='.$blog->id)?>" class="btn btn-primary">Add Content</a>
        </div>
    </div>
</div>
<div class="card card-grey">
	<div class="card-body">
		<h4>General</h4>
		<?php Flash::show()?>

		<div class="form-group">
			<?php
				Form::label('Title');
				Form::text('title' , $blog->title , $form['inputText']);
			?>
		</div>

		<div class="form-group">
			<?php
				Form::label('Sub Title');
				Form::text('sub_title' , $blog->sub_title , $form['inputText']);
			?>
		</div>

		<div class="row form-group">
			<div class="col">
				<?php
					Form::label('WallPaper');
					Form::file('wallpaper' , $form['inputFile']);
				?>
			</div>
			<div class="col">
				<?php
					Form::label('Wall Paper Alt');
					Form::text('wallpaper_alt' , $blog->wallpaper_alt , $form['inputText']);
				?>
			</div>
		</div>
	</div>
</div>


<div class="row layout-top-spacing">
	<div class="col-md-6">
		<div class="card card-grey">
			<div class="card-body">
				<h4>SEO</h4>

				<div class="form-group">
					<?php
						Form::label('Key Word');
						Form::textarea('seo[keyword]' , $seo->keyword , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Description');
						Form::textarea('seo[description]' , $seo->description , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Author');
						Form::textarea('seo[author]' , $seo->author , $form['inputTextarea']);
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card card-grey">
			<div class="card-body">
				<h4>FACEBOOK OPEN GRAPH</h4>

				<div class="form-group">
					<?php
						Form::label('URL');
						Form::text('' , $fbog->url , $form['inputText']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Title');
						Form::text('openGraph[title]' , $fbog->title , $form['inputText']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Description');
						Form::textarea('openGraph[description]' , $fbog->description , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Image');
						Form::text('openGraph[image]' , $fbog->image , $form['inputText']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Type');
						Form::text('openGraph[type]' , $fbog->type , $form['inputText']);
					?>
				</div>

			
			</div>
		</div>
	</div>
</div>


<?php endbuild()?>


<?php appGrab('templates/base')?>