<!-- Modal for editing existing data -->
<?php
foreach ($data_employee as $employee) {
?>
    <div class="modal fade" id="editemployee<?php echo $employee->employee_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditemployee" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditemployeeLabel">Change Employee data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>EmployeeController/editEmployee/<?php echo $employee->employee_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label ">ID</label>
                            <input type="text" class="form-control" placeholder="Emp ID" autofocus name="employee_id" value="<?php echo $employee->employee_id ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Employee Name</label>
                            <input type="text" class="form-control" title="Fill in the Employee Name with Letters" placeholder='Employee Name' name="name_employee" value="<?php echo $employee->name_employee ?>" required>
                            <div class="invalid-feedback">
                                Fill in the name of the employee with letters! (max. 50 letters)
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="">--Please Select--</option>
                                <option value="Male" <?php if ($employee->gender === 'Male') {
                                                            echo "selected";
                                                        } ?>>Male</option>
                                <option value="Female" <?php if ($employee->gender === 'Female') {
                                                            echo "selected";
                                                        } ?>>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Choose the gender of the employee!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Address</label>
                            <input type="text" class="form-control" placeholder='Employee Address' name="address" value="<?php echo $employee->address ?>" required>
                            <div class="invalid-feedback">
                                Fill in the employee's address!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Mobile Number</label>
                            <input type="tel" class="form-control" placeholder='Employees Mobile Number' name="number" value="<?php echo $employee->number ?>" required>
                            <div class="invalid-feedback">
                                Fill in No. Employee cell phone!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Salary per month</label>
                            <input type="number" class="form-control" placeholder='Employee Salary per month' name="salary" value="<?php echo $employee->salary ?>" required>
                            <div class="invalid-feedback">
                                Fill in the employee's monthly salary!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Join Date</label>
                            <input type="date" class="form-control" placeholder='Join Date Employees' name="date_join" value="<?php echo $employee->date_join ?>" required>
                            <div class="invalid-feedback">
                                Fill in the date of joining the employee!
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label ">Stop Date</label>
                            <input type="date" class="form-control" placeholder='Employee Stop Date' name="date_stop" value="<?php echo $employee->date_stop ?>">
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