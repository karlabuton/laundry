 <!-- Modal for adding new data -->
 <div class="modal fade" id="addrequest" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddcustomer" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddcustomerLabel">Customer Data Input</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?php echo base_url() . 'RequestController/addrequest' ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                 <div class="modal-body">

                     <div class="form-group">
                         <label class="control-label ">Customer Name</label>
                         <select class="form-control" name="c_id" required>
                             <option value="">--Please Select--</option>
                             <?php foreach ($data_customer as $customer) { ?>
                                 <option value="<?= $customer->c_id ?>"><?= $customer->name_customer ?></option>
                             <?php } ?>
                         </select>
                     </div>



                     <div class="form-group">
                         <label class="control-label ">Weight</label>
                         <input type="text" class="form-control" placeholder='weight' name="weight" required>

                     </div>

                     <div class="form-group">
                         <label class="control-label ">Add ONs</label>
                         <select class="form-control" name="itemandslot_id" required>
                             <option value="">--Please Select--</option>
                             <?php foreach ($data_item as $items) { ?>
                                 <option value="<?= $items->itemandslot_id ?>"><?= $items->item_avail ?></option>
                             <?php } ?>
                         </select>
                     </div>

                 </div>
                 <div class="modal-footer d-flex">
                     <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                     <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                 </div>
             </form>
         </div>
     </div>
 </div>