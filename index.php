<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS - Online Service Management System</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">Customer's happiness is our aim</span>
        <button type="button" class="navbar-toggler" data-toggle="Collapse" data-target="#myMenu"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/requesterlogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- End navigation -->

    <!-- Start Header jumbotron -->
    <header class="jumbotron back-image">
        <div class="mainHeading mbl-version">
            <h1 class="text-uppercase - text-danger font-weight-bold">Welcome to OSMS</h1>
            <p class="font-custom">Customer's Happiness is our Aim</p>
            <a href="Requester/requesterlogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Signup</a>
        </div>
    </header>
    <!-- End header jumbotron -->

    <!-- Start Introduction section -->
    <div class="container" id="services">
        <div class="jumbotron">
            <h3 class="text-center">OSMS Services</h3>
            <p>
                OSMS Services is Nepal's leading chain of multi-brand Electronics and Electrical service workshops
                offering wide array of services. We focus on enhancing your user experience by offering world-class
                Electronic Appliances maintence services. Our sole mission is "To provide Electronic Appliances care
                services to keep the devices fit and healthy and customers happy and smiling".With well equipped
                Electronic Appliances services centres and fully trained mechanics, we provide quality services with
                excellent packages that are designed to offer you great savings.
                Out state-of-art workshops are conveniently located in many cities across the country. Now you can book
                your service online by doing Registration.
            </p>
        </div>
    </div>
    <!-- End Introduction section -->

    <!-- Starts Services Section -->
    <div class="container text-center border-bottom">
        <h2>Our services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4" id="registration">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>
    <!-- End service section container -->

    <!-- Start Registration Form -->
    <?php include('assets/userRegistration.php') ?>
    <!-- End of registration form  container-->

    <!-- Start Happy customer -->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">

                <!-- First card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatr1.jpg" class="img-fluid p-4 " alt="Avt1">
                            <h4 class="card-title">Ramesh Khanna</h4>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero
                                voluptates cum quisquam nihil sint enim amet voluptatem. Nisi possimus delectus
                                mollitia! Pariatur, deleniti!</p>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatr2.jpg" class="img-fluid p-4 " alt="Avt1">
                            <h4 class="card-title">Rajesh Hamal</h4>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero
                                voluptates cum quisquam nihil sint enim amet voluptatem. Nisi possimus delectus
                                mollitia! Pariatur, deleniti!</p>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatr1.jpg" class="img-fluid p-4 " alt="Avt1">
                            <h4 class="card-title">Biraj Bhatta</h4>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi libero
                                voluptates cum quisquam nihil sint enim amet voluptatem. Nisi possimus delectus
                                mollitia! Pariatur, deleniti!</p>
                        </div>
                    </div>
                </div>

                <!-- Fourth card -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/avatr2.jpg" class="img-fluid p-4 " alt="Avt1">
                            <h4 class="card-title">Amitabh Bachan</h4>
                            <p id="Contact" class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Modi libero
                                voluptates cum quisquam nihil sint enim amet voluptatem. Nisi possimus delectus
                                mollitia! Pariatur, deleniti!</p>
                        </div>
                    </div>
                </div>
                <!-- End of card -->

            </div>
        </div>
    </div>
    <!-- End of happy customer -->

    <!-- Start contact us form -->
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- First column -->
            <?php include('assets/contactForm.php') ?>
            <!-- End first column -->
            <!-- Start Second column -->
            <div class="col-md-4 text-center">
                <strong>Headquater:</strong>
                OSMS pvt ltd, <br>
                Kalimati,Kathmandu <br>
                Bagmati - 345535 <br>
                Phone - 9860123440 <br>
                <a href="#" target="_blank">www.osms.com</a><br><br><br>
                <strong>Branch:</strong>
                OSMS pvt ltd <br>
                New road , Kathmandu <br>
                Phone : 014235643
                <br>
                <a href="#" target="_blank">www.osms.com</a><br><br><br>
            </div>
            <!-- End second column -->
        </div>
    </div>
    <!-- End of contact form -->

    <!--start  Footer -->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <!-- Start first column -->
                <div class="col-md-6">
                    <span class="pr-2">Follow us</span>
                    <a href="#" target="_blank" class=" p-2 fi-color"> <i class="fab fa-facebook-f"></i></a>

                    <a href="#" target="_blank" class=" p-2 fi-color"> <i class="fab fa-twitter"></i></a>

                    <a href="#" target="_blank" class=" p-2 fi-color"> <i class="fab fa-youtube"></i></a>

                    <a href="#" target="_blank" class=" p-2 fi-color"> <i class="fab fa-google-plus-g"></i></a>

                    <a href="#" target="_blank" class=" p-2 fi-color"> <i class="fab fa-instagram"></i></a>

                </div>
                <!-- End first column -->

                <!-- start second column -->
                <div class="col-md-6 text-right">
                    <small>Designed by ItachiUchiha &copy; 2022</small>
                    <small class="ml-2"><a href="admin/adminlogin.php">Admin Login</a></small>
                </div>
                <!-- End second column -->

            </div>
        </div>

    </footer>
</body>

<!-- Bootstrap javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</html>