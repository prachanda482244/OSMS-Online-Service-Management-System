<?php
include('../db_connection.php');

session_start();
if (!isset($_SESSION['is_adminlogin'])) {

    // Global Variable
    if (isset($_REQUEST['aEmail'])) {

        $aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
        $aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));
        $sql = "SELECT a_email,a_password FROM adminlogin_tb WHERE a_email = '$aEmail' AND a_password = '$aPassword' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['aEmail'] = $aEmail;
            header('Location: /bcaivproject/Admin/dashboard.php');
            exit();
        } else {
            $msg = '<div class="alert alert-warning mt-2">Enter valid Email and Password </div>';
        }
    }
} else {
    header('Location: /bcaivproject/Admin/dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">

</head>

<body>
    <div class="mt-5 mb-3 text-center fs-2">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>

    <p class="text-center fs-4"><i class="fas fa-user-secret text-danger px-2"></i> Admin Login Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-5" method="POST">

                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="rEmail" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="aEmail">
                        <small class="form-text">We will never share your email with anyone else</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="rPass" class="font-weight-bold pl-2">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="aPassword">
                    </div>
                    <button type="submit"
                        class="btn btn-outline-danger w-100 mt-4 font-weight-semibold shadow-sm">Login</button>
                    <?php if (isset($msg)) {
                        echo $msg;
                    } ?>
                </form>
                <div class="text-center">
                    <a class="btn btn-info mt-3 font-weight-semibold shadow-sm" href="../index.php">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>