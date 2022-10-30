<?php
define('TITLE', 'Submit Request');
define('PAGE', 'submitRequest');
include('../assets/includes/header.php');
include('../db_connection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    header('Location: /bcaivproject/requester/requesterlogin.php');
}

if (isset($_REQUEST['submitrequest'])) {
    // Checking for empty fields
    if ($_REQUEST['requesterinfo'] == '' || $_REQUEST['requesterdescription'] == '' || $_REQUEST['requestername'] == '' || $_REQUEST['requesteraddress1'] == '' || $_REQUEST['requesteraddress2'] == '' || $_REQUEST['requestercity'] == '' || $_REQUEST['requesterstate'] == '' || $_REQUEST['requesterzip'] == '' || $_REQUEST['requesteremail'] == '' || $_REQUEST['requestermobile'] == '' || $_REQUEST['requesterdate'] == '') {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $rinfo = $_REQUEST['requesterinfo'];
        $rdesc = $_REQUEST['requesterdescription'];
        $rname = $_REQUEST['requestername'];
        $radd1 = $_REQUEST['requesteraddress1'];
        $radd2 = $_REQUEST['requesteraddress2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail = $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $rdate = $_REQUEST['requesterdate'];
        $sql = "INSERT INTO submitrequest_tb (request_info,request_desc,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,request_date)VALUES 
        ('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
        if ($conn->query($sql) == true) {
            $genid = mysqli_insert_id($conn);
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Request submitted Successfully</div>';
            $_SESSION['myid'] = $genid;
            header('Location: /bcaivproject/requester/submitrequestsuccess.php');
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to submit your request</div>';
        }
    }
}
?>
<!-- Start Service request -->
<div class="col-sm-9 col-md-10 mt-5">
    <form class="mx-5 p-2" action="#" method="POST">
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" name="requesterinfo"
                placeholder="Request info">
        </div>

        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" name="requesterdescription"
                placeholder="Request description">
        </div>

        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="requestername" placeholder="Itachi Uchiha">
        </div>
        <div class="form-group row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddress" name="requesteraddress1"
                    placeholder="House No.123">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="requesteraddress2"
                    placeholder="Kalimati">
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="requestercity" placeholder="Kathmandu">
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" name="requesterstate">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="requesterzip"
                    onkeypress="isInputNumber(event)">
            </div>

        </div>
        <div class="form-group row">
            <div class="form-group col-md-6">
                <label for="inputemail">Email</label>
                <input type="email" class="form-control" id="inputemail" name="requesteremail">
            </div>

            <div class="form-group col-md-4">
                <label for="inputmobile">Mobile</label>
                <input type="text" class="form-control" id="inputmobile" name="requestermobile"
                    onkeypress="isInputNumber(event)">
            </div>

            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requesterdate">
            </div>
        </div>
        <button type="submit" class="btn btn-danger mt-3" name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary mt-3">Reset</button>
    </form>
    <?php if (isset($msg)) {
        echo $msg;
    }
    ?>
</div>
<!-- End Service request -->


<!-- Only NUmber for input fields -->

<script>
function isInputNumber(input) {
    let char = String.fromCharCode(input.which);
    if (!(/[0-9]/.test(char))) {
        input.preventDefault();
    }
}
</script>
<?php
include('../assets/includes/footer.php');
?>