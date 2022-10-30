<?php
define('TITLE', 'Requester profile');
define('PAGE', 'requesterprofile');
include('../assets/includes/header.php');
include('../db_connection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    header('Location: /bcaivproject/requester/requesterlogin.php');
}
$sql = "SELECT r_name,r_email FROM requesterlogin_tb WHERE r_email = '$rEmail' ";
$result  = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
}

// Updating the user name
if (isset($_REQUEST['nameupdate'])) {
    if ($_REQUEST['rName'] == '') {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">User name cannot be empty</div>';
    } else {
        $rName =  $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
        if ($conn->query($sql) == true) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully </div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update </div>';
        }
    }
}
?> <div class="col-sm-6 mt-5">
    <form class="mx-5" action="" method="POST">
        <div class="form-group">
            <label for="rEmail">Email</label>
            <input type="email" class="form-control" name="rEmail" id="rEmail"
                value="<?php echo $_SESSION['rEmail']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="rName">Name</label>
            <input type="text" class="form-control" name="rName" id="rName" value="<?php echo $rName; ?>">
        </div>
        <button type="submit" class="btn btn-danger mt-3" name="nameupdate">Update</button>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </form>
</div>
<!-- End Profile area second column -->
<?php
include('../assets/includes/footer.php');
?>