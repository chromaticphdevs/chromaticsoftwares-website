<?php view('templates/headers')?>

<!-- GRAPH -->
<meta property="og:url"   content="<?php echo $fbog->url?>" />
<meta property="og:type"   content="<?php echo $fbog->type?>" />
<meta property="og:title"  content="<?php echo $fbog->title?>" />
<meta property="og:description" content="<?php echo $fbog->description?>" />
<meta property="og:image"      content="<?php echo $fbog->image?>" />

<style media="screen">
  #myBanner{
    height: 200px;
    background: red;
    text-align: center;
    margin-top: 75px;
    color: #fff;
  }

  #myBanner .title
  {
    font-size: 3em;
    padding-top: 50px;
    color: #fff;
  }

  #blog_content
  {
    margin-top: 50px;
    padding: 10px var(--gutter-content);
  }

  #blog_content ul {
    margin:0px;
    padding: 0px;
  }
  #blog_content ul li {
    list-style: circle;
    padding: 5px 0px;
    margin: 5px 0px;
  }
  #blog_content > article h2
  {
    font-weight: bold;
    font-size: 2em;
    margin-bottom: 15px;
  }

  #blog_content > article h5
  {
    font-weight: bold;
    font-size: 1em;
  }

  #blog_content >  article p
  {
    font-weight: normal;
    line-height: 160%;
  }

  #blog_content  article img {
    margin: 20px 0px;
    width: 100%;
  }

  #blog_content  > article a.center
  {
    text-align: center;
    display: block;
    color: #28292a;
    font-size: .80em;
    margin: 0px;
    padding: 0px;
  }

  #blog_content >  article a.center:hover{
    color: #0f1113;
  }

  @media (max-width: 992px){
    #myBanner{
      margin-top: 0px;
      font-size: .90em;
    }

    #myBanner .banner-content
    {
      padding: 10px;
    }

    #myBanner .title
    {
      font-size: 2.5em;
      padding-top: 20px;
      color: #fff;
    }
    #blog_content
    {
      padding: 10px 20px;
    }
  }

</style>
</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">
    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div> -->
    <!-- end loader -->
    <!-- END LOADER -->
    <header class="header header_style_01">
      <?php echo view('templates/navigation')?>
    </header>

  <section id="myBanner">
    <div class="banner-content"
      style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
      url('<?php echo _path_upload_get('blogs/'.$blog->wallpaper)?>') 50% 50%/cover no-repeat;
      height:200px;">
      <h2 class="title"><?php echo $blog->title?></h2>
      <p><?php echo $blog->sub_title?></p>
    </div>
  </section>

  <section id="blog_content">
  <?php foreach($articles as $key => $row) :?>
    <article>
      <h2><?php echo $row->title?></h2>
      <?php if(!empty($row->sub_title)) :?>
        <h5><?php echo $row->sub_title?></h5>
      <?php endif?>
      <p>
        <?php echo $row->body?>
        <?php if(!empty($row->wallpaper)) :?>
          <img src="<?php echo $pathLink.DS.$row->wallpaper?>" alt="<?php echo $row->wallpaper_alt?>">
        <?php endif;?>
      </p>
    </article>
  <?php endforeach?>
  </section>
  <?php echo view('templates/footer')?>
  <?php echo view('templates/scripts')?>
</body>
</html>
