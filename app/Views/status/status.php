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
            <h4 class="my-auto font-weight-bold mb-0 ">Status Data</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Date</th>
                            <th>Customer Name</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_customer as $transaction) {
                        ?>
                            <tr>
                                <td><?php echo $transaction->date ?></td>
                                <td> <?php echo $transaction->name_customer ?>
                                </td>

                                <td><?php echo $transaction->req_status ?></td>

                                <td class="action-icons text-center">
                                    <a href="" data-toggle="modal" data-target="#modalEdit<?= $transaction->req_id ?>">
                                        <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                    </a>
                                    <a href="<?php echo base_url() . 'StatusController/Sendsms/' . $transaction->req_id ?>">
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
<?= $this->include("status/modalEdit") ?>



<?= $this->endSection() ?>