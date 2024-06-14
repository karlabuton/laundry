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
            <h4 class="my-auto font-weight-bold mb-0 ">ADD ONs </h4>

        </div>
        <div class="card-body">
            <h4 class="my-auto font-weight-bold mb-0 ">Available Slot</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">
                            <th>Image</th>
                            <th>Available Item</th>
                            <th>Price</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data_customer as $customer) {
                        ?>
                            <tr>
                                <td style="width:70px;">
                                    <?php if (!empty($customer->txt_image)) : ?>
                                        <?php $imagePath = base_url('public/uploads/' . $customer->txt_image); ?>

                                        <img src="<?= $imagePath ?>" style="width:60px;height:60px;" />
                                    <?php else : ?>
                                        <!-- Placeholder if no image is available -->
                                        No Image Available
                                    <?php endif; ?>

                                </td>
                                <td><?php echo $customer->item_avail ?></td>
                                <td><?php echo $customer->item_price ?></td>

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