<?php
$page_session = \CodeIgniter\Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url() ?>public/assets/img/logo.jpg" type="image/x-icon">

    <title>Laundry Management System | CodeIgniter Project</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>public/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>public/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Datatables-->
    <link href="<?= base_url() ?>public/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>
<style>
    html,
    body {
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .bg-gradient {
        background-image: url(<?= base_url() ?>public/landing/ss/gif.gif);
        background-size: cover;
        background-position: center;
    }

    .card {
        background: rgba(255, 255, 255, 0.8);
        /* Adding some opacity to make the card stand out */
    }

    #system-logo {
        height: 15em !important;
        width: 15em !important;
        object-fit: cover;
        object-position: center center;
    }
</style>

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

<body class="bg-gradient">


    <div class="row justify-content-center h-100 align-items-center">

        <div class="col-xl-4 col-lg-5 col-md-10 col-sm-12 col-xs-12 mt-3">

            <div class="card o-hidden border-0 shadow-lg my-5 rounded-0 mb-3">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center py-3">
                            <form action="<?php echo base_url()  ?>SignupController/addaccount" method="post" class="user needs-validation mx-3 mb-4" novalidate>
                                <div class="modal-body">

                                    <input type="text" class="form-control" name="c_id" value="  <?php echo $create ?>" hidden>

                                    <div class="form-group">
                                        <label class="control-label ">User Type</label>
                                        <select class="form-control" name="usertype" required>
                                            <option value="Customer">Customer</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label ">Username</label>
                                        <input type="text" class="form-control" placeholder='username' name="username" required>

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label ">Password</label>
                                        <input type="password" class="form-control" placeholder='Password' name="password" required>

                                    </div>

                                </div>
                                <div class="modal-footer d-flex">
                                    <button type="button" class="flex-fill btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="flex-fill btn btn-primary rounded-0">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script src="<?= base_url() ?>public/assets/js/script.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>public/assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>public/assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins for Tables-->
        <script src="<?= base_url() ?>public/assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts for Tables-->
        <script src="<?= base_url() ?>public/assets/js/demo/datatables-demo.js"></script>



        <script>
            $(function() {
                var el = $("<div>");
                el.addClass('alert rounded-0')
                if ('' == 1) {
                    var msg = el.clone()
                    msg.addClass('alert-success')
                    msg.html('')

                    $('#content>.container-fluid').prepend(msg)
                }
                if ('' == 1) {
                    var msg = el.clone()
                    msg.addClass('alert-danger')
                    msg.html('')

                    $('#content>.container-fluid').prepend(msg)
                }
            })
        </script>
</body>

</html>