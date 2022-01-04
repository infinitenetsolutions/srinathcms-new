<?php
$page_no = "15";
$page_no_inside = "15_1";
$year = date('Y');
$start = '';
$end = '';
include "../../include/authentication.php";

include '../../include/config.php';
if (isset($_SESSION['admin_email'])) {
    $status = $_GET['status'];
    $id = $_GET['id'];
    $admin_email = $_SESSION['admin_email'];
    $admin_name = $_SESSION['admin_name'];
    $date = date('Y-m-d');

    $get_all_data = "SELECT * FROM `rebate` WHERE `id`='$id'";
    $result_all_data = mysqli_query($con, $get_all_data);
    $data_all_student = mysqli_fetch_array($result_all_data);
    $amount = $data_all_student['rebate_amount'];
    $approve_amount    = $data_all_student['approve_amount'];
    $rebate_by_name = $data_all_student['rebate_by_name'];
    $rebate_by_email = $data_all_student['rebate_by_email'];
    $student_email = $data_all_student['student_email'];
    $student_name = $data_all_student['student_name'];
    $department = $data_all_student['department'];
    $particular = $data_all_student['particular'];
    $massage = $data_all_student['massage'];
    $attach = $data_all_student['attach'];

    if (isset($_POST['yes'])) {
        $amount = $_POST['amount'];
        $status = $_POST['status'];
$msg=$_POST['msg'];
        echo $sql = "UPDATE  `rebate` SET `approve_amount`='$amount',`rebate_by_name`='$admin_name',`rebate_by_email`='$admin_email', `approve_date`='$date',`massage`='$msg',`status`='$status' WHERE `id`='$id' ";
        $sql_update = mysqli_query($con, $sql);
        if ($sql_update) {
            echo "<script>
        window.location.replace('../../rebate.php')
    </script>";
        }
    }

?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SRINATH UNIVERSITY | Event </title>
        <!-- Fav Icon -->
        <link rel="icon" href="images/logo.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <?php
    if ($status == "success") {
    ?>
        <div class="card-body">
            <form action="" method="POST">
                <div class="container">
                    <div class="row">
                        <h3>Do You Want to Edit Amount</h3>
                        <br>
                        <br>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-7">
                                    <label for="year">Amount</label>
                                    <input type="hidden" name="status" value="1">
                                    <input name="amount" value="<?php echo $amount ?>" placeholder="Enter Amount" type="input" class="form-control">
                                </div>
                                <div class="col-sm-7 mt-5 mb-3">
                                    <label for="year"> Massage</label>
                                    <textarea cols="10" rows="10" name="msg" class="form-control">
                                    <?php echo $massage .  ' ------------------------------- ' . $admin_name . ' Write Massage-------------------------' ?>
                                </textarea>
                                </div>
                                <div class="col-sm-7 p-1">
                                    <button name="yes" type="submit" class="btn btn-success btn-sm ">Yes</button>
                                    <button name="yes" type="submit" class="btn btn-warning btn-sm ">no</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>

        </div>
    <?php
    } elseif ($status == "reject") {

    ?>
        <div class="card-body">
            <form action="" method="POST">
                <div class="container">
                    <div class="row">
                        <h3>Why Reject the Amount</h3>
                        <br>
                        <br>
                        <div class="col-sm-8">
                            <div class="row">

                                <div class="col-sm-7 mt-5 mb-3">
                                    <input type="hidden" name="status" value="2">

                                    <label for="year"> Massage</label>
                                    <textarea name="msg" cols="10" rows="10" name="msg" class="form-control">
                                    <?php echo $massage .  ' ------------------------------- ' . $admin_name . ' Write Massage-------------------------' ?>
                                </textarea>
                                </div>
                                <div class="col-sm-7 p-1">
                                    <button name="yes" type="submit" class="btn btn-danger btn-sm ">Reject</button>
                                    <button name="yes" type="submit" class="btn btn-warning btn-sm ">no</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>

        </div>

<?php
    }else if($status=="pending"){
        echo $sql = "UPDATE  `rebate` SET `approve_amount`=' ',`rebate_by_name`='$admin_name',`rebate_by_email`='$admin_email', `approve_date`='$date',`status`='0' WHERE `id`='$id' ";
        $sql_update = mysqli_query($con, $sql);
        if ($sql_update) {
            echo "<script>
        window.location.replace('../../rebate.php')
    </script>";
        } 
    }
}
?>