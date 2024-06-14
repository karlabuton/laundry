<!-- Modal for editing existing data -->
<?php
foreach ($data_customer as $customer) {
?>
    <div class="modal fade" id="editcustomer<?php echo $customer->c_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditcustomer" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditcustomerLabel">Change Customer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>CustomerController/editCustomer/<?php echo $customer->c_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                    <div class="modal-body">


                        <div class="form-group">
                            <label class="control-label ">Customer's Name</label>
                            <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name' name="name_customer" value="<?php echo $customer->name_customer ?>" required>
                            <div class="invalid-feedback">
                                Fill in the customer's name with letters! (max. 50 letters)
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="control-label ">Gender</label>
                            <select class="form-control" name="gender_c" required>
                                <option value="">--Please Select--</option>
                                <option value="Male" <?php if ($customer->gender_c === 'Male') {
                                                            echo "selected";
                                                        } ?>>Male</option>
                                <option value="Female" <?php if ($customer->gender_c === 'Female') {
                                                            echo "selected";
                                                        } ?>>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Choose the gender of the customer!
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label class="control-label ">Address</label>
                            <input type="text" class="form-control" placeholder='Address' name="address" value="<?php echo $customer->address ?>" required>
                            <div class="invalid-feedback">
                                Enter the customer's address!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Mobile No.</label>
                            <input type="tel" class="form-control" placeholder='Mobile No.' name="phone" value="<?php echo $customer->phone ?>" required>
                            <div class="invalid-feedback">
                                Fill in No. Customer phone!
                            </div>
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