<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex flex-column align-items-center justify-content-center my-3" href="<?= base_url() ?>DashboardController/c_dashboard">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-text mx-3">LMS</div>
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>DashboardController/c_dashboard">
                    <i class="fas fa-fw fa-tachometer-alt" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>RequestController/customer_req">
                    <i class="fas fa-fw fa-user-tie" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Request</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>C_Vitems_slotController/view_item">
                    <i class="fas fa-fw fa-users" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">View Items & Slot</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>RequestController/transaction">
                    <i class="fas fa-fw fa-dollar-sign" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Transactions</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>C_StatusController/status">
                    <i class="fas fa-fw fa-share" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Status</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>FeedbackController/feedbackcomment">
                    <i class="fas fa-fw fa-share" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Feedback!</span></a>
            </li>

            <!-- <hr class="sidebar-divider"> -->

            <!-- Nav Item - Master Data Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="---PHP Link---employee">Employee</a>
                        <a class="collapse-item" href="---PHP Link---customer">Customer</a>
                        <a class="collapse-item" href="---PHP Link---transaction">Transaction</a>
                        <a class="collapse-item" href="---PHP Link---expenditure">Expenditure</a>
                    </div>
                </div>
            </li> -->




            <!-- <hr class="sidebar-divider"> -->

            <!-- Nav Item - Data Mahasiswa -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-power-off icon-nav" style="font-size: 25px;"></i>
                    <span style="font-size: 18px; font-weight: bold;">Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <!-- Web Page Logo -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'DashboardController/c_dashboard' ?>">
                                <img class="logo" src="<?php echo base_url() . 'public/assets/img/logo.jpg' ?>">
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Web Page Title -->
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#">
                                <div class="text-lg text-dark font-weight-bold">Laundry Management System</div>
                            </a>
                        </li>

                    </ul>
                    <?php foreach ($userdata as $user) { ?>
                        <div class="font-weight-bold mr-4">
                            Welcome, <?= $user->name_customer ?>!
                        </div>
                    <?php } ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3 mb-4">Are you sure you're going out?</div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <a class="flex-fill btn btn-danger p-2 rounded-0" href="<?php echo base_url() . 'LoginController/logoutCustomer' ?>">Logout</a>
                                    <button class="flex-fill btn btn-secondary p-2 rounded-0" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>