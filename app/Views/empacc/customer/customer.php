<?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/empbase"); ?>

<?= $this->section("content") ?>           
               
               <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h4 class="my-auto font-weight-bold mb-0 ">Customer Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addcustomer"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add Customers</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">
                                           
                                            <th>ID</th>
                                            <th>Customer's Name<sup>(M/F)</sup></th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        
                                           foreach ($data_customer as $customer) {
                                        ?>
                                        <tr>
            
                                            <td><?php echo $customer->customer_id ?></td>
                                            <td><?php echo $customer->name_customer.' ' ?><sup>(<?php echo substr($customer->gender_c, 0, 1) ?>)</sup></td>
                                            <td><?php echo $customer->address ?></td>
                                            <td><?php echo $customer->phone ?></td>
                                            <td class="action-icons text-center">
                                                <a href="#" data-toggle="modal" data-target="#editcustomer<?php echo $customer->customer_id ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'customer/delete/'.$customer->customer_id?>"> 
                                                    <i title="hapus" class="fas fa-trash text-lg text-danger"></i>
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

           
 <?//= $this->include("resident/view_modal") ?>

<?= $this->endSection() ?>
            

            