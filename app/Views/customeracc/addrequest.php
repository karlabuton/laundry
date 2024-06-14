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
<!-- Modal for adding new data -->
<div class="modal fade" id="addrequest" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formAddcustomer" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold mx-3 mt-3" id="formAddcustomerLabel">Add Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="form_filter_customer" action="<?php echo base_url() . 'ReportController/filterStatName' ?>" method="post" class="w-100 user needs-validation" novalidate>
                <div class="row align-items-end">
                    <!-- New input fields for status and customer name -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control" name="req_status">
                                <option value="">Select Status</option>
                                <option value="completed">Completed</option>
                                <option value="released">Released</option>
                                <!-- Add other status options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Customer Name</label>
                            <select class="form-control" name="c_id">
                                <option value="">--Please Select--</option>
                                <?php
                                foreach ($data_customer as $customer) {
                                ?>
                                    <option value="<?php echo $customer->c_id ?>">
                                        <?php echo  $customer->name_customer ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- Dri dapita ang sa search sa status g customer -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="flex-fill btn btn-primary rounded-0 btn-block px-4"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <?php
                            $req_status = isset($req_status) ? $req_status : ''; // Make sure $req_status is defined
                            $c_id = isset($c_id) ? $c_id : ''; // Make sure $c_id is defined
                            ?>
                            <a target="blank" href="<?php echo base_url() . 'ReportController/print_Ctrans/' . $req_status . '/' . $c_id ?>" class="btn btn-success btn-block rounded-0 shadow-sm"><i class="fas fa-print fa-sm text-white-500"></i> Print</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
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

<?= $this->endSection() ?>