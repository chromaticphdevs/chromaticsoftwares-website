<?php view('templates/headers')?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
						<h2>Software that tailor fit to your needs</h2>
						<p>We help companies to have their software utility tool that will help them utilize productivity with our cost efficient software development service.</p>

						<p>
							<a href="/contact" class="btn btn-danger call-to-action">Tell us how we can help</a>
						</p>
					</div>
				</div> <!-- .cd-hero__content -->
			</li>
		</ul> <!-- .cd-hero__slider -->
	</section> <!-- .cd-hero -->


	<div id="benefits" class="section wb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h3>Leverage the power of technologoy</h3>
					</div><!-- end title -->
				</div>
			</div>
			<div class="row align-items-center item">
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="<?php echo base_url('tmp/images/productivity.jpg')?>" class="img-fluid" alt="" />
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Productivity</h2>
						<p>Do more with the help of technology by automating and computerzing business processes."</p>
					</div>
				</div>
			</div>

			<div class="row align-items-center item">
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Cost Effective </h2>
						<p>Reduce cost by making better decision with the aid of reports</p>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="<?php echo base_url('tmp/images/cost.jpg')?>" class="img-fluid" alt="" />
					</div>
				</div>
			</div>

			<div class="row align-items-center item">
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="<?php echo base_url('tmp/images/growth.png')?>" class="img-fluid" alt="" />
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Growth</h2>
						<p>Grow business by adding skilled people to your team , But how will you manage them? a great management software solution might be a solution for growing businesses.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="customers" class="section lb">
		<div class="container">
      <div class="section-title text-center">
          <h3>Companies that we worked with</h3>
      </div><!-- end title -->

      <div class="row">
  				<div class="col-md-3 customers">
            <img src="<?php echo base_url('assets/projects/dbbi-logo.jpg')?>" alt="">
          </div><!-- end col -->
          <div class="col-md-3 customers">
            <img src="<?php echo base_url('assets/projects/kondoko-logo.jpg')?>" alt="">
          </div>
          <div class="col-md-3 customers">
            <img src="<?php echo base_url('assets/projects/breakthrough-logo.jpg')?>" alt="">
          </div>
        </div>
  	</div>
  </div>

  <div id="services" class="section lb">
       <div class="container">
           <div class="section-title text-center">
               <h3>Services</h3>
           </div><!-- end title -->

            <div class="row">
               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/webapp-icon.jpg')?>" alt="">
                   <h2>Web App Development</h2>
                   <p>Web application development is the creation of application programs that reside on
                     remote servers and are delivered to the user's device over the Internet</p>
                 </div>
               </div><!-- end col -->

               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/desktop-icon.jpg')?>" alt="">
                   <h2>Desktop App Development</h2>
                   <p>Web application development is the creation of application programs that reside on
                     remote servers and are delivered to the user's device over the Internet</p>
                 </div>
               </div><!-- end col -->

               <div class="col-md-4 services">
                <div class="services-inner-box">
                   <img src="<?php echo base_url('assets/mobileapp-icon.jpg')?>" alt="">
                   <h2>Mobile App Development</h2>
                   <p>Web application development is the creation of application programs that reside on
                     remote servers and are delivered to the user's device over the Internet</p>
                 </div>
               </div><!-- end col -->
            </div>
       </div>
  </div><!-- end section -->

  <div id="industries" class="section lb">
     <div class="container">
         <div class="section-title text-center">
             <h3>Industries</h3>
         </div><!-- end title -->
         <div class="row">
          <?php foreach($industries as $key => $row) :?>
           <div class="col-md-4">
            <div class="services-inner-box">
               <div class="ser-icon">
                 <img src="<?php echo base_url('assets/app-icon.png')?>" alt="">
               </div>
               <h2><?php echo $row[0]?></h2>
               <p><?php echo $row[1]?></p>
             </div>
            </div><!-- end col -->
          <?php endforeach?>
          <div class="col-md-4">
           <div class="services-inner-box industry">
              <div class="ser-icon">
                <img src="<?php echo base_url('assets/app-icon.png')?>" alt="">
              </div>
              <h2>
                <a href="/contact">What's you industry?</a>
              </h2>
            </div>
           </div>
          </div>
      </div>
  </div><!-- end section -->
  <?php echo view('templates/footer')?>
  <?php echo view('templates/scripts')?>
</body>
</html>
