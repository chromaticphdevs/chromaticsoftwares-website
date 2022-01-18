<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="<?php echo _path_public('js/core.js')?>"> </script>
    <script type="text/javascript" src="<?php echo _path_public('js/jquery.js')?>"> </script>

    </script>

    <style>
      body, html {
        padding: 0;
        margin: 0;

        font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;


        width: 80%;

        margin: 0px auto;
        box-sizing: border-box;
      }

      table{
        width: 100%;
      }

      table tr td{
        padding: 10px 0px;
      }
      table tr td:nth-of-type(odd)
      {
        font-weight: bold;
        width: 30%;
      }

      input[type='text']
      {
        width: 100%;
        padding: 10px;
      }

      input[type='submit']
      {
        width: 100%;
        background: blue;
        color: #fff;
        text-align:center;
        height: 50px;
        text-transform: uppercase;
        cursor: pointer;
      }
    </style>
  </head>
  <body>


    <form class="" action="/blogs/store" method="post">
      <textarea id="ckeditor" name="name" rows="8" cols="80"></textarea>

      <input type="submit" name="" value="">
    </form>

    <script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/ckeditor.js')?>"></script>
    <script type="text/javascript" src="<?php echo _path_third_party('ckeditor_4/adapters/jquery.js')?>"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $( '#ckeditor' ).ckeditor()

      });
    </script>
  </body>
</html>
