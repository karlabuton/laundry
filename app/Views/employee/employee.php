<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/adminbase"); ?>

<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Prompt Message -->
    <?php if ($page_session->getTempdata('success')) : ?>
        <div id="hidemessage" class="alert alert-success" role="alert">
            <?= $page_session->getTempdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($page_session->getTempdata('error')) : ?>
        <div id="hidemessage" class="alert alert-danger" role="alert">
            <?= $page_session->getTempdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold mb-0 ">Employee Data</h4>
            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addemployee"><i class="fas fa-plus fa-sm text-white-500"></i> Add Employees</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>ID</th>
                            <th>Employee <sup>(M/F)</sup></th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Salary</th>
                            <th>Join Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_employee as $employee) {
                        ?>
                            <tr>

                                <td><?php echo $employee->employee_id ?></td>
                                <td><?php echo $employee->name_employee . ' ' ?><sup>(<?php echo substr($employee->gender, 0, 1) ?>)</sup><br>
                                    <?php if ($employee->active == 1) { ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php } else if ($employee->active == 2) { ?>
                                        <span class="badge badge-info">Business Owner</span>
                                    <?php } ?>
                                </td>
                                <td><?php echo $employee->address ?></td>
                                <td><?php echo $employee->number ?></td>
                                <td><?php if ($employee->employee_id == 'K000') {
                                        echo '----';
                                    } else {
                                        echo '$' . $employee->salary;
                                    } ?></td>
                                <td><?php echo $employee->date_join ?></td>
                                <td><?php if ($employee->date_stop == '0000-00-00') {
                                        echo '----';
                                    } else {
                                        echo $employee->date_stop;
                                    } ?></td>
                                <td class="action-icons text-center">
                                    <a href="#" data-toggle="modal" data-target="#editemployee<?php echo $employee->employee_id ?>">
                                        <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                    </a>
                                    <?php if ($employee->employee_id != 'K000') { ?>
                                        <a href="<?php echo base_url() . 'EmployeeController/delete/' . $employee->employee_id ?>">
                                            <i title="Delete" class="fas fa-trash text-lg text-danger"></i>
                                        </a>
                                    <?php } ?>
                                    <?php if ($employee->employee_id != 'K000') { ?>
                                        <a href="#" data-toggle="modal" data-target="#addacc<?php echo $employee->employee_id ?>">
                                            <i title="Delete" class="fas fa-user-plus fa-lg text-black"></i>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?= $this->include("employee/addemp") ?>
<?= $this->include("employee/editemp") ?>
<?= $this->include("employee/accadd") ?>



<?= $this->endSection() ?>