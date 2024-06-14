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
        <form name="form_filter_customer" action="<?php echo base_url() . 'RequestController/pay' ?>" method="post">
            <div class="row col-md-12">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Name</label>
                        <input type="text" class="form-control" value="<?= $data_cust['0']->name_customer ?>">
                        <input type="text" class="form-control" name="c_id" value="<?= $data_cust['0']->c_id ?>" hidden>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Laundry Type</label>
                        <input type="text" class="form-control" name="purpose" value="<?= $data_cust['0']->purpose ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Weight</label>
                        <input type="number" class="form-control" name="weight" value="<?= $data_cust['0']->weight ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Add ons Price</label>
                        <input type="number" class="form-control" name="itemandslot_id" value="<?= $data_cust['0']->item_price ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label ">Total Price</label>
                        <input type="number" class="form-control" value="<?= $data_cust['0']->total + $data_cust['0']->item_price ?>" name="total" id="totalInput" readonly>
                    </div>
                </div>



                <div class="modal-footer d-flex">
                    <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="flex-fill btn btn-primary rounded-0">Submit</button>
                </div>

        </form>
    </div>
</div>
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