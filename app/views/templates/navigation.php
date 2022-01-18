<nav class="navbar header-nav navbar-expand-lg">
<?php
  $request = $_SERVER['REQUEST_URI'] ?? '';

  $request = !empty($request) ? explode('/',$request) : [];

  $active  = !empty($request[1]) ? trim(strtolower($request[1])) : 'home';
?>
<div class="container">
    <a class="navbar-brand" href="/"><img src="<?php echo base_url('tmp/images/logo.png')?>" alt="image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp"
    aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
      <ul class="navbar-nav">
        <li>
          <a href="/" class="nav-link <?php echo $active == 'home' ? 'active' : '' ?> dropdown-toggle"
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false" >Solutions</a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">HRIS</a>
            <a class="dropdown-item" href="#">MLM Software</a>
            <a class="dropdown-item" href="#">Hire us</a>
          </div>
        </li>
        <li>
          <a href="/About" class="nav-link <?php echo $active == 'projects' ? 'active' : '' ?>">About Us</a>
        </li>
        <li>
          <a href="/contact" class="nav-link <?php echo $active == 'resume' ? 'active' : '' ?>">Contact</a>
        </li>
        <li>
          <a href="/blogs" class="nav-link <?php echo $active == 'blogs' ? 'active' : '' ?>">Blogs</a>
        </li>
        <li>
          <a href="#" class="nav-link <?php echo $active == 'contact' ? 'active' : '' ?>">Projects</a>
        </li>
    </ul>
    </div>
</div>
</nav>
