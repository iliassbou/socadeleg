<?php

include '../dbconnection.php';
// for add projects info  

	$name = $_POST['title'];
    $description = $_POST['description'];
   // $Catégorie = $_POST['Catégorie'];
	$image = $_POST['image'];
    $sql = "INSERT INTO `projects` (`title`, `description`, `image`) VALUES ('$name', '$description', '$image');";
    $result = mysqli_query($con,$sql);

?>