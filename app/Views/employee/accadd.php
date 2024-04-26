 <!-- Modal for adding new data -->
 <?php
    foreach ($data_employee as $employee) {
    ?>
     <div class="modal fade" id="addacc<?php echo $employee->employee_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddemployee" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddemployeeLabel">Input Employee data</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>



                 <form action="<?= base_url() ?>EmployeeController/addacc/<?php echo $employee->employee_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                     <div class="modal-body">

                         <input type="text" class="form-control" name="employee_id" value="<?php echo $employee->employee_id ?>" hidden>


                         <div class="form-group">
                             <label class="control-label ">User Type</label>
                             <select class="form-control" name="usertype" required>
                                 <option value="Staff">Staff</option>
                             </select>
                         </div>

                         <div class="form-group">
                             <label class="control-label ">Username</label>
                             <input type="text" class="form-control" placeholder='username' name="username" required>

                         </div>

                         <div class="form-group">
                             <label class="control-label ">Password</label>
                             <input type="password" class="form-control" placeholder='Password' name="password" required>

                         </div>


                     </div>
                     <div class="modal-footer d-flex">
                         <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                         <button type="submit" value="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 <?php
    }
    ?>