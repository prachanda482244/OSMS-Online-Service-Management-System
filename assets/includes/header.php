<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
</head>

<!-- Bootstrap css -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font awesome css -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Custom css -->
<link rel="stylesheet" href="../css/custom.css">

<body>

    <!-- Top navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-no-wrap p-0 shadow "><a href="requesterprofile.php"
            class="navbar-brand col-sm-3 col-md-2 mr-0"> OSMS</a></nav>

    <!-- Start Container -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-sm-2 bg-light  sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column p-3 gap-2">
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'requesterprofile') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="requesterprofile.php" class="nav-link text-dark ">
                                <i class="fas fa-user"></i>Profile
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php if (PAGE == 'submitRequest') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="submitRequest.php" class="nav-link text-dark ">
                                <i class="fab fa-accessible-icon"></i>Submit Request
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'serviceStatus') {
                                                        echo "active";
                                                    } ?> ">
                            <a href="serviceStatus.php" class="nav-link text-dark">
                                <i class="fas fa-align-center"></i>Service Status
                            </a>
                        </li>
                        <li class="nav-item py-2 <?php
                                                    if (PAGE == 'changePassword') {
                                                        echo "active";
                                                    } ?>">
                            <a href="changePassword.php" class="nav-link text-dark">
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
            <!-- Start Profile area second column -->
            <!-- End Profile area second column -->