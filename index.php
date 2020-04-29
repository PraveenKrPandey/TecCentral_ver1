<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>TecCentral</title>
</head>

<body>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
        <!-- brand logo with name -->
        <a href="index.php" class="navbar-brand">TecCentral</a>
        <!-- tag line of the company -->
        <span class="navbar-text">Building your success online</span>

        <!-- toggle button for responsive design -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav> <!-- end navigation -->


    <!-- start header jumbotron -->
    <header class="jumbotron back-image" style="background-image:url(image/cover.jpeg);">
        <div class="myclass mainHeading">
            <h1 class=" text-danger font-weight-bold ">Welcome to TecCentral</h1>
            <P class="font-italic text-light">Building your success online</P>
            <a href="#" class="btn btn-success mr-4">Login</a>
            <a href="#" class="btn btn-primary mr-4">Sign Up</a>
        </div>


    </header>
    <!-- end header jumbotron -->

    <!-- Start Introduction Section -->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">TecCentral Services</h3>
            <p>
                TecCentral is the leading website company in India in Delhi Ncr.
                We offer a wide range of digital services to build your online success. A professional and engaging website is one of the most effective ways to attract potential business to your business.
                and it also increases your brand value and sales in general.
                We design responsive websites for our customers, which not only look good, but also help you get better conversions and, ultimately, offer a much greater return on your investment to maintain your company's web presence.
                TecCentral is the leading website company in India in Delhi Ncr.
                We offer a wide range of digital services to build your online success. A professional and engaging website is one of the most effective ways to attract potential business to your business.
                and it also increases your brand value and sales in general.
                We design responsive websites for our customers, which not only look good, but also help you get better conversions and, ultimately, offer a much greater return on your investment to maintain your company's web presence.
                Our website design and development services from NCR in Delhi are available at a reasonable price.

            </p>
        </div>
    </div>
    <!-- End Introduction Section container-->


    <!-- start services section -->
    <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4 mb-4">
            <div class="col-sm-4 mb4">
                <a href="#">
                    <i class="fas fa-drafting-compass fa-8x text-success"></i>
                </a>
                <h4 class="mt-4">Web Designing</h4>
            </div>
            <div class="col-sm-4 mb4">
                <a href="#">
                    <i class="fas fa-code fa-8x text-danger"></i>
                </a>
                <h4 class="mt-4">Web Development</h4>
            </div>
            <div class="col-sm-4 mb4">
                <a href="#">
                <i class=""></i>
                    <i class="fab fa-android fa-8x text-info"></i></a>
                <h4 class="mt-4">Android Devlopment</h4>
            </div>
        </div>
    </div>
    <!-- End services section -->

    <!-- start registration form -->
    <?php include('userRegistration.php');  ?>
    <!-- end registration form container-->

    <!-- start happy customer -->
    <div class="jumbotron bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Happy Customer
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6 mt-2">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        
                    <i class="fas fa-user-circle fa-8x text-danger"></i>
                    <!-- <img src="image/avtar1.jpeg" alt="avt1" class="img-fluid" style="border-radius:100px;"> -->
                        <h4 class="card-title">Praveen Pandey</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>
            <!--End 1st column  -->
            <div class="col-lg-3 col-sm-6 mt-2">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        
                    <i class="fas fa-user-circle fa-8x text-warning"></i>
                    <!-- <img src="image/avtar2.jpeg" alt="avt2" class="img-fluid" style="border-radius:100px;"> -->
                        <h4 class="card-title">soman Sharma</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>
            <!--End 2nd column  -->
            <div class="col-lg-3 col-sm-6 mt-2">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                    <i class="fas fa-user-circle fa-8x text-primary"></i>    
                    <!-- <img src="image/avtar3.jpeg" alt="avt3" class="img-fluid" style="border-radius:100px;"> -->
                        <h4 class="card-title">ved vyas</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>
            <!--End 3rd column  -->
            <div class="col-lg-3 col-sm-6 mt-2">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        
                    <i class="fas fa-user-circle fa-8x text-success"></i>
                    <!-- <img src="image/avtar4.jpeg" alt="avt4" class="img-fluid" style="border-radius:100px;"> -->
                        <h4 class="card-title">gauri gupta</h4>
                        <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            nesciunt debitis numquam.</p>
                    </div>
                </div>
            </div>
            <!--End 4th column  -->
        </div>
    </div> <!-- End of Happy customer section -->

    <!-- start contact us section -->
    <?php include('contactUs.php'); ?>
    <!-- end contact us section-->


    <!-- start footer section -->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <!-- start 1st column -->
                    <span class="pr-2">Follow Us: </span>
                    <a href="#" target="_blank" class="pr2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr2 fi-color"><i class="fab fa-instagram"></i></a>
                </div> <!-- end 1st column -->

                <!-- start 2nd column -->
                <div class="col-md-6 text-right">
                    <small>Designed by praveen pandey &copy; 2020</small>
                </div>
                <!-- end 2nd column -->
            </div>
        </div>
    </footer>

    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>