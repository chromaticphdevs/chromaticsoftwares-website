<?php build('content')?>

<!--  GENERAL -->
<div class="col-md-12 layout-spacing">
    <div class="card">
        <?php
            Form::open([
                'method' => 'post',
                'action' => appRequest('BlogArticle/store'),
                'id'     => $form['name'],
                'name'     => $form['name'],
                'enctype'  => 'multipart/form-data'
            ]);

            Form::hidden('blog_id' , $blog->id);
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
<div class="row">
    <div class="col-md-8">
        <?php
            $textarea  = $form['inputTextarea'];
            $textarea['id'] = 'ckeditor';
            Form::textarea('body' , '' , $textarea)
        ?>
    </div>

    <div class="col-md-4">
       <div class="card card-grey">
            <div class="card-body">
                <div class="form-group">
                    <?php Form::label('title')?>
                    <?php Form::text('title' , '' , $form['inputText'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Sub Title')?>
                    <?php Form::text('sub_title' , '' , $form['inputText'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Wall Paper')?>
                    <?php Form::file('wallpaper' ,  $form['inputFile'])?>
                </div>

                <div class="form-group">
                    <?php Form::label('Wall Paper Alt')?>
                    <?php Form::text('wallpaper_alt' , '' , $form['inputText'])?>
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
