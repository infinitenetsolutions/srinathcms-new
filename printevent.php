<?php
include './Backend/connection.inc.php';
// getting the all events name
$institute_name=$_GET['ins'];
$get_event = "SELECT * FROM `participants_list` WHERE `college_name`='$institute_name' ";
$event_result = mysqli_query($connection, $get_event);

?>

<?php $event_qury1 = "SELECT * FROM `tbl_sub_events` WHERE 1";
$result1 = mysqli_query($connection, $event_qury1);


$event_qury2 = "SELECT * FROM `tbl_sub_events` WHERE 1";
$result3 = mysqli_query($connection, $event_qury2);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRINATH UNIVERSITY | हिन्दी महोत्सव </title>
    <link rel="icon" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./asset/css/event.css">
    <link rel="icon" href="app-assets/images/logo/favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="app-assets/images/logo/favicon-192x192.png" sizes="192x192">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">



        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header bg-header un-color">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="text-center text-white">हिन्दी महोत्सव</h1>
                            <img class="img-fluid" src="./asset/img/event/hindi.png" alt="">
                        </div>

                    </div>
                </div>
            </section>



            <!-- Main content -->

            <section class="content">

                <div class="container-fluid">

                    <div class="card-header un-color">
                        <h3 class="card-title text-center text-white">5 वाँ श्रीनाथ हिन्दी महोत्सव, जमशेदपुर, झारखण्ड 2021</h3>


                    </div>
                    <!-- SELECT2 EXAMPLE -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card card-default">

                            <br>
                            <div class="card un-color">
                                <h5 class="card-title ml-5  text-white">1. संस्थान का विवरण (Details of Orgnization) </h5>
                            </div>



                            <div class="card-body">

                                <div class="row">

                                    <div class="col-sm-4  mt-3">
                                        <form action="" method="POST">
                                            <label> संस्थान का प्रकार : <br>
                                                type of Orgnization :</label>
                                            <select onchange="change(this.value)" name="type" class="form-control">
                                                <option selected disabled>संस्थान का प्रकार</option>
                                                <option value="school">School</option>
                                                <option value="college">College</option>
                                                <option value="institution">Institution</option>
                                                <option value="university">University</option>
                                            </select>

                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>विद्यालय/महावि़द्यालय/विश्वविद्यालय/संस्थान का नाम : <br>
                                            Name of the School/College/Institution/University :</label>
                                        <input type="text" name="college_name" value="" placeholder="विद्यालय/महावि़द्यालय/संस्थान का नाम" class="form-control">
                                    </div>
                                    <div id="board" style="display: none;" class="col-sm-4  mt-3">

                                        <label>
                                            बोर्ड का नाम चुनें : <br>
                                            Choose the Board:</label>
                                        <select onchange="change_board(this.value)" name="board" class="form-control">
                                            <option selected disabled>बोर्ड का नाम चुनें</option>
                                            <option value="CBSE">CBSE</option>
                                            <option value="ICSE">ICSE</option>
                                            <option value="CISCE">CISCE</option>
                                            <option value="NIOS">NIOS</option>
                                            <option value="IB">IB</option>
                                            <option value="CIE">CIE</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>

                                    <div id="board_name" style="display: none;" class="col-sm-4   mt-3">
                                        <label>बोर्ड का नाम : <br>
                                            Name of the Board :</label>
                                        <input id="form_no" type="text" name="board_name" class="form-control" placeholder="बोर्ड का नाम :">
                                    </div>

                                    <div id="affiliated" style="display: none;" class="col-sm-4   mt-3">
                                        <label>संबद्ध का नाम : <br>
                                            Affiliated with/to :</label>
                                        <input id="form_no" type="text" name="affiliated_name" class="form-control" placeholder="संबद्ध का नाम :">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>विभाग : <br>
                                            Department :</label>
                                        <input type="text" name="department" class="form-control" value="" placeholder="विभाग">
                                    </div>


                                    <div class="col-sm-4  mt-3">
                                        <label>संस्थान का मोबाईल नं. : <br>
                                            Institute Mobile No. :</label>
                                        <input type="text" name="stu_mobile" placeholder="मोबाईल नं." class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>मोबाईल नं. : <br>
                                            Mobile No. :</label>
                                        <input type="text" name="mobile" placeholder="मोबाईल नं." class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>ई&मेल : <br>
                                            E-mail :</label>
                                        <input type="email" name="email" placeholder="ई&मेल" class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>पिन कोड
                                            : <br>
                                            Pin code :</label>
                                        <input required onkeyup="pin(this.value)" type="text" name="pincode" placeholder="पिन कोड" class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>देश : <br>
                                            Country :</label>
                                        <input readonly id="country" type="text" name="country" placeholder="देश" class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>राज्य : <br>
                                            State :</label>
                                        <input readonly id="state" type="text" name="state" placeholder="राज्य " class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>जिला : <br>
                                            District :</label>
                                        <input readonly id="district" type="text" name="district" placeholder="शहर" class="form-control">
                                    </div>

                                    <div class="col-sm-4  mt-3">
                                        <label>शहर : <br>
                                            City :</label>
                                        <input id="city" type="text" name="city" placeholder="शहर" class="form-control">
                                    </div>

                                    <div class="col-sm-4  mt-3">
                                        <label>पता - 1 : <br>
                                            Address - 1 :</label>
                                        <input type="text" name="address1" placeholder="पता - 1" class="form-control">
                                    </div>
                                    <div class="col-sm-4  mt-3">
                                        <label>पता - 2 : <br>
                                            Address - 2 :</label>
                                        <input type="text" name="address2" placeholder="पता - 2 " class="form-control">
                                    </div>

                                </div>

                            </div>

                            <br>


                            <div class="card un-color">
                                <h5 class="card-title ml-5  text-white">2. प्रतिभागियों का विवरण ( Participats Details )</h5>
                            </div>


                            <div class="card-body">




                                <div class="container">


                                    <div class="row">
                                        <?php


                                        $event_qury = "SELECT * FROM `tbl_event` WHERE 1";
                                        $result = mysqli_query($connection, $event_qury);
                                        $date = mysqli_fetch_array($result);
                                        // getting the all activities of the event
                                        $event_qury1 = "SELECT * FROM `tbl_sub_events` WHERE 1";
                                        $result1 = mysqli_query($connection, $event_qury1);

                                        ?>

                                        <div class="col-sm-5  mt-3">
                                            <label>
                                                प्रारंभ दिनांक और समय: <br>
                                                Start Date & Time :</label>
                                            <input disabled id="form_no" value="<?php echo $date['startdoe'] ?>" type="text" name="university" class="form-control" placeholder="विश्वविद्यालय का नाम " required>
                                        </div>
                                        <div class="col-sm-5  mt-3">
                                            <label>समाप्ति दिनांक और समय:
                                                <br>
                                                End Date & Time :</label>
                                            <input type="text" disabled value="<?php echo $date['endoe'] ?>" name="department" class="form-control" value="" placeholder="विभाग">
                                        </div>

                                        <div class="col-4  mt-3">
                                            <label>गतिविधियों का नाम : <br>
                                                Activities Name :</label>
                                            <br>

                                        </div>
                                        <div class="col-2  mt-3">
                                            <label>प्रारंभ समय
                                                : <br>
                                                Started time :</label>
                                            <br>

                                        </div>
                                        <div class="col-2  mt-3">
                                            <label>समाप्त समय

                                                : <br>
                                                Ended time :</label>
                                            <br>

                                        </div>
                                        <div class="col-2  mt-3">
                                            <label>
                                                नियम व शर्तें

                                                : <br>
                                                Term and Conditions :</label>


                                        </div>

                                        <?php while ($row1 = mysqli_fetch_array($result1)) { ?>

                                            <section>



                                                <!-- The Modal -->
                                                <div class="modal" id="myModal<?php echo $row1['id']; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><?php echo $row1['name']; ?></h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <?php echo $row1['t&c']; ?> </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </section>
                                            <div class="col-4  mt-3">
                                                <label class="la" for="">
                                                    <input type="checkbox" name="event_name[]" value="<?php echo $row1['name']; ?>"> <?php echo $row1['name']; ?>
                                                    :</label>
                                            </div>

                                            <div class="col-2  mt-3">
                                                <input type="hidden" name="start[]" value="<?php echo $row1['start_time_doe']; ?>">
                                                <label class="la" for=""><?php echo $row1['start_time_doe']; ?></label>
                                            </div>

                                            <div class="col-2  mt-3">
                                                <input type="hidden" name="end[]" value="<?php echo $row1['end_time_doe']; ?>">
                                                <label class="la" for=""><?php echo $row1['end_time_doe']; ?></label>
                                            </div>
                                            <div class="col-2  mt-3">
                                                <!-- Button to Open the Modal -->
                                                <a type="button" class="text-danger" data-toggle="modal" data-target="#myModal<?php echo $row1['id']; ?>">
                                                    T&C
                                                </a>

                                            </div>
                                            <div class="col-12  mt-3">
                                                <!-- Button to Open the Modal -->
                                                <table class="table table-bordered table-responsive" id="dynamic_field<?php echo $row1['id'] ?>" style="overflow-y:auto;">
                                                    <thead>

                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td><button type="button" name="add" id="add<?php echo $row1['id'] ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">+</i></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <?php echo $msg; ?>
                        <div class="col-md-12 mt-5 ">
                            
                        </div>

                        <div class=" text-center">


                            <button type="submit" name="submit" class="btn btn-success">&nbsp; &nbsp; Print &nbsp; &nbsp;</button>

                        </div>
                    </form>
            </section>

            <!-- /.content -->
        </div>
     


    </div>
    <div class="bg-dark p-1 mt-5">
        <footer class="text-center mt-3 text-white ">
            <?php include './srinath/include/footer.php'; ?>
        </footer>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./asset/js/event.js"></script>


</html>