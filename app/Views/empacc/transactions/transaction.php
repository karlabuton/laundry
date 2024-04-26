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
                            <h4 class="my-auto font-weight-bold mb-0 ">Transaction Data</h4>
                            <a href="#" class="btn btn-primary shadow-sm rounded-0" data-toggle="modal" data-target="#addtransaction"><i
                                class="fas fa-plus fa-sm text-white-500"></i> Add New Transaction</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="">

                                            <th>Customer</th>
                                            <th>Employee</th>
                                            <th>Weight</th>
                                            <th>Add Ons</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                            <th class="actions">Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                    
                                            foreach ($data_transaction as $transaction) {
                                        ?>
                                        <tr>
                                            
                                           
                                            <td>
                                                <span class="row px-3  text-xs"><?php echo $transaction->c_id ?></span>
                                                <span class="row px-3"><?php echo $transaction->name_customer ?></span>
                                            </td>
                                            <td>
                                                <span class="row px-3  text-xs"><?php echo $transaction->employee_id ?></span>
                                                <span class="row px-3"><?php echo $transaction->name_employee ?></span>
                                            </td>
                                            <td><?php echo $transaction->weight ?> KG</td>
                                            <td>$<?php echo $transaction->item_avail ?></td>
                                            <td><?php echo $transaction->total ?></td>
                                            <td><?php if ($transaction->date)?></td>
                                            <td class="action-icons text-center">

                                                <?php if ($transaction->date == '0000-00-00') { ?>

                                                <a target="blank" href="<?php echo base_url().'transaction/print_nota/'.$transaction->req_id?>" class="btn btn-sm rounded-lg btn-primary mb-2"> Note</a><br>

                                                <a href="<?php echo base_url().'transaction/done/'.$transaction->req_id?>" class="btn btn-sm rounded-lg btn-success mb-2">Complete</a><br>

                                                <?php } ?>
                                                <a href="#" data-toggle="modal" data-target="#edittransaction<?//php echo $req_id; ?>"> 
                                                    <i title="ubah" class="fas fa-edit text-lg text-info"></i>
                                                </a>
                                                <a href="<?php echo base_url().'transaction/delete/'.$transaction->req_id?>"> 
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

            <?= $this->endSection() ?>
                       
         
         