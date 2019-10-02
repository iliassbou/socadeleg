<!DOCTYPE html>
<html lang="en">

<!------------head------------>
<?php include 'includes/head.php'; ?>


<body id="page-top"  style="background:#000;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
  <div class="container">
      <a class="navbar-brand navbar-logo js-scroll-trigger" href="#page-top">Logo</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about.php">Presentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger active" href="service.php">Nos Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Portfolio.php">Realisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">L'equipe SOCADELEG vous offre</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">  
          <p class="text-white-75 font-weight-light mb-5"> </p>
        </div>
      </div>
    </div>
  </header>


  
<!-- Services Section -->
<section class="page-section" id="services">
  <div class="container">
    <h2 class="text-center mt-0">Socadeleg a votre service</h2>
    <hr class="divider my-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-gem text-primary mb-4"></i>
          <h3 class="h4 mb-2">Eclairage batiment</h3>
          <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
          <h3 class="h4 mb-2">Electricité publique</h3>
          <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-globe text-primary mb-4"></i>
          <h3 class="h4 mb-2">Installation electrique</h3>
          <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="mt-5">
          <i class="fas fa-4x fa-heart text-primary mb-4"></i>
          <h3 class="h4 mb-2">Mobilier urbain</h3>
          <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- About Section -->
  <section class="page-section bg-gridient-orange" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4"> For our socadeleg !</p>
          
        </div>
      </div>
    </div>
  </section>

  

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="contact.php">Contact Us</a>
        </div>
      </div>
      <div class="row" style="margin-top:5rem">
             
          <!--------Contact Info-------->
             <?php include 'includes/contactinfo.php'; ?>

      </div>
    </div>
  </section>


  <!------- Footer ------->
 
  <?php include 'includes/footer.php'; ?>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>

</body>

</html>