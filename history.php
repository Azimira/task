<?php
include '../controller/control.php';

if (!isset($_SESSION['user_id'])) {
	echo "<script>window.location='../'</script>";
} 
$ctrl = new control();

$conn = $ctrl->open();
$admin = $ctrl->getAdminDetails($conn);
$getRecord = $ctrl->allRecord($conn);

?>

<!DOCTYPE html>
<html lang="en">
   <?php include "include/head.php"; ?>
   <body>
   <?php include "include/menu.php"; ?>
      <main role="main" class="container mt-4">
          <div class="row " style="padding-top:60px">
              <div class="col-lg-12">
<table class="table table-hover" >
  <thead>
    <tr>
      <th scope="col">Bus No</th>
      <th scope="col">Bus Model</th>
      <th scope="col">Maintenance Order</th>
      <th scope="col">Time Complete</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $num = 1;
    if ($getRecord == false) { ?>
      <tr>
        <td colspan="7">No Record Found..</td>
      </tr>
    <?php } else {
      foreach ($getRecord as $record) {  ?>
      <tr>
      <th scope="row"><?php echo $record['busno']; ?></th>
      <td><?php echo $record['busmodel']; ?></td>
      <td><?php echo $record['maintenanceorder']; ?></td>
      <td><?php echo $record['timecompleted']; ?></td>
      <td><a href="view.php?id=<?php echo $record['id'];  ?>" class="btn btn-info btn-sm mx-2">More</a><a href="../controller/control.php?mod=delete&id=<?php echo $record['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">delete</a></td>
    </tr>
    <?php } } ?>
    
  </tbody>
</table>
              </div>
          </div>
      
      </main>
      <!-- /.container -->
      <?php include "include/script.php"; ?>
   </body>
</html>