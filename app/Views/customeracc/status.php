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
            <h4 class="my-auto font-weight-bold mb-0 ">Status Data</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Customer's Name<sup>(M/F)</sup></th>
                            <th>Contact</th>
                            <th>Weight</th>
                            <th>ADD Ons</th>
                            <th>Priority No.</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_customer as $customer) {
                        ?>
                            <tr>

                                <td><?php echo $customer->name_customer . ' ' ?><sup>(<?php echo substr($customer->gender_c, 0, 1) ?>)</sup></td>
                                <td><?php echo $customer->phone ?></td>
                                <td><?php echo $customer->weight ?></td>
                                <td><?php echo $customer->item_avail ?></td>
                                <td><?php echo $customer->prio_num ?></td>
                                <td><?php echo $customer->req_status ?></td>
                                <td><?php echo $customer->date ?></td>

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


<? //= $this->include("resident/view_modal") 
?>

<?= $this->endSection() ?>