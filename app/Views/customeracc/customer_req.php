<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/custbase"); ?>

<?= $this->section("content") ?>
<script>
    setTimeout(function() {
        $("#hidemessage").hide();
    }, 5000);
</script>

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
<div class="container">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold mx-3 mt-3" id="formAddcustomerLabel">Payment</h5>
        </div>
        <form name="form_filter_customer" action="<?php echo base_url() . 'RequestController/addrequest' ?>" method="post">
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Laundry Type</label>
                        <select class="form-control" name="laundry_type" id="laundryType">
                            <option value="">--Please Select--</option>
                            <option value="mixed">Mixed</option>
                            <option value="white">White</option>
                            <option value="bedsheet">Bedsheet</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Weight (kg)</label>
                        <input type="number" class="form-control" placeholder="Laundry Weight" name="weight" id="weightInput" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Add-ons</label>
                        <select class="form-control" name="itemandslot_id" onchange="showItemPicture(this)">
                            <option value="">--Please Select--</option>
                            <?php foreach ($data_items as $items) { ?>
                                <option value="<?= $items->itemandslot_id ?>" data-picture="<?= $items->txt_image ?>"><?= $items->item_avail ?> - <b>Php<?= $items->item_price ?>.00</b></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Total Weight Price</label>
                        <input type="number" class="form-control" placeholder="Enter Price" name="total" id="totalInput" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="control-label">Add-on Picture</label>
                    <img src="" id="addon-picture" class="img-fluid" width="100px" class="form-control">
                    <div class="quantity">
                        <input type="button" value="-" class="minus" class="">
                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="qty">
                        <input type="button" value="+" class="plus">
                    </div>
                </div>

            </div>
            <div class="modal-footer d-flex">
                <a href="<?php echo base_url() . 'RequestController/customer_req' ?>"> <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button></a>
                <a href="#"> <button type="submit" class="flex-fill btn btn-primary rounded-0">Proceed</button></a>
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

<?= $this->endSection() ?>