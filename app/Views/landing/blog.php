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
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
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
                    <h1 class="m-0 text-secondary"><span class="text-primary">DRY</span>ME</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?= base_url() ?>LandingController/landing" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url() ?>LandingController/landingabout" class="nav-item nav-link">About</a>
                        <a href="<?= base_url() ?>LandingController/landingservice" class="nav-item nav-link">Services</a>
                        <a href="<?= base_url() ?>LandingController/landingpricing" class="nav-item nav-link">Pricing</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Account</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="<?= base_url() ?>LoginController/login" class="dropdown-item active">Login</a>
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
                    <h1 class="mb-4 mb-md-0 text-white">Blog Articles</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-1.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-2.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-3.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-1.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-2.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-3.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-1.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-2.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-3.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="bg-light mb-4">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>public/landing/img/blog-3.jpg" alt="">
                                <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                    <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                    <div class="d-flex text-light">
                                        <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                        <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                        <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                    </div>
                                </a>
                            </div>
                            <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Categories</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Design
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Development
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Online Marketing
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keyword Research
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email Marketing
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Recent Post</h3>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/landing/img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/landing/img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/landing/img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/landing/img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="<?= base_url() ?>public/landing/img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?= base_url() ?>public/landing/img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="<?= base_url() ?>public/landing/img/blog-3.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="font-weight-bold mb-4">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="">
                    <h1 class="text-secondary mb-3"><span class="text-white">DRY</span>ME</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sit no, sed kasd et ipsum dolor duo dolor</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Your Site Name</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by <a class="text-white font-weight-medium" href="https://htmlcodex.com">HTML Codex</a>
        </p>
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