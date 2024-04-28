   <!-- Modal for editing existing data -->
   <?php
    foreach ($data_customer as $transaction) {
    ?>
       <div class="modal fade" id="editstatus<?php echo $transaction->req_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEdittransaction" aria-hidden="true">
           <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEdittransactionLabel">Edit Status Data</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <form action="<?= base_url() ?>StatusController/editstatus/<?php echo $transaction->req_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                       <div class="modal-body">

                           <div class="form-group">
                               <label class="control-label ">Customer</label>
                               <select class="form-control" name="c_id" required>
                                   <option value="">--Please Select--</option>
                                   <?php
                                    foreach ($data_customer as $customer) {
                                    ?>
                                       <option value="<?php echo $customer->c_id ?>" <?php if ($customer->c_id === $transaction->c_id) {
                                                                                            echo "selected";
                                                                                        } ?>>
                                           <?php echo $customer->c_id . ' ' . $customer->name_customer ?>
                                       </option>
                                   <?php } ?>
                               </select>
                               <div class="invalid-feedback">
                                   Choose a customer identity!
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="control-label ">Employee</label>
                               <select class="form-control" name="employee_id" required>
                                   <option value="">--Please Select--</option>
                                   <?php
                                    foreach ($data_employee as $employee) {
                                        if ($employee->active == 1) {
                                    ?>
                                           <option value="<?php echo $employee->employee_id ?>" <?php if ($employee->employee_id === $transaction->employee_id) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                               <?php echo $employee->employee_id . ' ' . $employee->name_employee ?>
                                           </option>
                                   <?php }
                                    } ?>
                               </select>
                               <div class="invalid-feedback">
                                   Choose employee identity!
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="control-label ">Weight (kg)</label>
                               <input type="number" class="form-control" placeholder='Laundry Weight' name="weight" value="<?php echo $transaction->weight ?>" required>
                               <div class="invalid-feedback">
                                   Fillup Laundry Weight!
                               </div>
                           </div>

                           <label class="control-label ">Add Ons</label>
                           <select class="form-control" name="itemandslot_id">
                               <option value="">--Please Select--</option>
                               <?php
                                foreach ($data_items as $items) {
                                ?>
                                   <option value="<?php echo $items->itemandslot_id ?>" <?php if ($items->itemandslot_id) {
                                                                                            echo "selected";
                                                                                        } ?>>
                                       <?php echo $items->itemandslot_id . ' ' . $items->item_avail ?>
                                   </option>
                               <?php } ?>
                           </select>

                           <div class="form-group">
                               <label class="control-label ">Date</label>
                               <input type="date" class="form-control" name="date" value="<?php echo $transaction->date ?>">

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