 <!-- Modal for adding new data -->
 <div class="modal fade" id="additems" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddemployee" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddemployeeLabel">Input Items data</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <!-- <form action="<? //= base_url() 
                                ?>EmployeeController/addemployee" method="post">
                   <div class="form-group">
                   <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                   </div>
                   <div class="modal-footer d-flex">
                                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                <button type="submit" value="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                            </div>

                    </form> -->

             <form action="<?= base_url() ?>ItemandslotController/additems" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                 <div class="modal-body">
                     <!-- <div class="form-group">
                         <label class="control-label ">ID</label>
                         <input type="text" class="form-control" placeholder="ID Employee" autofocus name="employee_id" required>
                     </div> -->

                     <div class="form-group">
                         <label class="control-label ">Item Name</label>
                         <input type="text" class="form-control" title="Fill in the Item Name with Letters" placeholder='Items Name' name="item_avail" required>

                     </div>

                     <div class="form-group">
                         <label class="control-label ">Item Price</label>
                         <input type="number" class="form-control" placeholder='Items Price' name="item_price" required>

                     </div>
                     <div class="modal-footer d-flex">
                         <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                         <button type="submit" value="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                     </div>
             </form>
         </div>
     </div>
 </div>