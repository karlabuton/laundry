   <!-- Modal for adding new data -->
   <?php foreach ($data_customer as $transaction) { ?>
       <div class="modal fade" id="modalEdit<?= $transaction->req_id ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddtransaction" aria-hidden="true">
           <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddtransactionLabel"></h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <form action="<?= base_url() . 'StatusController/editstatus/' . $transaction->req_id ?>" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                       <div class="modal-body">


                           <div class="form-group">
                               <label class="control-label ">Status</label>
                               <select class="form-control" name="req_status" required>
                                   <option value="">--Please Select--</option>
                                   <option value="progress">Progress</option>
                                   <option value="completed">Completed</option>
                                   <option value="released">Released</option>

                               </select>

                           </div>
                           <div class="modal-footer d-flex">
                               <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                               <button type="submit" class="flex-fill btn btn-primary rounded-0">Update</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   <?php } ?>