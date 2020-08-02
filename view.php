<?php
include '../controller/control.php';

if (!isset($_SESSION['user_id'])) {
	echo "<script>window.location='../'</script>";
} 
$ctrl = new control();
$conn = $ctrl->open();
$admin = $ctrl->getAdminDetails($conn);
$id=$_GET['id'];
$record = $ctrl->recordDetails($conn, $id);
?>
<!DOCTYPE html>
<html lang="en">
   <?php include "include/head.php"; ?>
   <body>
   <?php include "include/menu.php"; ?>
      <main role="main" class="container mt-4">
         <div class="row">
         <div class="col-lg-8 mx-auto" style="padding-top:60px">
         <div class="card">
         <div class="card-body">
         <h5 class="card-title text-center">PREVENTIVE MAINTENANCE CHECKLIST RAPID KL</h5>
         
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationDefault01">Bus No</label>
                  <input readonly type="text" class="form-control" id="validationDefault01" value="<?php echo $record['busno']; ?>">
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Bus Model</label>
                  <input readonly type="text" class="form-control" id="validationDefault02" value="<?php echo $record['busmodel']; ?>">
               </div>
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Name</label>
                  <input readonly type="text" class="form-control" id="validationDefault03" required value="<?php echo $record['name']; ?>">
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationDefault03">ID No</label>
                  <input readonly type="text" class="form-control" id="validationDefault03" required value="<?php echo $record['idno']; ?>">
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Time Start</label>
                  <input readonly type="time" class="form-control" id="validationDefault03" required value="<?php echo $record['timestart']; ?>">  
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Time Completed</label>
                  <input readonly type="time" class="form-control" id="validationDefault05" required value="<?php echo $record['timecompleted']; ?>">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Maintainance Order</label>
                  <input readonly type="text" class="form-control" id="validationDefault03" required value="<?php echo $record['maintenanceorder']; ?>">
               </div>
               
               <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Schedule</label>
                  <input readonly type="text" class="form-control" id="validationDefault03" required value="<?php echo $record['schedule']; ?>">
               </div>
            </div>
            <hr>
            <h5 class="card-title text-center">ON BOARD BUS SYSTEM</h5>
            <div class="from-row">
            <div class="col-lg-12">
               <div class="form-group">
                  <h6><label class="form-control-label">LED BOARD CHECKLIST</label></h6>
                  <table class="table">
                     <thead class="thead-light">
                        <tr>
                           <th scope="col" colspan="2">Item</th>
                           <th>Remark</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td colspan="3">
                              <h6>1. Front</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">1.1</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkfront1']; ?>"></td>
                        </tr>
                        <tr>
                           <th scope="row">1.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkfront2']; ?>"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>2. Side</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">2.1</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkside1']; ?>"></td>
                        </tr>
                        <tr>
                           <th scope="row">2.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkside2']; ?>"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>3. Rear</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">3.1</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkrear1']; ?>"></td>
                        </tr>
                        <tr>
                           <th scope="row">3.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkrear2']; ?>"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>4. Controller</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">4.1</th>
                           <td>Content Check (Route)</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcontroller1']; ?>"></td>
                        </tr>
                        <tr>
                           <th scope="row">4.2</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcontroller2']; ?>"></td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="form-group">
                     <h6><label class="form-control-label">FLEET TRACKING SYSTEM CHECKLIST</label></h6>
                     <table class="table">
                        <thead class="thead-light">
                           <tr>
                              <th scope="col" colspan="2">Item</th>
                              <th>Remark</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td colspan="3">
                                 <h6>5. Trunk Radio</h6>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">5.1</th>
                              <td>Visual Check (Function & Clean)</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkradio1']; ?>"></td>
                           </tr>
                           <tr>
                              <th scope="row">5.2</th>
                              <td>Hardness & Earthing Check</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkradio2']; ?>"></td>
                           </tr>
                           <tr>
                              <th scope="row">5.3</th>
                              <td>Content Check (Depot)</td>
                              <td><input readonly type="text" class="form-control " value="<?php echo $record['remarkradio3']; ?>"></td>
                           </tr>
                           <tr>
                              <td colspan="3">
                                 <h6>6. Tracker</h6>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">6.1</th>
                              <td>Visual Check (Function & Clean)</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarktracker1']; ?>"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.2</th>
                              <td>Hardness & Earthing Check</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarktracker2']; ?>"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.3</th>
                              <td>Panic Button</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarktracker3']; ?>"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.4</th>
                              <td>CBTS Cable/C'Clip</td>
                              <td><input readonly type="text" class="form-control" value="<?php echo $record['remarktracker4']; ?>"></td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="form-group">
                        <h6><label class="form-control-label">PASSENGER INFORMATION SYSTEM</label></h6>
                        <table class="table">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col" colspan="2">Item</th>
                                 <th>Remark</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td colspan="3">
                                    <h6>7. Announcement Player</h6>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">7.1</th>
                                 <td>Visual Check (Function & Clean)</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkplayer1']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.2</th>
                                 <td>Hardness & Earthing Check</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkplayer2']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.3</th>
                                 <td>Content Check (Route)</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkplayer3']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.4</th>
                                 <td>Speaker</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkplayer4']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.5</th>
                                 <td>Microphone</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkplayer5']; ?>"></td>
                              </tr>
                              <tr>
                                 <td colspan="3">
                                    <h6>8. Infotaiment Sys</h6>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">8.1</th>
                                 <td>LCD Monitor Front</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarksys1']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.2</th>
                                 <td>LCD Monitor Rear</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarksys2']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.3</th>
                                 <td>Visual Check (Function & Clean)</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarksys3']; ?>"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.4</th>
                                 <td>Hardness & Earthing Check</td>
                                 <td><input readonly type="text" class="form-control" value="<?php echo $record['remarksys4']; ?>"></td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="form-group">
                           <h6><label class="form-control-label">CCTV SYS</label></h6>
                           <table class="table">
                              <thead class="thead-light">
                                 <tr>
                                    <th scope="col" colspan="2">Item</th>
                                    <th>Remark</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <th scope="row">9.1</th>
                                    <td>LCD Monitor</td>
                                    <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcctv1']; ?>"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.2</th>
                                    <td>Camera Condition</td>
                                    <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcctv2']; ?>"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.3</th>
                                    <td>Visual Check (Function & Clean)</td>
                                    <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcctv3']; ?>"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.4</th>
                                    <td>Hardness & Earthing Check</td>
                                    <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcctv4']; ?>"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.5</th>
                                    <td>DVD/NVR</td>
                                    <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkcctv5']; ?>"></td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="form-group">
                              <h6><label class="form-control-label">FCS</label></h6>
                              <table class="table">
                                 <thead class="thead-light">
                                    <tr>
                                       <th scope="col" colspan="2">Item</th>
                                       <th>Remark</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td colspan="3">
                                          <h6>10. CBTS- ETM</h6>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">10.1</th>
                                       <td>Visual Check (Function & Clean)</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarketm1']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">10.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarketm2']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="3">
                                          <h6>11. CBTS -READER</h6>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">11.1</th>
                                       <td>Visual Check (Function & Clean)</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkreader1']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">11.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkreader2']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="3">
                                          <h6>12. BTS</h6>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">12.1</th>
                                       <td>Visual Check (Function & Clean)</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkbts1']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">12.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkbts2']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">
                                          <h6>13. CASH VAULT | Type = <?php echo $record['vaulttype']; ?></h6>
                                       </td>
                                       <td></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">13.1</th>
                                       <td>Lockdown Condition</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkvault1']; ?>"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">13.2</th>
                                       <td>Visual Check</td>
                                       <td><input readonly type="text" class="form-control" value="<?php echo $record['remarkvault2']; ?>"></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
         </div>
         <hr>
         <div class="card-body float-right">
    <a href="history.php" class="btn btn-danger">back</a>
  </div>
         </div>
         </div>
      </main>
      <!-- /.container -->
      <?php include "include/script.php"; ?>
   </body>
</html>