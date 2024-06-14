<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/empbase"); ?>

<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold mb-0 ">Customer Data Report</h4>
        </div>
        <div class="card-body">
            <form name="form_filter_customer" action="<?php echo base_url() . 'ReportController/report_filter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label ">Gender</label>
                            <select class="form-control" name="gender_c" pattern="[A-Za-z]{1,10}">
                                <option value="All" <?php if (set_value('gender_c') == 'All') {
                                                        echo 'selected';
                                                    } ?>>All</option>
                                <option value="Male" <?php if (set_value('gender_c') == 'Male') {
                                                            echo 'selected';
                                                        } ?>>Male</option>
                                <option value="Female" <?php if (set_value('gender_c') == 'Female') {
                                                            echo 'selected';
                                                        } ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a target="blank" href="<?php echo base_url() . 'ReportController/print_Ctrans/' . set_value('gender_c')
                                                    ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                        </div>
                    </div>
                </div>
            </form>


            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Customer's name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Weight</th>
                            <th>Add Ons</th>
                            <th>Total</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($data_customer as $transaction) {
                        ?>
                            <tr>

                                <td>
                                    <span class="row px-3  text-xs"><?php echo $transaction->c_id ?></span>
                                    <span class="row px-3"><?php echo $transaction->name_customer ?></span>
                                </td>
                                <td>
                                    <span class="row px-3  text-xs"><?php echo $transaction->employee_id ?></span>
                                    <span class="row px-3"><?php echo $transaction->name_employee ?></span>
                                </td>
                                <td><?php echo $transaction->phone ?></td>
                                <td><?php echo $transaction->weight ?> KG</td>
                                <td><?php echo $transaction->item_avail ?></td>
                                <td><?php echo $transaction->total ?></td>
                                <td><?php echo $transaction->date ?></td>
                            </tr>
                        <?php }
                        ?>
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