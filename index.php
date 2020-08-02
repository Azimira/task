<?php
include '../controller/control.php';

if (!isset($_SESSION['user_id'])) {
	echo "<script>window.location='../'</script>";
} 
$ctrl = new control();
$conn = $ctrl->open();
$admin = $ctrl->getAdminDetails($conn);

?>

<!DOCTYPE html>
<html lang="en">
   <?php include "include/head.php"; ?>
   <link rel="stylesheet" href="../assets/carousel.css">
   <body>
   <?php include "include/menu.php"; ?>
   <div class="container-fluid p-0">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" focusable="false" src="../images/task.jpg">
        
      </div>
  </div>
   </div>
      <main role="main" class="container mt-4">
      
      </main>
      <!-- /.container -->
      <?php include "include/script.php"; ?>
   </body>
</html>