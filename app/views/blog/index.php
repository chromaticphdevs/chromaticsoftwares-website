<?php view('templates/headers')?>

<!-- GRAPH -->
<meta property="og:url"   content="<?php echo URL.DS?>blogs?slug=custom-software-application-for-business" />
<meta property="og:type"  content="article" />
<meta property="og:title"  content="<?php echo $title?>" />
<meta property="og:description" content="<?php echo $description?>" />
<meta property="og:image"      content="<?php echo url_link('assets/blog/custom_app/wallpaper.jpg')?>" />

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
  #blog_content ul li{
    display: none;
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
      url('<?php echo url_link('assets/blog/custom_app/wallpaper.jpg')?>') 50% 50%/cover no-repeat;
      height:200px;">
      <h2 class="title">Custom Software Application For Business</h2>
      <p>Why and when to consider custom software application</p>
    </div>
  </section>

  <section id="blog_content">
    <article class="">
      <h2>What is Custom Software Application?</h2>
      <p>
        A custom software is a system or application built with a specific set
        of requirements to match your unique business operations.
        Business owners can control everything from look and feel to the functionality

        <img src="<?php echo _path_asset('blog/custom_app/content_1.jpg')?>" alt="">
        <a href="#" class="center">More about custom software application</a>
      </p>
    </article>


    <article class="">
      <h2>When to use custom software application?</h2>

      <article class="">
        <h5>Highly Specialized Business Requirements.</h5>
        <p>
          Most of the off-the-shelf systems are built with only the common features
          that most business needs.
          If you need more specific functionality then you need custom application
          <img src="<?php echo _path_asset('blog/custom_app/content_2.jpg')?>" alt="">
        </p>
      </article>

      <article class="">
        <h5>Inneficient and Complicated Business Proccess.</h5>
        <p>
          Accomplish more with custom solutions that address your unique and complex needs,
          Chromatic we also offer max flexibility to support the company’s growth.
          <img src="<?php echo _path_asset('blog/custom_app/content_3.jpg')?>" alt="">
        </p>
      </article>

      <article class="">
        <h5>Learning Curve.</h5>
        <p>
          Every new system has a learning curve. Developing a custom software for your business
          enables you to adjust the system based exactly on your existing workflow and processes,
          lessening the time of your team members to familiarize with the system.
          <img src="<?php echo _path_asset('blog/custom_app/content_4.jpg')?>" alt="">
        </p>
      </article>
    </article>
  </section>

  <section class="hero-section">
    <article class="">
      <h2>Does your company fall under the three Criteria to consider custom application?</h2>
      <h5>Get the customer-built software your business needs.</h5>
      <p>
        We'll start with the free consultation to uncover
        your software needs and help you determine if a
        custom application is the right fit for you.
      </p>

      <?php grab('templates/content/contact')?>
    </article>
  </section>
  <?php echo view('templates/footer')?>
  <?php echo view('templates/scripts')?>
</body>
</html>
