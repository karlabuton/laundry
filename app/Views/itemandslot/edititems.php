<!-- Modal for editing existing data -->
<?php
foreach ($data_items as $items) {
?>
    <div class="modal fade" id="editItems<?php echo $items->itemandslot_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEditItems" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEditItemsLabel">Change Item data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>ItemandslotController/edititems/<?php echo $items->itemandslot_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                    <div class="modal-body">


                        <div class="form-group">
                            <label class="control-label ">Item Name</label>
                            <input type="text" class="form-control" title="Fill in the Item Name with Letters" placeholder='Items Name' name="item_avail" value="<?php echo $items->item_avail ?>" required>

                        </div>

                        <div class="form-group">
                            <label class="control-label ">Item Price</label>
                            <input type="number" class="form-control" placeholder='Items Price' name="item_price" value="<?php echo $items->item_price ?>" required>

                        </div>
                        <div class="modal-footer d-flex">
                            <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>