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
                <h4 class="my-auto font-weight-bold mb-0 ">Items and Slot Data</h4>
                <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#additems"><i class="fas fa-plus fa-sm text-white-500"></i> Add </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="">

                                <th>ID</th>
                                <th>Image</th>
                                <th>Items Available</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Inside the table body where you display item information -->
                            <?php foreach ($data_items as $items) : ?>
                                <tr>
                                    <td><?= $items->itemandslot_id ?></td>
                                    <td style="width:70px;">
                                        <?php if (!empty($items->txt_image)) : ?>
                                            <?php $imagePath = base_url('public/uploads/' . $items->txt_image); ?>

                                            <img src="<?= $imagePath ?>" style="width:60px;height:60px;" />
                                        <?php else : ?>
                                            <!-- Placeholder if no image is available -->
                                            No Image Available
                                        <?php endif; ?>

                                    </td>
                                    <td><?= $items->item_avail ?></td>
                                    <td><?= $items->item_price ?></td>
                                    <td class="action-icons text-center">
                                        <a href="<?= base_url() . 'ItemandslotController/Edit/' . $items->itemandslot_id ?>">
                                            <i title="Edit" class="fas fa-edit text-lg text-info"></i>
                                        </a>
                                        <a href="<?= base_url() . 'ItemandslotController/deleteitems/' . $items->itemandslot_id ?>">
                                            <i title="Delete" class="fas fa-trash text-lg text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>


        </div>
        <!-- /.container-fluid -->


    </div>
    <!-- End of Main Content -->
    <?= $this->include("itemandslot/additems") ?>





    <?= $this->endSection() ?>