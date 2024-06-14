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
            <h4 class="my-auto font-weight-bold mb-0 ">Status Data</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Employee</th>
                            <th>Customer's Name<sup>(M/F)</sup></th>
                            <th>Contact</th>
                            <th>Weight</th>
                            <th>Add Ons</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_customer as $transaction) {
                        ?>
                            <tr>
                                <td>
                                    <span class="row px-3  text-xs"><?php echo $transaction->req_id ?></span>
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
                                <td class="action-icons text-center">
                                    <a href="<?php echo base_url() . 'StatusController/editStatusview/' . $transaction->req_id ?>">
                                        <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                    </a>
                                    <a href="<?php echo base_url() . 'StatusController/editStatusview/' . $transaction->req_id ?>">
                                        <i title="Send Sms" class="fas fa-paper-plane text-lg text-info"></i>
                                    </a>
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




<?= $this->endSection() ?>