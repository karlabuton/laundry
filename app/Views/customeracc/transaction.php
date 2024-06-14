<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/custbase"); ?>

<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold mb-0 ">Transaction</h4>
        </div>
        <div class="card-body">
            <form name="form_filter_employee" action="<?php echo base_url() . 'RequestController/filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                <h5>Active on time range</h5>
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label ">From</label>
                            <input type="date" class="form-control" name="date_in" value="<?php echo set_value('date_in') ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label ">To</label>
                            <input type="date" class="form-control" name="date_at" value="<?php echo set_value('date_at') ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a target="blank" href="<?php echo base_url() . 'RequestController/print_Ctrans/' . set_value('date_in') . '/' . set_value('date_at') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
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

                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Weight</th>
                            <th>Add ONs</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($data_emp as $employee) {
                        ?>
                            <tr>

                                <td><?php echo $employee->name_customer . ' ' ?><sup>(<?php echo substr($employee->gender_c, 0, 1) ?>)</sup></td>
                                <td><?php echo $employee->address ?></td>
                                <td><?php echo $employee->phone ?></td>
                                <td>Php<?php echo $employee->weight ?></td>
                                <td><?php echo $employee->item_avail ?></td>
                                <td><?php echo $employee->total ?></td>
                                <td><?php echo $employee->req_status ?></td>
                                <td><?php echo $employee->date ?></td>
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