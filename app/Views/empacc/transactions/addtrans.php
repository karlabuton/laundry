   <!-- Modal for adding new data -->
   <div class="modal fade" id="addtransaction" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddtransaction" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddtransactionLabel">Input Transaction Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_transaction" action="<?php echo base_url().'transaction/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">Customer</label>
                                    <select class="form-control" name="customer_id" required>
                                        <option value="">--Please Select--</option>
                                        <?php
                                            foreach ($data_customer as $customer) {
                                        ?>
                                        <option value="<?php echo $customer->customer_id ?>">
                                            <?php echo $customer->customer_id.' '.$customer->name_customer ?>
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
                                        <option value="<?php echo $employee->employee_id ?>">
                                            <?php echo $employee->employee_id.' '.$employee->name_employee ?>
                                        </option>
                                        <?php }} ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Choose employee identity!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Weight (kg)</label>
                                    <input type="number"  class="form-control" placeholder='Laundry Weight' name="weight"  required>
                                    <div class="invalid-feedback">
                                        Fillup Laundry Weight!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Order Date</label>
                                    <input type="date"  class="form-control" placeholder='Laundry Order Date' name="date_order" required>
                                    <div class="invalid-feedback">
                                        Fill in the date of the laundry order!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Finished Date</label>
                                    <input type="date"  class="form-control" placeholder='Finished Date' name="date_finish">
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
