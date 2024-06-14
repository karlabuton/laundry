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
            <h4 class="my-auto font-weight-bold mb-0 ">Customer Data Report</h4>
        </div>
        <div class="card-body">
            <form name="form_filter_customer" action="<?php echo base_url() . 'ReportController/filterStatName' ?>" method="post" class="w-100 user needs-validation" novalidate>
                <div class="row align-items-end">
                    <!-- New input fields for status and customer name -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control" name="req_status">
                                <option value="">Select Status</option>
                                <option value="completed">Completed</option>
                                <option value="released">Released</option>
                                <!-- Add other status options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Customer Name</label>
                            <select class="form-control" name="c_id">
                                <option value="">--Please Select--</option>
                                <?php
                                foreach ($data_custfilter as $customer) {
                                ?>
                                    <option value="<?php echo $customer->c_id ?>">
                                        <?php echo  $customer->name_customer ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- Dri dapita ang sa search sa status g customer -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a target="blank" href="<?php echo base_url() . 'ReportController/print_custtransaction/' . set_value('req_status') . '/' . set_value('c_id') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                        </div>
                    </div>
                </div>

            </form>
            <form name="form_filter_customer" action="<?php echo base_url() . 'ReportController/report_customerfilter' ?>" method="post" class="w-100 user needs-validation" novalidate>
                <h5>Select date in range</h5>
                <div class="row align-items-end">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label ">From</label>
                            <input type="date" class="form-control" name="startDate" value="<?php echo set_value('startDate') ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label ">To</label>
                            <input type="date" class="form-control" name="endDate" value="<?php echo set_value('endDate') ?>">
                        </div>
                    </div>
                    <!-- dri dapita ang by date na filter -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a target="blank" href="<?php echo base_url() . 'ReportController/print_Ctrans/' . set_value('startDate') . '/' . set_value('endDate') ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
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
                            <th>Status</th>
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
                                <td><?php echo $transaction->address ?></td>
                                <td><?php echo $transaction->phone ?></td>
                                <td><?php echo $transaction->weight ?> KG</td>
                                <td><?php echo $transaction->item_avail ?></td>
                                <td> <?php
                                        $total = (float)$transaction->total;

                                        // Check if there are any add-ons
                                        if (!empty($transaction->item_price)) {
                                            // If add-ons exist, calculate and display the total including add-ons
                                            echo $total + (float)$transaction->item_price;
                                        } else {
                                            // If no add-ons, display the base total
                                            echo $total;
                                        }
                                        ?>
                                </td>
                                <td><?php echo $transaction->req_status ?></td>
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