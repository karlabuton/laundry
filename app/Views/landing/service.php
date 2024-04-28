<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DRYME - Free Laundry Service Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>public/landing/img/favicon.ico" rel="icon">

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
                    <div class="d-inline-flex align-items-center">
                    </div>
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
                        <a href="<?= base_url() ?>LandingController/landingabout" class="nav-item nav-link">About</a>
                        <a href="<?= base_url() ?>LandingController/landingservice" class="nav-item nav-link active">Services</a>
                        <a href="<?= base_url() ?>LandingController/landingcontact" class="nav-item nav-link">Contact</a>
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
                    <h1 class="mb-4 mb-md-0 text-white">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
            <h1 class="display-4 text-center mb-5">What We Offer</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Wash & Laundry</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Curtain Laundry</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Testimonial</h6>
            <h1 class="display-4 text-center mb-5"> Customers Feedback</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Client Name</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Comment</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Client Name</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Comment</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Client Name</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Comment</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Client Name</h5>
                        <p class="text-muted font-italic">Profession</p>
                        <p class="m-0">Comment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <div class="main-feedback-form">
        <form action="submit_feedback.php" method="POST">

            <label for="customer_name">Name</label>
            <input type="text" id="customer_name" name="customer_name" class="customer_name" placeholder="Your name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="email" placeholder="Your email" required>

            <label for="phone_number">Phone Number</label>
            <input type="tel" name="phone_number" class="tel" maxlength="10" id="phone_number" placeholder="Your phone number" required>

            <label for="feedback_type">Feedback Type</label><br>
            <input type="radio" id="comments" name="feedback_type" value="Comments">
            <label for="comments">Comments</label>
            <input type="radio" id="suggestions" name="feedback_type" value="Suggestions">
            <label for="suggestions">Suggestions</label>
            <input type="radio" id="questions" name="feedback_type" value="Questions">
            <label for="questions">Questions</label><br><br>

            <label for="description">Description of your Feedback:</label>
            <textarea name="description" id="description" placeholder="Please describe your feedback here" rows="5" required></textarea>

            <input name="submit" type="submit" value="Submit">
        </form>
    </div>


    <style>
        input[type='text'],
        input[type='email'],
        input[type='tel'],
        textarea {
            width: 100%;
            padding: 10px 0 10px 6px;
            border-radius: 3px;
            border: 1px solid #ccc;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        input[type='text']:focus,
        input[type='email']:focus,
        input[type='tel']:focus,
        select:focus,
        textarea:focus {
            border: 1px solid #5db6db;
            box-shadow: 0 0 10px #b9eaff;
            outline: none !important;
        }

        input[type='submit'] {
            background: rgb(39, 160, 210);
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .main-feedback-form {
            max-width: 400px;
            margin: 0 auto;
            background: #e9e9e9;
            padding: 20px 45px 20px 25px;
            border-radius: 5px;
        }
    </style>



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
                    <a class="text-white mb-2" href="<?= base_url() ?>LandingController/landing"><i class="fa fa-angle-right mr-2"></i>Home</a>
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

    <!-- Add this script at the end of your service.html file -->
    <script>
        // Function to get URL parameter by name
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        // Check if success parameter exists in the URL
        var successParam = getUrlParameter('success');
        if (successParam === 'true') {
            // Display success message
            alert('Your feedback was submitted successfully!');
        }

        // Check if error parameter exists in the URL
        var errorParam = getUrlParameter('error');
        if (errorParam === 'true') {
            // Display error message
            alert('An error occurred while submitting your feedback. Please try again later.');
        }
    </script>

</body>

</html>