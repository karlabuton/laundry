<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laundry Management System | CodeIgniter Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>public/assets/img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>public/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>public/landing/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">

                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">WASH</span>ME</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?= base_url() ?>LandingController/landing" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url() ?>LandingController/landingabout" class="nav-item nav-link active">About</a>
                        <a href="<?= base_url() ?>LandingController/landingservice" class="nav-item nav-link">Services</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="<?= base_url() ?>LoginController/login" class="dropdown-item">Login</a>
                                <a href="<?= base_url() ?>SignupController/signup" class="dropdown-item">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">About Us</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Working Process Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Working Process</h6>
            <h1 class="display-4 text-center mb-5">How We Work</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">4</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Process End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Our Features</h6>
                    <h1 class="mb-4">Why Choose Us</h1>
                    <p>1. Expert Care You Can Trust:
                        Experience the pinnacle of laundry care with our seasoned professionals. Years of expertise ensure that each garment receives meticulous attention, providing a level of care that goes beyond the ordinary.</p>
                    <p>2. Cutting-edge Technology for Superior Clean:
                        Step into the future of laundry services! Our state-of-the-art facility employs cutting-edge technology, guaranteeing efficient and precise cleaning. Your clothes deserve the best, and we deliver excellence with every wash.</p>
                    <p>3. Reliability You Can Count On:
                        No more waiting games. We take pride in our punctuality and reliability. Your laundry will be ready as promised, giving you the peace of mind to plan your schedule with confidence.</p>
                    <p>4. Tailored Excellence Just for You:
                        Your clothes, your preferences. Experience the luxury of personalized care for each garment. From special treatments to individual requirements, we tailor our services to meet your unique needs.</p>
                    <p>5. Commitment to Sustainability and Transparency:
                        We care for your clothes and the planet. Our commitment to eco-friendly practices ensures a sustainable approach to laundry. With transparent pricing and no hidden costs, we provide you with the best value for your investment.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">5</h1>
                            <h5 class="font-weight-bold">Years Expereince</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">3</h1>
                            <h5 class="font-weight-bold">Expert Worker</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">200</h1>
                            <h5 class="font-weight-bold">Happy Clients</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">200</h1>
                            <h5 class="font-weight-bold">Dry Cleaning</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                        <h1 class="display-1 text-white mb-3">10+</h1>
                        <h1 class="text-white m-0">Years Experience</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-4 px-sm-3 px-md-5">
        <div class="row pt-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="">
                    <h1 class="text-secondary mb-3"><span class="text-white">WASH</span>ME</h1>
                </a>
                <p>Fresh, fast, and fabulous! Transform your laundry routine with our professional and friendly services.</p>
                <div class="d-flex justify-content-start mt-3">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>POBLACION, MAIGO, LANAO DEL NORTE</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+63 965-548-5195</p>
                <p><i class="fa fa-envelope mr-2"></i>jessielomoljo@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?= base_url() ?>EmployeeController/addemployee"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="<?= base_url() ?>LandingController/landingabout"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="<?= base_url() ?>LandingController/landingservice"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white" href="<?= base_url() ?>LandingController/landingcontact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/landing/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>public/landing/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/landing/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>public/landing/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?= base_url() ?>public/landing/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= base_url() ?>public/landing/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>public/landing/js/main.js"></script>
</body>

</html>