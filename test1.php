<?php
include "./connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ASE Technologies - Projects Portfolio </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">Projects</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#service" class="nav-item nav-link">Services</a>
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <!-- <h1 class="text-primary fw-bold m-0">Projects</h1> -->
                <img src="./img/logo.png" alt="image" height="80px">
            </a>
            <div class="navbar-nav me-auto py-0">
                <!-- </div>
            <div class="navbar-nav me-auto py-0"> -->
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">

            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">Hi, Welcome to</h3>
                    <h1 class="display-3 mb-3">ASE Technologies</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">
                        Software Development Company,
                        Web Development Company,
                        Digital Marketing Company
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <img class="img-fluid" src="img/profile.png" alt="image"> -->
                    <img class="img-fluid" src="img/logo2.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container" id="service">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded mb-5 g-4">
                        <li class="nav-item w-50 shadow"> <button class="nav-link w-100 fs-5 active" data-bs-toggle="pill" href="#webDesignAndDevelopment">
                                <div class="service-item d-flex flex-column flex-sm-row rounded h-100 p-4 p-lg-5">
                                    <div class="bg-icon flex-shrink-0 mb-3"> <i class="fas fa-laptop-code fa-2x text-dark"></i> </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3">Web Design & Development</h4>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-50 shadow"> <button class="nav-link w-100 fs-5" data-bs-toggle="pill" href="#graphicDesign">
                                <div class="service-item d-flex flex-column flex-sm-row rounded h-100 p-4 p-lg-5">
                                    <div class="bg-icon flex-shrink-0 mb-3"> <i class="fas fa-bezier-curve fa-2x text-dark"></i> </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3">Graphic Design</h4>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-50 shadow"> <button class="nav-link w-100 fs-5" data-bs-toggle="pill" href="#digitalMarketing">
                                <div class="service-item d-flex flex-column flex-sm-row rounded h-100 p-4 p-lg-5">
                                    <div class="bg-icon flex-shrink-0"> <i class="fa fa-bullhorn fa-2x text-dark"></i>
                                    </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3">Digital Marketing</h4>
                                    </div>
                                </div>
                            </button>
                        </li>
                        <li class="nav-item w-50 shadow"> <button class="nav-link w-100 fs-5" data-bs-toggle="pill" href="#contentMarketing">
                                <div class="service-item d-flex flex-column flex-sm-row rounded h-100 p-4 p-lg-5">
                                    <div class="bg-icon flex-shrink-0"> <i class="fa fa-edit fa-2x text-dark"></i>
                                    </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3">Content Marketing</h4>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </ul>


                    <div class="tab-content">

                        <!-- Web Design And Development -->
                        <div id="webDesignAndDevelopment" class="tab-pane fade p-0 active show">
                            <div class=" py-6 pt-5" id="wd">
                                <div>
                                    <div class="row g-5 mb-5 align-items-center wow " data-wow-delay="0.1s">
                                        <div class="col-lg-6">
                                            <h1 class="display-5 mb-0">Our Available Websites For Development</h1>
                                        </div>
                                        <div class="col-lg-6 text-lg-end">
                                            <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                                                <li class="mx-3 col-4 col-md-3 col-lg-2 active" data-filter="*">
                                                    All Projects</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".constructions">
                                                    Constructions</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".interiors">
                                                    Interiors</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".travel">
                                                    Travel</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".events">
                                                    Events</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".education">
                                                    Education</li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".medical">
                                                    Medical </li>
                                                <li class="mx-3 col-4 col-md-3 col-lg-2" data-filter=".e-commerce">
                                                    E-Commerce</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row g-4 portfolio-container wow " data-wow-delay="0.1s">
                                        <?php
                                        $sqlWD = "SELECT * FROM previewdata where category = 'webDevelopment'";
                                        $resultWD = $conn->query($sqlWD);
                                        // var_dump($resultWD);
                                        $countWD = $resultWD->rowCount();
                                        if ($countWD > 0) {
                                            while ($rowWD = $resultWD->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                                <div class="col-lg-4 col-md-6 portfolio-item <?php echo $rowWD['typeOf'] ?>">
                                                    <div class="portfolio-img rounded overflow-hidden">
                                                        <img class="img-fluid" src="img/webDevelopment/<?php echo ($rowWD['typeOf'] . '/' . $rowWD['previewImage']) ?>" alt="<?php echo $rowWD['previewImage'] ?>">
                                                        <div class="portfolio-btn">
                                                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" target="_blank" href="https://<?php echo $rowWD['previewURL'] ?>">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphic Design -->
                        <div id="graphicDesign" class="tab-pane fade p-0">
                            <div class="container">
                                <div class="row g-5 mb-5 align-items-center wow " data-wow-delay="0.1s">
                                    <div class="col-lg-12">
                                        <h1 class="display-5 mb-0">
                                            Our Available Designing Services for Web & Graphic Design</h1>
                                    </div>
                                </div>
                                <div class="row g-4 portfolio-container2 wow " data-wow-delay="0.1s">
                                    <?php
                                    $sqlGD = "SELECT * FROM previewdata where category = 'graphicDesign'";
                                    $resultGD = $conn->query($sqlGD);
                                    // var_dump($resultGD);
                                    $countGD = $resultGD->rowCount();
                                    if ($countGD > 0) {
                                        while ($rowGD = $resultGD->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                            <div class="col-lg-4 col-md-6 portfolio-image">
                                                <div class="portfolio-img rounded overflow-hidden">
                                                    <img class="img-fluid" src="img/<?php echo ($rowGD['category'] . '/' . $rowGD['previewImage']) ?>" alt="<?php echo $rowGD['previewImage'] ?>">

                                                    <div class="portfolio-btn">
                                                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/<?php echo ($rowGD['category'] . '/' . $rowGD['previewImage']) ?>" data-lightbox="portfolio">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>

                        <!-- Digital Marketing -->
                        <div id="digitalMarketing" class="tab-pane fade p-0">
                            <div class=" py-6 pt-5" id="gd">
                                <div>
                                    <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="col-lg-12">
                                            <h1 class="display-5 mb-0">Our Available Services for Digital Marketing</h1>
                                        </div>
                                    </div>

                                    <div class="row g-4 portfolio-container3 wow fadeInUp" data-wow-delay="0.1s">
                                        <?php
                                        $sqlDM = "SELECT * FROM previewdata where category = 'digitalMarketing'";
                                        $resultDM = $conn->query($sqlDM);
                                        // var_dump($resultDM);
                                        $countDM = $resultDM->rowCount();
                                        if ($countDM > 0) {
                                            while ($rowDM = $resultDM->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                                <div class="col-lg-4 col-md-6 portfolio-image">
                                                    <div class="portfolio-img rounded overflow-hidden">
                                                        <img class="img-fluid" src="img/<?php echo ($rowDM['category'] . '/' . $rowDM['previewImage']) ?>" alt="<?php echo $rowDM['previewImage'] ?>">

                                                        <div class="portfolio-btn">
                                                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/<?php echo ($rowDM['category'] . '/' . $rowDM['previewImage']) ?>" data-lightbox="portfolio">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Marketing -->
                        <div id="contentMarketing" class="tab-pane fade p-0 ">
                            <div class=" py-6 pt-5" id="cm">
                                <div>
                                    <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="col-lg-12">
                                            <h1 class="display-5 mb-0">Our Available Services for Content Marketing</h1>
                                        </div>
                                    </div>

                                    <div class="row g-4 portfolio-container4 wow fadeInUp" data-wow-delay="0.1s">
                                        <?php
                                        $sqlCM = "SELECT * FROM previewdata where category = 'contentMarketing'";
                                        $resultCM = $conn->query($sqlCM);
                                        // var_dump($resultCM);
                                        $countCM = $resultCM->rowCount();
                                        if ($countCM > 0) {
                                            while ($rowCM = $resultCM->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                                <div class="col-lg-4 col-md-6 portfolio-image">
                                                    <div class="portfolio-img rounded overflow-hidden">
                                                        <img class="img-fluid" src="img/<?php echo ($rowCM['category'] . '/' . $rowCM['previewImage']) ?>" alt="<?php echo $rowCM['previewImage'] ?>">

                                                        <div class="portfolio-btn">
                                                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/<?php echo ($rowCM['category'] . '/' . $rowCM['previewImage']) ?>" data-lightbox="portfolio">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Expertise End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">
                        <i class="fab fa-weixin"></i>&nbsp;Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">Head Quarters:</p>
                    <h3 class="fw-bold">701, Carnegie center, Princeton NJ</h3>
                    <hr class="w-100">
                    <p class="mb-2">Corporate office:</p>
                    <h3 class="fw-bold">Seethammadhara, Visakhapatnam</h3>
                    <hr class="w-100">
                    <p class="mb-2">R & D office:</p>
                    <h3 class="fw-bold">Nsl Arena, Habsiguda, Hyderabad</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+91 87126 55512</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">hareesh@asetechnologies.in</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i>
                        </a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0 row row-cols-1 row-cols-md-3">
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.841607812502!2d-74.65418431598664!3d40.32367269785276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3e12fb0d9d989%3A0x69cacc85d3055363!2s701%20Carnegie%20Center%20Princeton%2C%20Princeton%2C%20NJ%2008540%2C%20USA!5e0!3m2!1sen!2sin!4v1689663565440!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.044934724952!2d83.30888321744385!3d17.742521800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39438dab92a6ef%3A0x9adb8a655b5e380b!2sASE%20Technologies%20%7C%20Digital%20Marketing%20Company%20in%20Visakhapatnam!5e0!3m2!1sen!2sin!4v1689664554031!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.197304561097!2d78.54376362483042!3d17.40231643348739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb993e9c406ebd%3A0xf2e3c2fc7e02a425!2sNSL%20ARENA%2C%20Hyderabad%2C%20Telangana%20500013!5e0!3m2!1sen!2sin!4v1689663606636!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <!-- <a class="border-bottom text-secondary" href="#">Your Site Name</a>, All Right Reserved. -->
                </div>
                <div class="col-md-6 text-center text-md-end">
                    &copy; Designed & Developed By <a class="border-bottom text-secondary" href="https://asetechnologies.in">ASE Technologies</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>