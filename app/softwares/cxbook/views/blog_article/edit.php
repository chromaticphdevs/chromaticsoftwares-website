<?php build('content')?>

<!--  GENERAL -->
<div class="col-md-12 layout-spacing">
    <div class="card">
        <?php
            Form::open([
                'method' => 'post' , 
                'id' => 'FormremoveWalpaper',
                'action' => appRequest("BlogArticle/removeWallpaper/{$article->id}")
            ]);

            Form::close();
        ?>
        <?php
            Form::open([
                'method' => 'post' , 
                'id' => 'formDelete',
                'action' => appRequest("BlogArticle/delete/{$article->id}")
            ]);
            Form::hidden('blog_id' , $blog->id);
            Form::close();
        ?>
        <?php
            Form::open([
                'method' => 'post',
                'action' => appRequest('BlogArticle/update'),
                'id'     => $form['name'],
                'name'     => $form['name'],
                'enctype'  => 'multipart/form-data'
            ]);

            Form::hidden('blog_id' , $blog->id);
            Form::hidden('article_id' , $article->id);
            Form::close();
        ?>

        <div class="card-header text-right">
            <?php Form::submit('submit'  , 'Save Changes' , [
                'class' => 'btn btn-primary btn-sm',
                'form'  => $form['name']
            ])?>

            <?php Form::submit('submit'  , 'Delete' , [
                'class' => 'btn btn-danger btn-sm',
                'form'  => 'formDelete'
            ])?>

            <a href="<?php echo appRequest("Blogs/show/{$blog->id}")?>"
                class="btn btn-primary btn-sm">Show Blog</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <?php Flash::show()?>
        <?php 
            $textarea  = $form['inputTextarea'];
            $textarea['id'] = 'ckeditor';

            Form::textarea('body' , $article->body , $textarea)
        ?>
    </div>

    <div class="col-md-4">
       <div class="card card-grey">
            <div class="card-body">
                <div class="form-group">
                    <?php Form::label('title')?>
                    <?php Form::text('title' , $article->title , $form['inputText'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Sub Title')?>
                    <?php Form::text('sub_title' , $article->sub_title , $form['inputText'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Wall Paper')?>
                    <?php if(!empty($article->wallpaper)) :?>
                        <div class="image">
                            <img src="<?php echo $pathLink.DS.$article->wallpaper?>" style="width: 100%;">
                            <div class="text-center form-group">
                                <input type="submit" name="" form="FormremoveWalpaper" class="btn btn-danger btn-sm" value="Remove Wallpaper">
                            </div>
                        </div>
                    <?php endif?>
                    <?php Form::file('wallpaper' ,  $form['inputFile'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Wall Paper Alt')?>
                    <?php Form::text('wallpaper_alt' , $article->wallpaper_alt , $form['inputText'])?>
                </div>
            </div>
       </div>
    </div>
</div>

<?php endbuild()?>


<?php build('scripts')?>

<script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/ckeditor.js')?>"></script>
<script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/adapters/jquery.js')?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $( '#ckeditor' ).ckeditor()

  });
</script>

<?php endbuild()?>
<?php appGrab('templates/base')?>