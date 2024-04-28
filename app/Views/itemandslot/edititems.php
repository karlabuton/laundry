<!-- Modal for editing existing data -->
<?= $this->extend("layout/adminbase"); ?>

<?= $this->section("content") ?>

<div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditcustomerLabel">Change Item data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url() ?>ItemandslotController/Edit/<?= $data_items[0]->itemandslot_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label">Item Name</label>
                    <input type="text" class="form-control" title="Fill in the Item Name with Letters" placeholder='Items Name' name="item_avail" value="<?php echo $data_items[0]->item_avail ?>" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Item Price</label>
                    <input type="number" class="form-control" placeholder='Items Price' name="item_price" value="<?php echo $data_items[0]->item_price ?>" required>
                </div>
            </div>
            <div class="modal-footer d-flex">
                <button type="button" class="flex-fill btn btn-danger rounded-0">Cancel</button>
                <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>