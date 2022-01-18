<?php build('content')?>

<!--  GENERAL -->
<div class="col-md-12 layout-spacing">
    <div class="card">
        <?php
            Form::open([
                'method' => 'post',
                'action' => appRequest('Blogs/store'),
                'id'     => $form['name'],
                'name'     => $form['name'],
                'enctype'  => 'multipart/form-data'
            ]);
            Form::close();
        ?>

        <div class="card-header text-right">
            <?php Form::submit('submit'  , 'Save Blog' , [
                'class' => 'btn btn-primary',
                'form'  => $form['name']
            ])?>
        </div>
    </div>

    <?php Flash::show()?>
</div>
<div class="card card-grey">
	<div class="card-body">
		<h4>General</h4>
		<div class="form-group">
			<?php
				Form::label('Title');
				Form::text('title' , '' , $form['inputText']);
			?>
		</div>

		<div class="form-group">
			<?php
				Form::label('Sub Title');
				Form::text('sub_title' , '' , $form['inputText']);
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
					Form::text('wallpaper_alt' , '' , $form['inputText']);
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
						Form::textarea('seo[keyword]' , '' , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Description');
						Form::textarea('seo[description]' , '' , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Author');
						Form::textarea('seo[author]' , '' , $form['inputTextarea']);
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
						Form::label('Title');
						Form::text('openGraph[title]' , '' , $form['inputText']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Description');
						Form::textarea('openGraph[description]' , '' , $form['inputTextarea']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Image');
						Form::text('openGraph[image]' , '' , $form['inputText']);
					?>
				</div>

				<div class="form-group">
					<?php
						Form::label('Type');
						Form::text('openGraph[type]' , '' , $form['inputText']);
					?>
				</div>

				
			</div>
		</div>
	</div>
</div>


<?php endbuild()?>


<?php appGrab('templates/base')?>