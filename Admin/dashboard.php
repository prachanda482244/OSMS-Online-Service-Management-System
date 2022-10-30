<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- font awesome css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
    <!-- Top navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-no-wrap p-0 shadow "><a href="dashboard.php"
            class="navbar-brand col-sm-3 col-md-2 mr-0"> OSMS</a></nav>
    <!-- Start Container -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-sm-2 bg-light  sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column p-3 gap-2">
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'dashboard') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="dashboard.php" class="nav-link text-dark ">
                                <i class="fas fa-user"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php if (PAGE == 'work') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="work.php" class="nav-link text-dark ">
                                <i class="fab fa-accessible-icon"></i>Work Order
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'request') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="request.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Request
                            </a>
                        </li>

                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'assets') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="assets.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Assets
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'technician') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="technician.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Technician
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'requester') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="requester.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Requester
                            </a>
                        </li>

                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'requester') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="requester.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Requester
                            </a>
                        </li>


                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'sellreport') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="sellreport.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Sell report
                            </a>
                        </li>

                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'workreport') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="workreport.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Work report
                            </a>
                        </li>


                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'changepass') {
                                                        echo "active";
                                                    } ?>">
                            <a href="changepass.php" class="nav-link text-dark">
                                <i class="fas fa-key"></i>Change Password
                            </a>
                        </li>
                        <li class="nav-item py-2 ">
                            <a href="logoutHandler.php" class="nav-link text-dark">
                                <i class="fas fa-sign-out-alt "></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End of side bar -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
    <!-- javascript files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>