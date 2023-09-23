<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ASE Technologies - Projects </title>
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

<body class="">

    <div class="row w-100" style="height: 100vh; align-items: center">
        <div class="col-lg-6">
            <img src="./img/logo.png" alt="ASE logo" width="100%" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <div class="h1 display-4 text-center mt-5">Add Service Details</div>
            <form class="mt-5" action="sessions.php" method="post">

                <div class="form-group mt-3 px-5 row">
                    <label for="id" class=" text-left col-12 col-md-4" style="font-weight: bold;">User ID</label>
                    <div class=" col-12 col-md-8">
                        <input type="email" class="form-control form-control-file" id="id" name="email" required>
                    </div>
                </div>

                <div class="form-group mt-3 px-5 row">
                    <label for="password" class=" text-left col-12 col-md-4" style="font-weight: bold;">Password</label>
                    <div class=" col-12 col-md-8">
                        <input type="password" class="form-control form-control-file" id="password" name="password" required>
                    </div>
                </div>

                <div id="error"></div>

                <button class="btn btn-success mt-5 mx-5" style="float: right;" type="submit" id="submit" name="submit">Submit form</button>
            </form>
        </div>
    </div>

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