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
            <h4 class="my-auto font-weight-bold mb-0 ">Transaction Data</h4>
            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addtransaction"><i class="fas fa-plus fa-sm text-white-500"></i> Add New Transaction</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">


                            <th>Date</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Add Ons</th>
                            <th>Total</th>

                            <th class="actions">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_transaction as $transaction) {
                        ?>
                            <tr>



                                <td>

                                    <?php echo $transaction->date ?>
                                </td>
                                <td><?php echo $transaction->name_customer ?></td>
                                <td><?php echo $transaction->phone ?></td>
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
                                <td class="action-icons text-center">

                                    <a href="" data-toggle="modal" data-target="#modalAccept<?= $transaction->req_id ?>">
                                        <i title="Accept" class="fa fa-check"></i>
                                    </a>

                                    <a href="<?php echo base_url() . 'TransactionController/deletetrans/' . $transaction->req_id ?>">
                                        <i title="Delete" class="fas fa-trash text-lg text-danger"></i>
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
<?= $this->include("transactions/modalAccept") ?>
<?= $this->include("transactions/addtrans") ?>


<?= $this->endSection() ?>