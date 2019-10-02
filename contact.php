<?php

// define variables and set to empty values
$name = $email = $subject = $message = "";
$nameError = $emailError  = $subjectError = $messageError = "";
$isSuccess = false;
$emailTo = "ibougaze@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = verifyInput($_POST["name"]);
  $email = verifyInput($_POST["email"]);
  $subject = verifyInput($_POST["subject"]);
  $message = verifyInput($_POST["message"]);
  $isSuccess = true;
  $emailText = "";

  if(empty($name)){
    $nameError = "what is your name ?";
    $isSuccess = false;
  } elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = "Only letters and spaces are allowed "; 
      $isSuccess = false;
    }
    else {
      $emailText .= "Name : $name\n";
    }
  if(!isEmail($email)){
    $emailError = "trying to roll me? it's not an email that!";
    $isSuccess = false;
  }
  else {
    $emailText .= "Email : $email\n";
  }

  if(empty($subject)){
    $subjectError = "what is your subject ?";
    $isSuccess = false;
  }
  else {
    $emailText .= "sujet : $subject\n";
  }
  if(empty($message)){
    $messageError = "What is your message ?";
    $isSuccess = false;
  }
  else {
    $emailText .= "Message : $message\n";
  }

  if($isSuccess){
    $headers = " From: $name <$email>\r\nReplay-To:$email";
    mail($emailTo,"Un message de votre site",$emailText);
    $name = $email = $subject = $message = "";
  }
}

function isEmail($var)
{
  return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<!DOCTYPE html>
<html lang="en">


<!------------head------------>
<?php include 'includes/head.php'; ?>


<body id="page-top1" style="background-color:#000000">

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
            <a class="nav-link js-scroll-trigger" href="service.php">Nos Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Portfolio.php">Realisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger active" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center pt-6">
          <h2 class="mt-0 text-light text-capitalize">NOUS CONTACTER</h2>
          <hr class="divider my-4">
          <p class="text-light mb-5" style="font-size:20px">Prêt à démarrer votre prochain projet avec nous? Appelez-nous ou envoyez-nous un email et nous vous contacterons dans les plus brefs délais!</p>
        </div>
      </div>

      <div class="row" style="margin-top:3rem">
             
      <!--------Contact Info-------->
        <?php include 'includes/contactinfo.php'; ?>

      </div>
      <!--------Contact Formulaire-------->

    <div class="row pt-5" style="margin-top:3rem">
      <div class="col-lg-6 col-md-6 col-sm-12 pb-5">
      <form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
          <div class="input-group mb-3">
              <input type="text" name ="name" class="form-control bg-transparent" placeholder="Votre nom" value="<?php echo $name ?>" aria-describedby="basic-addon1">

              <p class="comments" style="color:red ; font-style:italic"><?php echo $nameError; ?> </p>
            </div>

            <div class="input-group mb-3">
                <input type="text" name ="email" class="form-control bg-transparent" placeholder="Votre Email" value="<?php echo $email ?>" aria-describedby="basic-addon1">

                <p class="comments" style="color:red ; font-style:italic"><?php echo $emailError; ?></p>
              </div>

              <div class="input-group mb-3">
                  <input type="text" name ="subject" class="form-control bg-transparent" placeholder="sujet" value="<?php echo $subject ?>" aria-describedby="basic-addon1">

                  <p class="comments" style="color:red ; font-style:italic"><?php echo $subjectError; ?></p>
                </div>
                <div class="input-group">
                    <textarea name="message" cols="30" rows="7"  class="form-control bg-transparent" placeholder="Message" value="<?php echo $message ?>"></textarea>
                  </div>
                  <div style="margin-top:1rem">
                    <input type="submit" name="message" value="Send Message" class="btn btn-primary py-2 px-4">
                    <p class="comments" style="color:#2f89fc ; font-style:italic ; display :<?php if($isSuccess) echo 'block'; else echo 'none';?>"><?php echo "Votre message a bien été envoye : Merci de m'avoir contacte :)" ?></p>
                  </div>
      </form>
      </div>
            <div class="col-lg-6 col-md-6 col-sm-12" id="map">
              <div class="mapWrapper">
                <iframe width="500" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3092.6401414365455!2d-8.538454502218883!3d32.24263164612406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd22addfa21%3A0x5011875dfdbbd387!2sSOCADELEG!5e0!3m2!1sfr!2sma!4v1568907012907!5m2!1sfr!2sma" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
            </div>
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