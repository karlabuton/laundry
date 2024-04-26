 <!-- Modal for adding new data -->
 <div class="modal fade" id="addcustomer" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddcustomer" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddcustomerLabel">Customer Data Input</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form name="form_add_mahasiswa" action="<?php echo base_url().'customer/add' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                            <div class="modal-body"> 
                                <div class="form-group">
                                    <label class="control-label ">ID</label>
                                    <input type="text" class="form-control" placeholder="Customer ID" autofocus name="customer_id" required readonly value="<?php echo $kode ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">Customer's Name</label>
                                    <input type="text" class="form-control" title="Fill in the customer's name with letters" placeholder='Customers Name'  name="name_customer" pattern="[A-Za-z ]{1,50}" required>
                                    <div class="invalid-feedback">
                                    Fill in the customer's name with letters! (max. 50 letters)
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Gender</label>
                                    <select class="form-control" name="gender_c" pattern="[A-Za-z]{1,10}" required>
                                        <option value="">--Please Select--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Choose the gender of the customer!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Address</label>
                                    <input type="text"  class="form-control" placeholder='Address' name="address"  required>
                                    <div class="invalid-feedback">
                                    Enter the customer's address!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label ">Mobile No.</label>
                                    <input type="tel"  class="form-control" placeholder='Customer Mobile Number' name="phone"  pattern="[0-9]{11,15}" required>
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