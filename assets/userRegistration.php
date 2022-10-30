<?php
include "db_connection.php";


if (isset($_REQUEST['rSignup'])) {
    // GLobal variables
    $rName = $_REQUEST['rName'];
    $rEmail = $_REQUEST['rEmail'];
    $rPass = $_REQUEST['rPassword'];

    // CHecking for empty fields
    if ($rName == "" || $rEmail == "" || $rPass == "") {
        $regmsg =  '<div class ="alert alert-warning mt-2" role="alert">All Field are required</div>';
    } else {
        // CHecking if email is already registered or not
        $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email = '$rEmail'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $regmsg = '<div class = "alert alert-warning mt-2" role="alert"> Email Address already Registered</div>';
        } else {
            // Inserting the values to the database
            $sql = "INSERT INTO requesterlogin_tb (r_name,r_email,r_password) VALUES ('$rName','$rEmail','$rPass')";
            if ($conn->query($sql) == true) {
                $regmsg = '<div class = "alert alert-success mt-2" role = "alert">Account Created Successfully</div>';
            } else {
                $regmsg = '<div class = "alert alert-warning mt-2" role = "alert">Unable To create Account</div>';
            }
        }
    }
}
?>

<!-- Start Registration Form -->
<div class="container pt-5">
    <h2 class="text-center">Create an account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="#" class="shadow-lg p-5 gap-1" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="rName">
                </div>

                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="rEmail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="rPassword">
                </div>
                <button type="submit" class="btn btn-danger mt-5 w-100 shadow-sm font-weight-bold" name="rSignup">Sign
                    up</button>
                <em class="fs-7">Note - By clicking Sign Up, you agree to our Terms , Data Policy and Cookie
                    Policy</em>
                <?php if (isset($regmsg)) {
                    echo $regmsg;
                } ?>
            </form>
        </div>
    </div>
</div>
<!-- End of registration form  container-->