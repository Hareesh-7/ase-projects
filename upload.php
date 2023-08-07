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

<body>

    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <div class="h1 display-4 text-center mt-5">Add Service Details</div>
            <form class="mt-5" action="uploadData.php" method="post" enctype="multipart/form-data">
                <div class="form-group mt-3 px-5 row">
                    <label for="category" class="text-left col-12 col-md-4" style="font-weight: bold;">Open this select menu</label>
                    <div class="col-12 col-md-8">
                        <select class="form-control custom-select w-100" id="category" name="category" onchange="selectCategory(this.value)" required>
                            <option value="">Open this select menu</option>
                            <option value="webDevelopment">Web Development</option>
                            <option value="graphicDesign">Graphic Design</option>
                            <option value="digitalMarketing">Digital Marketing</option>
                            <option value="contentMarketing">Content Marketing</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3 px-5 row">
                    <label for="previewImage" class=" text-left col-12 col-md-4" style="font-weight: bold;">Preview Image</label>
                    <div class=" col-12 col-md-8">
                        <input type="file" class="form-control form-control-file" id="previewImage" name="previewImage" accept="image/*" required>
                    </div>
                </div>
                <div id="type"></div>

                <button class="btn btn-success mt-5 mx-5" style="float: right;" type="submit" id="submit" name="Submit">Submit form</button>
            </form>
        </div>
    </div>

    <script>
        function selectCategory(val) {
            let cat = document.getElementById("type");
            cat.innerHTML = "";
            if (val == "webDevelopment") {
                cat.innerHTML = `
                                <div class="form-group mt-3 px-5 row">
                                    <label for="typeOf" class=" text-left col-12 col-md-4" style="font-weight: bold;">Open this select menu</label>
                                    <div class="col-12 col-md-8">
                                        <select class="form-control custom-select" id="typeOf" name="typeOf" required>
                                            <option value="">Open this select menu</option>
                                            <option value="constructions">constructions</option>
                                            <option value="interiors">interiors</option>
                                            <option value="travel">travel</option>
                                            <option value="events">events</option>
                                            <option value="education">education</option>
                                            <option value="medical">medical</option>
                                            <option value="e-commerce">e-commerce</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mt-3 px-5 row">
                                    <label for="url" class=" text-left col-12 col-md-4" style="font-weight: bold;">URL</label>
                                    <div class="col-12 col-md-8">
                                        <input class="form-control form-control-lg" type="text" id="url" name="previewURL" placeholder="https://example.com" required>
                                    </div>
                                </div>
                                `;
            }
        }
    </script>

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