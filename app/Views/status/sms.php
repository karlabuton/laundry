<!-- Modal for editing existing data -->
<?= $this->extend("layout/adminbase"); ?>

<?= $this->section("content") ?>

<div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold  mx-3 mt-3" id="formEdittransactionLabel">Send SMS Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="post" class="user needs-validation mx-3 mb-4" novalidate>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label ">Customer</label>
                    <select class="form-control" name="c_id">
                        <option value="">--Please Select--</option>
                        <?php foreach ($data_customer as $customer) : ?>
                            <option value="<?php echo $customer->c_id ?>" <?php if ($customer->c_id === $data_transaction[0]->c_id) echo "selected"; ?>>
                                <?php echo $customer->c_id . ' ' . $customer->name_customer ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="form-group">
                    <label class="control-label ">Phone Number</label>
                    <input type="text" class="form-control" placeholder='Phone Number' name="phone" value=" <?php if ($customer->c_id === $data_transaction[0]->c_id) echo $customer->phone ?>">
                </div>
                <div class="form-group">
                    <label class="control-label ">Message</label>
                    <textarea class="form-control" rows="3" placeholder='Message' name="message"></textarea>
                </div>
            </div>
            <div class="modal-footer d-flex">
                <a class="flex-fill btn btn-danger rounded-0" href="<?php echo base_url() ?>StatusController/status">Cancel</a>

                <button ttype="submit" value="Send SMS" class="flex-fill btn btn-primary rounded-0">Send</button>
            </div>
        </form>
    </div>
</div>
<?php
require BASEPATH . '/public/sms/vendor/autoload.php'; // Update this with the correct path

use Twilio\Rest\Client;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sid    = "ACb73136fe39079a9b23d41754908baed1"; // Your Twilio Account SID
    $token  = "989198af54e22e820d9f97f53f3a3e51"; // Your Twilio Auth Token
    $from   = "+14132764772"; // Your Twilio phone number
    $to     = $_POST["phone"];
    $body   = $_POST["message"];

    $twilio = new Client($sid, $token);

    try {
        $message = $twilio->messages->create($to, [
            "from" => $from,
            "body" => $body
        ]);
        echo "<p>Message sent! SID: {$message->sid}</p>";
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>
<?= $this->endSection() ?>