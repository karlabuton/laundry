   <!-- Modal for adding new data -->
   <div class="modal fade" id="addtransaction" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddtransaction" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formAddtransactionLabel">Input Transaction Data</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="<?= base_url() ?>TransactionController/addtransaction" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                   <div class="modal-body">

                       <div class="form-group">
                           <label class="control-label ">Date</label>
                           <input type="date" class="form-control" placeholder='Laundry Order Date' name="date" required>
                           <div class="invalid-feedback">
                               Fill in the date of the laundry order!
                           </div>
                       </div>

                       <div class="form-group">
                           <label class="control-label ">Customer</label>
                           <select class="form-control" name="c_id" required>
                               <option value="">--Please Select--</option>
                               <?php
                                foreach ($data_customer as $customer) {
                                ?>
                                   <option value="<?php echo $customer->c_id ?>">
                                       <?php echo $customer->c_id . ' ' . $customer->name_customer ?>
                                   </option>
                               <?php } ?>
                           </select>
                           <div class="invalid-feedback">
                               Choose a customer identity!
                           </div>
                       </div>

                       <div class="form-group">
                           <label class="control-label">Laundry Type</label>
                           <select class="form-control" name="laundry_type" id="laundryType">
                               <option value="">--Please Select--</option>
                               <option value="mixed">Mixed</option>
                               <option value="white">White</option>
                               <option value="bedsheet">Bedsheet</option>
                           </select>
                       </div>

                       <div class="form-group">
                           <label class="control-label">Add-ons</label>
                           <select class="form-control" name="itemandslot_id" onchange="showItemPicture(this)">
                               <option value="">--Please Select--</option>
                               <?php foreach ($data_items as $items) { ?>
                                   <option value="<?= $items->itemandslot_id ?>" data-picture="<?= $items->txt_image ?>"><?= $items->item_avail ?> - <b>Php<?= $items->item_price ?>.00</b></option>
                               <?php } ?>
                           </select>

                       </div>

                       <div class="form-group">
                           <label class="control-label">Add-on Picture</label>
                           <img src="" id="addon-picture" class="img-fluid" width="100px" class="form-control">
                           <div class="quantity">
                               <input type="button" value="-" class="minus" class="">
                               <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="qty">
                               <input type="button" value="+" class="plus">
                           </div>
                       </div>

                       <div class="form-group">
                           <label class="control-label">Weight (kg)</label>
                           <input type="number" class="form-control" placeholder="Laundry Weight" name="weight" id="weightInput" required>
                           <div class="invalid-feedback">
                               Fill up Laundry Weight!
                           </div>
                       </div>

                       <div class="form-group">
                           <label class="control-label">Total Weight Price</label>
                           <input type="number" class="form-control" placeholder="Enter Price" name="total" id="totalInput" readonly>
                       </div>


                       <div class="modal-footer d-flex">
                           <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                           <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
       <script>
           function showItemPicture(select) {
               var selectedOption = select.options[select.selectedIndex];
               var picturePath = selectedOption.getAttribute('data-picture');
               var pictureUrl = "<?php echo base_url('public/uploads/'); ?>" + picturePath;
               var addonPicture = document.getElementById('addon-picture');
               addonPicture.src = pictureUrl;
           }
       </script>

       <script>
           document.addEventListener('DOMContentLoaded', function() {
               const minusBtn = document.querySelector('.minus');
               const plusBtn = document.querySelector('.plus');
               const quantityInput = document.querySelector('.qty');

               minusBtn.addEventListener('click', function() {
                   let currentValue = parseInt(quantityInput.value);
                   if (currentValue > 1) {
                       quantityInput.value = currentValue - 1;
                   }
               });

               plusBtn.addEventListener('click', function() {
                   let currentValue = parseInt(quantityInput.value);
                   quantityInput.value = currentValue + 1;
               });
           });
       </script>

       <script>
           document.getElementById('weightInput').addEventListener('input', calculateTotal);
           document.getElementById('laundryType').addEventListener('change', calculateTotal);

           function calculateTotal() {
               var weight = parseFloat(document.getElementById('weightInput').value);
               var laundryType = document.getElementById('laundryType').value;
               var pricePerLoad = 0;

               switch (laundryType) {
                   case 'mixed':
                       pricePerLoad = 180;
                       break;
                   case 'white':
                       pricePerLoad = 190;
                       break;
                   case 'bedsheet':
                       pricePerLoad = 200;
                       break;
                   default:
                       break;
               }

               var total = (weight / 8) * pricePerLoad;
               document.getElementById('totalInput').value = total.toFixed(2);
           }
       </script>