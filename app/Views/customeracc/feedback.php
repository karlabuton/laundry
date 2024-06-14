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
            <h5 class="modal-title font-weight-bold mx-3 mt-3" id="feedbackFormLabel">Feedback</h5>
        </div>
        <form action="<?= base_url('FeedbackController/addfeedback') ?>" method="POST">

            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="customer_name" class="control-label">Name</label>
                        <input type="text" id="customer_name" value="<?= $data_cust['0']->name_customer ?>" class="form-control" readonly>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="control-label">Description of your Feedback:</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Please describe your feedback here" rows="5" required></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer d-flex">
                <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                <button type="submit" class="flex-fill btn btn-primary rounded-0">Submit</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>