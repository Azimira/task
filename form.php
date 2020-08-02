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
         <div class="row">
         <div class="col-lg-8 mx-auto" style="padding-top:60px">
         <div class="card">
             <form method="post" action="../controller/control.php?mod=addrecord">
         <div class="card-body">
         <h5 class="card-title text-center">PREVENTIVE MAINTENANCE CHECKLIST RAPID KL</h5>
         
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationDefault01">Bus No</label>
                  <input type="text" class="form-control" id="validationDefault01" name="busno">
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Bus Model</label>
                  <input type="text" class="form-control" id="validationDefault02" name="busmodel">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationDefault03">ID No</label>
                  <input type="text" class="form-control" id="validationDefault03" required name="idno">
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationDefault04">Time Start</label>
                  <input type="time" class="form-control" id="validationDefault03" required name="timestart">  
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Time Completed</label>
                  <input type="time" class="form-control" id="validationDefault05" required name="timecompleted">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Maintainance Order</label>
                  <input type="text" class="form-control" id="validationDefault03" required name="maintenanceorder">
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-12 mb-3" >
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline1" name="schedule" value="Weekly" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline1">Weekly</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline2" name="schedule" value="Monthly" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline2">Monthly</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline3" name="schedule" value="Quaterly" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline3">Quaterly</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline4" name="schedule" value="Yearly" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline4">Yearly</label>
                  </div>
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
                           <td><input type="text" class="form-control" name="remarkfront1"></td>
                        </tr>
                        <tr>
                           <th scope="row">1.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input type="text" class="form-control" name="remarkfront2"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>2. Side</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">2.1</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input type="text" class="form-control" name="remarkside1"></td>
                        </tr>
                        <tr>
                           <th scope="row">2.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input type="text" class="form-control" name="remarkside2"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>3. Rear</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">3.1</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input type="text" class="form-control" name="remarkrear1"></td>
                        </tr>
                        <tr>
                           <th scope="row">3.2</th>
                           <td>Hardness & Earthing Check</td>
                           <td><input type="text" class="form-control" name="remarkrear2"></td>
                        </tr>
                        <tr>
                           <td colspan="3">
                              <h6>4. Controller</h6>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">4.1</th>
                           <td>Content Check (Route)</td>
                           <td><input type="text" class="form-control" name="remarkcontroller1"></td>
                        </tr>
                        <tr>
                           <th scope="row">4.2</th>
                           <td>Visual Check (Function & Clean)</td>
                           <td><input type="text" class="form-control" name="remarkcontroller2"></td>
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
                              <td><input type="text" class="form-control" name="remarkradio1"></td>
                           </tr>
                           <tr>
                              <th scope="row">5.2</th>
                              <td>Hardness & Earthing Check</td>
                              <td><input type="text" class="form-control" name="remarkradio2"></td>
                           </tr>
                           <tr>
                              <th scope="row">5.3</th>
                              <td>Content Check (Depot)</td>
                              <td><input type="text" class="form-control " name="remarkradio3"></td>
                           </tr>
                           <tr>
                              <td colspan="3">
                                 <h6>6. Tracker</h6>
                              </td>
                           </tr>
                           <tr>
                              <th scope="row">6.1</th>
                              <td>Visual Check (Function & Clean)</td>
                              <td><input type="text" class="form-control" name="remarktracker1"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.2</th>
                              <td>Hardness & Earthing Check</td>
                              <td><input type="text" class="form-control" name="remarktracker2"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.3</th>
                              <td>Panic Button</td>
                              <td><input type="text" class="form-control" name="remarktracker3"></td>
                           </tr>
                           <tr>
                              <th scope="row">6.4</th>
                              <td>CBTS Cable/C'Clip</td>
                              <td><input type="text" class="form-control" name="remarktracker4"></td>
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
                                 <td><input type="text" class="form-control" name="remarkplayer1"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.2</th>
                                 <td>Hardness & Earthing Check</td>
                                 <td><input type="text" class="form-control" name="remarkplayer2"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.3</th>
                                 <td>Content Check (Route)</td>
                                 <td><input type="text" class="form-control" name="remarkplayer3"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.4</th>
                                 <td>Speaker</td>
                                 <td><input type="text" class="form-control" name="remarkplayer4"></td>
                              </tr>
                              <tr>
                                 <th scope="row">7.5</th>
                                 <td>Microphone</td>
                                 <td><input type="text" class="form-control" name="remarkplayer5"></td>
                              </tr>
                              <tr>
                                 <td colspan="3">
                                    <h6>8. Infotaiment Sys</h6>
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row">8.1</th>
                                 <td>LCD Monitor Front</td>
                                 <td><input type="text" class="form-control" name="remarksys1"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.2</th>
                                 <td>LCD Monitor Rear</td>
                                 <td><input type="text" class="form-control" name="remarksys2"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.3</th>
                                 <td>Visual Check (Function & Clean)</td>
                                 <td><input type="text" class="form-control" name="remarksys3"></td>
                              </tr>
                              <tr>
                                 <th scope="row">8.4</th>
                                 <td>Hardness & Earthing Check</td>
                                 <td><input type="text" class="form-control" name="remarksys4"></td>
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
                                    <td><input type="text" class="form-control" name="remarkcctv1"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.2</th>
                                    <td>Camera Condition</td>
                                    <td><input type="text" class="form-control" name="remarkcctv2"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.3</th>
                                    <td>Visual Check (Function & Clean)</td>
                                    <td><input type="text" class="form-control" name="remarkcctv3"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.4</th>
                                    <td>Hardness & Earthing Check</td>
                                    <td><input type="text" class="form-control" name="remarkcctv4"></td>
                                 </tr>
                                 <tr>
                                    <th scope="row">9.5</th>
                                    <td>DVD/NVR</td>
                                    <td><input type="text" class="form-control" name="remarkcctv5"></td>
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
                                       <td><input type="text" class="form-control" name="remarketm1"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">10.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input type="text" class="form-control" name="remarketm2"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="3">
                                          <h6>11. CBTS -READER</h6>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">11.1</th>
                                       <td>Visual Check (Function & Clean)</td>
                                       <td><input type="text" class="form-control" name="remarkreader1"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">11.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input type="text" class="form-control" name="remarkreader2"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="3">
                                          <h6>12. BTS</h6>
                                       </td>
                                    </tr>
                                    <tr>
                                       <th scope="row">12.1</th>
                                       <td>Visual Check (Function & Clean)</td>
                                       <td><input type="text" class="form-control" name="remarkbts1"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">12.2</th>
                                       <td>Hardness & Earthing Check</td>
                                       <td><input type="text" class="form-control" name="remarkbts2"></td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">
                                          <h6>13. CASH VAULT</h6>
                                       </td>
                                       <td>
                                       <div class="form-row">
               <div class="col-md-12 mb-3" >
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInlineA" name="vaulttype" value="A" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInlineA">A</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInlineB" name="vaulttype" value="B" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInlineB">B</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInlineC" name="vaulttype" value="C" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInlineC">C</label>
                  </div>
               </div>
            </div></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">13.1</th>
                                       <td>Lockdown Condition</td>
                                       <td><input type="text" class="form-control" name="remarkvault1"></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">13.2</th>
                                       <td>Visual Check</td>
                                       <td><input type="text" class="form-control" name="remarkvault2"></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
         </div>
         <hr>
         <div class="card-body float-right">
    <button type="submit" class="btn btn-success">submit</button>
  </div>
         </form>
         </div>
         </div>
      </main>
      <!-- /.container -->
      <?php include "include/script.php"; ?>
   </body>
</html>