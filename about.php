<!DOCTYPE html>
<html lang="en">


<!------------head------------>
<?php include 'includes/head.php'; ?>



<body id="page-top" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
  <div class="container ">
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
            <a class="nav-link js-scroll-trigger active" href="about.php">Presentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="service.php">Nos Services</a>
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
          <h1 class="text-uppercase text-white font-weight-bold">SOCADELEG</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Située à Youssoufia, dans le sud du Maroc, petite ville Phosphatière entre 
            Marrakech et Safi, SOCADELEG S.A.R.L est créée en 2002.
            L'entreprise s'esr démarquée dans le secteur d'electricité, d'éclairage public de la construction des lignes de moynne et basse tension, eb toute splendeur.</p>
        </div>
      </div>
    </div>
</header>

<!-- equipe -->

<main class="py-5 bg-gridient-orange">
<div class="container pt-5 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-xd-12 pb-4">
      <h1 class="text-white pb-5">L'équipe SOCADELEG</h1>
      <p class="text-justify text-white-75 text-lg-left">est connue par son achévement hatif des projets qui
          lui sont appropiés, grace à sa répartition judicieuse
          des taches qui se traduit par une rapidité d'éxécution
        La créativité développe l'activité dit-on... Ces travaux 
        sont le fruit d'un effort d'une équipe dynamique et ambitieuse...
      </p>
    </div>
      <div class="col-lg-6 col-md-6 col-xd-12">
        <img src="images/17.png" class="rounded float-right" width="100%">
      </div>
  </div>
</div>
</main>

<!-- start section -->

<section class="page-section" id="services">
<div class="container">
    <h2 class="text-center mt-5" style="margin-top:20px"> L'équipe SOCADELEG</h2>
    <hr class="divider my-4">
    <div class="row">
    <div class="col-lg-3 col-md-6 col-xd-12">

                <div class="card">
              <img src="images/man.png" alt="man" style="width:100%">
              <div class="container">
              <h4 class="text-center text-white py-2">Sami Alaoui</h4>
              <p class="text-white-50 text-center px-1">Lorem, iLorem, ipsum dolor sit amet consectetur adipisicing elit nobis!psum dolor sit amet consectetur adipisicing elit nobis!</p>
              </div>
            </div>

          </div>

    <div class="col-lg-3 col-md-6 col-xd-12">
          <div class="card">
         <img src="images/women.png" alt="women" style="width:100%">
          <div class="container">
        <h4 class="text-center text-white py-2">Sami Alaoui</h4>
        <p class="text-white-50 text-center px-1">Lorem, iLorem, ipsum dolor sit amet consectetur adipisicing elit nobis!psum dolor sit amet consectetur adipisicing elit nobis!</p>
        </div>
      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-xd-12">
        <div class="card">
         <img src="images/man.png" alt="man" style="width:100%">
          <div class="container">
          <h4 class="text-center text-white py-2">Sami Alaoui</h4>
          <p class="text-white-50 text-center px-1">Lorem, iLorem, ipsum dolor sit amet consectetur adipisicing elit nobis!psum dolor sit amet consectetur adipisicing elit nobis!</p>
          </div>
        </div>
      </div>

        <div class="col-lg-3 col-md-6 col-xd-12">
          <div class="card">
          <img src="images/man.png" alt="man" style="width:100%">
            <div class="container">
            <h4 class="text-center text-white py-2">Sami Alaoui</h4>
            <p class="text-white-50 text-center px-1">Lorem, iLorem, ipsum dolor sit amet consectetur adipisicing elit nobis!psum dolor sit amet consectetur adipisicing elit nobis!</p>
            </div>
          </div>
        </div>
  </div>
</div>
</section> 
<!-- end section -->

  <!-- Services Section -->
 
  <?php include 'includes/service.php'; ?>


  <!-- Call to Action Section -->
  <section class="page-section" id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0 text-light text-capitalize">Contactez-nous</h2>
            <hr class="divider my-4">
            <p class="text-white-50 mb-5" style="font-size:20px">Prêt à démarrer votre prochain projet avec nous? Appelez-nous ou envoyez-nous un email et nous vous contacterons dans les plus brefs délais!</p>
          </div>
        </div>

        <div class="row justify-content-center" style="margin-top:5rem">
  
          <!--------Contact Info-------->
            <?php include 'includes/contactinfo.php'; ?>
            <a class="btn btn-light btn-xl js-scroll-trigger" style="margin-top:5rem" href="contact.php">Contact Us</a>
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