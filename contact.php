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
   <body>
   <?php include "include/menu.php"; ?>
      <main role="main" class="container mt-4">
      <div class="row " style="padding-top:60px">
              <div class="col-lg-12">
      <div class="card">
  <div class="card-header">
    Contact Us
  </div>
  <div class="card-body">
    <h5 class="card-title">Prasarana Berhad</h5>
    <p class="card-text">B-20-1, Level 20,  Menara UOA Bangsar,  No 5, Jalan Bangsar Utama 1, 59000 Kuala Lumpur.<br>Tel: +603-2299 1999 / 2287 5959 |  Fax: +603-2299 1919</p>

  </div>
</div>
</div>
</div>
      </main>
      <!-- /.container -->
      <?php include "include/script.php"; ?>
   </body>
</html>