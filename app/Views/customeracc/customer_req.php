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


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="my-auto font-weight-bold mb-0 ">Request Data</h4>
            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addrequest"><i class="fas fa-plus fa-sm text-white-500"></i> Add Request</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="">

                            <th>Employee</th>
                            <th>Customer's Name<sup>(M/F)</sup></th>
                            <th>Contact</th>
                            <th>Weight</th>
                            <th>Add Ons</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php



                        foreach ($data_customer as $customer) {
                        ?>
                            <tr>

                                <td><?php echo $customer->name_employee ?></td>
                                <td><?php echo $customer->name_customer . ' ' ?><sup>(<?php echo substr($customer->gender_c, 0, 1) ?>)</sup></td>
                                <td><?php echo $customer->phone ?></td>
                                <td><?php echo $customer->address ?></td>
                                <td><?php echo $customer->item_avail ?></td>
                                <td><?php echo $customer->total ?></td>
                                <td class="action-icons text-center">

                                    <a href="<?php echo base_url() . 'customer/delete/' . $customer->c_id ?>">
                                        <i title="Delete" class="fas fa-trash text-lg text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?= $this->include("customeracc/addrequest")
?>

<?= $this->endSection() ?>