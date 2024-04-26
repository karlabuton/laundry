 <!-- Modal for adding new data -->
 <?php
    foreach ($data_customer as $customer) {
    ?>
     <div class="modal fade" id="addaccount<?php echo $customer->c_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddcustomer" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddcustomerLabel">Customer Data Input</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <form action="<?= base_url() ?>CustomerController/addaccount/<?php echo $customer->c_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                     <div class="modal-body">

                         <input type="text" class="form-control" name="c_id" value="<?php echo $customer->c_id ?>" hidden>

                         <div class="form-group">
                             <label class="control-label ">User Type</label>
                             <select class="form-control" name="usertype" required>
                                 <option value="Customer">Customer</option>
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
                         <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 <?php
    }
    ?>