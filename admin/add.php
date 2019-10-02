<?php

include 'dbconnection.php';
session_start();
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for add projects info  
if(isset($_POST['Submit'])){

    $name = $_POST['title'];
    $description = $_POST['description'];
    //$Catégorie = $_POST['categorie'];
    $image = $_POST['image'];
    $sql = "INSERT INTO `projects` (`title`, `description`, `image`) VALUES ('$name', '$description', '$image');";
    
    mysqli_query($con,$sql);
    $_SESSION['msg']="Project Added successfully";

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update Profile</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
                        
                    
                    <li class="mt">
                      <a href="manage-projects.php" >
                          <i class="fa fa-file"></i>
                          <span>Manage Projects</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="add.php">
                          <i class="fa fa-plus"></i>
                          <span>ajoute un project</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="change-password.php">
                          <i class="fa fa-wrench"></i>
                          <span>Change Password</span>
                      </a>
                  </li>
              
                 
              </ul>
          </div>
      </aside>

    <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Ajouter Un Projet</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" method="POST" action="add.php">
                          <div class="form-group">
                              <label for="title" class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">titre</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="title" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label for="Description" class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Description</label>
                              <div class="col-sm-10">
                                  <textarea type="text" class="form-control" name="description"  ></textarea>
                              </div>
                          </div>
                             <div class="form-group">
                              <label for="categorie" class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Catégorie</label>
                              <div class="col-sm-3">

                                <input class="form-control category_list" list="browsers" name="categorie" >
                                        <datalist id="browsers">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Google Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
                                    
                                </div>
                          </div>

                              <div class="form-group">
                              <label for="image" class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">image du projet </label>
                              <div class="col-sm-10">
                                 <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" multiple>
                              </div>
                          </div>

                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
        </section>
</section></section>




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>