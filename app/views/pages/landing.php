<?php view('templates/headers')?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        #home{
            max-height: 62vh;
        }

        #home h2 , .section-title{
            font-size: 2.3em;
            font-weight: bold;
        } 
        #home p 
        {
            font-size: .98em;
        }

        .cx-logo img 
        {
            width: 100%;
        }

        .section-title
        {
            margin-bottom: 20px !important;
        }

        .soft-services 
        {
            font-size: .90em !important;
            min-height: 200px;
            margin-bottom: 30px;
        }

        .soft-services h4
        {
            font-weight: bold;
            font-size: 1em;
        }

        #idCallToAction
        {
            background: #43658B;
        }

        #idCallToAction > *
        {
            color: #fff !important;
        }

        .section-sub-title
        {
            font-weight: bold;
        }  

        #customer_logo{
            background: #fff;
            /*padding: 10px;*/
        }

        /* On screens that are 600px or less, set the background color to olive */
        @media screen and (max-width: 500px) 
        {
          .cx-logo img {
            width: 150px;
            display: inline;
          }
        }

        /* On screens that are 600px or less, set the background color to olive */
        @media screen and (max-width: 320px) 
        {
          .cx-logo img {
            display: none;
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

    <section id="home" class="cd-hero js-cd-hero">
        <ul class="cd-hero__slider">
            <li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
                <div class="cd-hero__content cd-hero__content--half-width">
                    <div class="text-left">
                        <h2>We Create Software That Empowers Businesses</h2>
                        <p>We develop custom business software applications, 
                            designed to meet your unique business requirements.</p>

                        <p>
                            <a href="/contact" class="btn btn-danger call-to-action">Tell us how we can help</a>
                        </p>
                    </div>
                </div> <!-- .cd-hero__content -->
            </li>
        </ul> <!-- .cd-hero__slider -->
    </section> <!-- .cd-hero -->

    <div id="customer_logo" class="section">
        <div class="container">
            <div class="customer-logos row justify-content-between">
                <div class="cx-logo col-md-2">
                    <img src="assets/projects/logo_no_bg.png">
                </div>

                <div class="cx-logo col-md-2">
                    <img src="assets/projects/kondoko.png">
                </div>

                <div class="cx-logo col-md-2">
                    <img src="assets/projects/breakthrough.jpg">
                </div>

                <div class="cx-logo col-md-2">
                    <img src="assets/projects/logo_white.png">
                </div>
            </div>
        </div>
    </div>


    <div id="benefits" style=" background: url(/assets/about_us_bg.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="container" style="padding:50px">
            <div class="row">
                <div class="col-md-7">
                  <h3 class="section-title">Why choose us?</h3>
                    <article>
                        <p>Our specialized software development process made us possible to deliver software incredibly fast and affordable.</p>

                        <p>We are experienced in creating custom business 
                        application software for small and mid-sized corporations.</p>

                        <p>
                            <strong>The results your looking 
                            for is within your reach!</strong>
                        </p>

                        <a href="/contact" class="btn btn-danger call-to-action">Hire us now!</a>
                    </article>  
                </div>
                <div class="col-md-5">
                    <img src="/assets/about_us_pic.png" style="width:100%;" id="about_us_bg">
                </div>
            </div>
        </div>
    </div>

    <div id="customers" class="section lb">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title">Software Development Services</h3>
            <p class="section-sub-title">Web Application , Mobile Application , Desktop Application</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h4>Third Party Software Integrations</h4>
                        <p class="card-text">Bring your payments hassle free and online! 
                        Notify them via email or SMS!and many more integrations!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h4>Reports And Analytics</h4>
                        <p class="card-text">Give the best desition 
                        for your company using our reports and business analytics.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h4>Digital Transformation</h4>
                        <p class="card-text">Create new or modify exising 
                        business process to meet changing market requirements.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h4>Legacy Application Modernization</h4>
                        <p class="card-text">Outdated software comest with 
                        much risks and expensive to maintain. 
                        improve it with the latest tools and technologies.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <h4>Email and SMS</h4>
                        <p class="card-text">Support your business 
                        infrastructure with scalable software and data integration 
                        that improves key aspects of your business.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card soft-services">
                    <div class="card-body">
                        <h4 class="card-title text-center">Other Services</h4>
                    </div>
                </div>
            </div>

        </div>
  </div>

  <div id="idCallToAction" class="section">
      <div class="container">
          <div class="row">
              <div class="col-md-7">
                  <h3 class="section-sub-title" style="color:#fff">Your business is Unique , Your software should be too.</h3>
                  <p>Get the software that you need as you change and grow. We can build anything you can imagine, but first we’ll make sure it’ll solve an expensive problem and drive business results.</p>

                  <a href="/contact" class="btn btn-primary call-to-action">Start a Project.</a>
              </div>
          </div>
      </div>
  </div>

  <div class="section" style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                  <h3 class="section-title">What do we do?</h3>
                    <article>
                       <p>We are a software development company that provides spectacular software solutions, Helping mid-sized and small-sized companies to untangle complex issues that always emerge during their business expansion.</p>
                    </article>  

                    <article>
                       <p>We boast our specialized software development strategy, that focuses on fast delivery and result , because of this strategy we are able to reduce the cost of our development, That is why we are the most affordable software development company in the industry!</p>
                    </article>
                </div>
                <div class="col-md-5">
                    <img src="/assets/what_we_do_bg.png" style="width:100%;" id="what_we_do_bg">
                </div>
            </div>
        </div>
  </div>

  <div id="services" class="section"  style="display:none">
       <div class="container">
           <div class="section-title text-center">
               <h3>Other Services</h3>
           </div><!-- end title -->

            <div class="row">
               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/desktop-icon.jpg')?>" alt="">
                   <h2>Web Design</h2>
                   <p>We design websites that makes your brand stand-out and known, Your website will also be a reflection of your brand</p>
                 </div>
               </div><!-- end col -->

               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/webapp-icon.jpg')?>" alt="">
                   <h2>Graphic Design</h2>
                   <p>We create designs for business ads graphics, banners , posters all
                    for social medias and design packages for celebrations.</p>
                 </div>
               </div><!-- end col -->

               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/desktop-icon.jpg')?>" alt="">
                   <h2>Social Media Marketing</h2>
                   <p>Social media is important because people use social media every day , it will benefit your company if your products will be introduced to people that is interested and possible customers of your business</p>
                 </div>
               </div><!-- end col -->

               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/mobileapp-icon.jpg')?>" alt="">
                   <h2>Branding</h2>
                   <p>Creating companies brand is no easy task , it's not only the logo that defines the brand . tone of voice , the way you market , choice of colors , contents and product is part of your companies brand , we will help you define your brand.</p>
                 </div>
               </div><!-- end col -->
            </div>
       </div>
  </div>
  <?php echo view('templates/footer')?>
  <?php echo view('templates/scripts')?>
</body>
</html>
