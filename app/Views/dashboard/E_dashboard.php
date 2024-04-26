               
               <?php
$page_session = \CodeIgniter\Config\Services::session();
?>

<?= $this->extend("layout/empbase"); ?>

<?= $this->section("content") ?> 
               <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                  <hr>
                    <!-- Content Row -->
                    <div class="row">

                    

                        <!-- Number of Rows of Customer Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-info shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Customers</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?//php echo $n_customer ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>

                        <!-- Number of Rows of Transaction Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-primary shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold  text-uppercase mb-1">Total Request</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?//php echo $n_transaction ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-receipt fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <!-- Number of Rows of Active Transaction Table -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-warning shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Request</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?//php echo $n_transaction_active ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-circle-notch fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <!-- Total Income (This year) -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-success shadow h-100 py-2">
                               
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Status</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?//php echo $total_income ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-share-square fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        <!-- Total Expenditure (This year) -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="rounded-0 card border-left-danger shadow h-100 py-2">
                                
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Expenditure (This year)</div>
                                        <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$ <?//php echo $total_expenditure ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-auto">
                                        <i class="fas fa-share-square fa-2x text-gray-500"></i>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
            </div>
            <!-- End of Main Content -->

            <?= $this->endSection() ?>