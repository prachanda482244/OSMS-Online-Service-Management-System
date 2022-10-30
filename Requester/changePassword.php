<?php
define('TITLE', 'Change password');
define('PAGE', 'changePassword');
include('../assets/includes/header.php');
include('../db_connection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    header('Location: /bcaivproject/requester/requesterlogin.php');
}
$rEmail = $_SESSION['rEmail'];
if (isset($r_oldPass)) {
    $sql = "SELECT r_password FROM requesterlogin_tb WHERE r_email = '$rEmail'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        echo "tommorow";
    }
    if (isset($_REQUEST['passupdate'])) {
        $r_pass = $_REQUEST['rPassword'];
        if ($_REQUEST['rPassword'] == '') {
            $passMsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2 ">Fill All Fields</div>';
        } else {
            $sql = "UPDATE  requesterlogin_tb SET r_password ='$r_pass' WHERE r_email ='$rEmail' ";
            if ($conn->query($sql) == true) {
                $passMsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2 ">Password Updated Successfully</div>';
            } else {
                $passMsg = '<div class="alert alert-danger success col-sm-6 ml-5 mt-2 ">Unable to update</div>';
            }
        }
    }
}
?>
<!-- Start user change password form -->
<div class="col-sm-9 col-md-10 ">
    <form action="" method="POST" class="mt-5 mx-4">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail; ?>" readonly>
            <!-- <label for="inpuOldPassword">Old password</label>
            <input type="password" class="form-control" id="inputOldPassword" name="rOldPassword"
                placeholder="Enter Old Password"> -->
            <label for="inputNewPassword">New password</label>
            <input type="password" class="form-control" id="inputNewPassword" placeholder="Enter New Password"
                name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if (isset($passMsg)) {
            echo $passMsg;
        };
        ?>
    </form>


    <!-- End user change password form -->

</div>
<?php
include('../assets/includes/footer.php');
?>