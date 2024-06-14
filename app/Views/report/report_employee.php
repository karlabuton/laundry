<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/adminbase"); ?>

<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold mb-0 ">Employee Data Report</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>ReportController/report_filter" method="post">
                <h5>Select date in range</h5>
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">From</label>
                            <input type="date" class="form-control" name="start_date" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">To</label>
                            <input type="date" class="form-control" name="end_date" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block rounded-0 shadow-sm">
                                <i class="fas fa-print fa-sm text-white-500"></i> Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="d-flex m-3">

            </div>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Employee Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Salary/month</th>
                            <th>Join</th>
                            <th>End</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($data_report as $employee) {
                        ?>
                            <tr>

                                <td><?php echo $employee->name_employee . ' ' ?><sup>(<?php echo substr($employee->gender, 0, 1) ?>)</sup></td>
                                <td><?php echo $employee->address ?></td>
                                <td><?php echo $employee->number ?></td>
                                <td>Php <?php echo $employee->salary ?></td>
                                <td><?php echo $employee->date_join ?></td>
                                <td><?php if ($employee->date_stop == '0000-00-00') {
                                        echo '-';
                                    } else {
                                        echo $employee->date_stop;
                                    } ?></td>
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



<?= $this->endSection() ?>