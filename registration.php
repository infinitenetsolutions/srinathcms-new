<script>
    function change_course(course_type) {
        console.log(course_type);


        document.getElementById("course_name").disable = false;

    }
</script>

<!-- here to start getting the data from the database  -->
<?php
include './Backend/connection.inc.php';
include './Backend/function.inc.php';
if (isset($_SESSION['email']) && ($_SESSION['email'] != '')) {
    // data retring from tbl_course_type table
    $course_type = "SELECT  *  FROM `tbl_course_type` WHERE 1";
    $coursr_result = mysqli_query($connection, $course_type);
    //data retring from course_name table
    $course_name = "SELECT * FROM `tbl_course` WHERE 1";
    $course_name_result = mysqli_query($connection, $course_name);


?>


    <html lang="en" data-textdirection="ltr">

    <head>


        <link rel="icon" href="app-assets/images/logo/favicon-32x32.png" sizes="32x32">
        <link rel="icon" href="app-assets/images/logo/favicon-192x192.png" sizes="192x192">
        <link rel="apple-touch-icon" href="app-assets/images/logo/favicon-apple.png">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/dropify/css/dropify.min.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN THEME  CSS-->
        <!-- END THEME  CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/materialize.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-gradient-menu-template/style.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
        <!-- END Custom CSS-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns menu-expanded fixed-navbar registration_form" data-open="click" data-menu="vertical-modern-menu" data-color="" data-col="2-columns">
        <!--
    //////////////////////////////////////////////////////////////////////////// -->
        <!-- START HEADER -->
        <header class="page-topbar" id="header">

            <nav class="whitenav">
                <div class="nav-wrapper">
                    <img class="ajulogo" src="./asset/img/logo.png" alt="AJU Logo">
                    <ul class="right">
                        <li><a class="dropdown-trigger whitenav" href="#!" data-target="dropdown1"><?php echo $_SESSION['name']; ?><i class="material-icons right">arrow_drop_down</i></a>
                            <div id="dropdown1" class="dropdown-content" tabindex="0">
                                <a href="./Backend/logout.php" class="whitenav" tabindex="0">Log Out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--
            <div class="row">
                <div class="col s6 m6 l6 margin-left"><img src="app-assets/images/logo/logo.jpg" /></div>
            </div>
        -->
        </header>
        <!-- END HEADER -->
        <!-- START MAIN -->
        <div>
            <!-- START WRAPPER -->
            <div class="row container">
                <section class="content-wrapper-before">
                    <!--start container-->
                    <div class="col s12">
                        <div class="row">
                            <div class="col s12">
                                <form id="registration_submit" action="" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-header">
                                                <h3 class="card-title">Program Details</h3>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col l4 m4 s12">
                                                    <p>Academic <span class="color-red"> * </span></p>
                                                    <div class="select-wrapper">
                                                        <select name="academic" onchange="change_course(this.value)" id="academic" tabindex="-1">

                                                            <option value="" disabled="" selected="">Choose your option</option>
                                                            <?php
                                                            // here i have to fetch the data fo course and showing the data
                                                            while ($rwo = mysqli_fetch_array($coursr_result)) { ?>

                                                                <option id="apply_for" value="<?php echo $rwo['name']; ?>"><?php echo $rwo['name']; ?></option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>

                                                    <div class="error" id="academic1_err"></div>
                                                </div>
                                                <div class="input-field col l4 m4 s12" id="course_box">
                                                    <p>Course <span class="color-red"> * </span></p>
                                                    <div class="ug_class ">
                                                        <div class="select-wrapper">
                                                            <select name="course" id="course_name">
                                                                <option value="" disabled="" selected="">Choose your option</option>
                                                                <?php while ($row = mysqli_fetch_array($course_name_result)) {
                                                                ?>
                                                                    <option value="<?php echo $row['course_name']; ?>"><?php echo $row['course_name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="input-field col s6 m6 l4">
                                                    <p for="transportation_opted">Session<span class="color-red"> * </span></p>
                                                    <div class="select-wrapper">
                                                        <?php
                                                        //    gettiting the starting date for input the session in 
                                                        $startdate = date("Y");
                                                        ?>
                                                        </svg><select id="transportation" name="session" tabindex="-1">
                                                            <option value=" " disabled="" selected="">-Select-</option>
                                                            <option value="<?php echo date('Y');
                                                                            echo " - ";
                                                                            echo date('Y', strtotime('+3 year')); ?>"><?php echo date('Y');
                                                                                                                        echo " - ";
                                                                                                                        echo date('Y', strtotime('+3 year')); ?></option>
                                                            <option value="<?php echo date('Y');
                                                                            echo " - ";
                                                                            echo date('Y', strtotime('+4 year')); ?>"><?php echo date('Y');
                                                                                                                        echo " - ";
                                                                                                                        echo date('Y', strtotime('+4 year')); ?></option>
                                                        </select>
                                                    </div>
                                                    <div class="error" id="transportation_err"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-header">
                                                <h3 class="card-title">Personal Details</h3>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6 m6 l4">
                                                    <h6>Your Name <span class="color-red"> * </span></h6>
                                                    <input required type="text" placeholder="Your Name" name="name" id="username" class="" value="<?php echo $_SESSION['name']; ?>">

                                                </div>

                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="mobile_no">Mobile Number <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Mobile Number" id="mobile" name="mobile" type="tel" class="validate" value="<?php echo  $_SESSION['phone']; ?>">

                                                </div>

                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="email">Email <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Email" name="email" id="email" type="email" class="validate" value="<?php echo $_SESSION['email']; ?> ">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="father_nameid">Father's Name <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Father's Name" id="father_name" name="father_name" type="text" class="validate" value="">

                                                </div>


                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="transportation_opted">Mother's Name <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Mothers's Name" id="mother_name" name="mother_name" type="text" class="validate" value="">

                                                </div>

                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="transportation_opted">Refered BY (Optional)</h6>
                                                    <input placeholder="Enter name of Refered BY" id="mother_name" name="referby" type="text" class="validate" value="">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m6 l4">
                                                    <h6 for="first_name">Gender <span class="color-red"> * </span></h6>
                                                    <div class="select-wrapper">
                                                        <svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 10l5 5 5-5z"></path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg><select id="gender" name="gender" tabindex="-1">
                                                            <option value="" disabled="" selected="">-Select-</option>
                                                            <option id="gender" value="Male">Male</option>
                                                            <option id="gender" value="Female">Female</option>
                                                            <option id="gender" value="Transgender">Transgender</option>
                                                        </select>
                                                    </div>
                                                    <div class="error" id="gender_err"></div>
                                                </div>

                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="dob">Date Of Birth <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Date Of Birth" id="dob" name="dob" type="text" class="datepicker" value="">
                                                    <div class="error" id="dob_err"></div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-header">
                                                <h3 class="card-title">Address Details</h3>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="address1">Permanent Address <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Address 1" id="address_1" name="address1" type="text" class="validate" value="">
                                                    <div class="error" id="address_1_err"></div>
                                                </div>

                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="address2">Correspondence Address </h6>
                                                    <input required placeholder="Address 2" id="address_2" name="address2" type="text" class="validate" value="">
                                                </div>
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="country">Country <span class="color-red"> * </span></h6>
                                                    <div class="select-wrapper">

                                                        <select id="country" name="country" tabindex="-1">
                                                            <option value="" disabled="" selected="">-Select-</option>
                                                            <option id="country" value="India">India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="state1">State/Province <span class="color-red"> * </span></h6>
                                                    <div class="select-wrapper">
                                                        <select id="state" name="state" tabindex="-1">
                                                            <option id="state1" value="" disabled="" selected="">-Select-</option>
                                                            <option id="state1" value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option id="state1" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option id="state1" value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option id="state1" value="Assam">Assam</option>
                                                            <option id="state1" value="Bihar">Bihar</option>
                                                            <option id="state1" value="Chandigarh">Chandigarh</option>
                                                            <option id="state1" value="Chhattisgarh">Chhattisgarh</option>
                                                            <option id="state1" value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                            <option id="state1" value="Daman and Diu">Daman and Diu</option>
                                                            <option id="state1" value="Delhi">Delhi</option>
                                                            <option id="state1" value="Lakshadweep">Lakshadweep</option>
                                                            <option id="state1" value="Puducherry">Puducherry</option>
                                                            <option id="state1" value="Goa">Goa</option>
                                                            <option id="state1" value="Gujarat">Gujarat</option>
                                                            <option id="state1" value="Haryana">Haryana</option>
                                                            <option id="state1" value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option id="state1" value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option id="state1" value="Jharkhand">Jharkhand</option>
                                                            <option id="state1" value="Karnataka">Karnataka</option>
                                                            <option id="state1" value="Kerala">Kerala</option>
                                                            <option id="state1" value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option id="state1" value="Maharashtra">Maharashtra</option>
                                                            <option id="state1" value="Manipur">Manipur</option>
                                                            <option id="state1" value="Meghalaya">Meghalaya</option>
                                                            <option id="state1" value="Mizoram">Mizoram</option>
                                                            <option id="state1" value="Nagaland">Nagaland</option>
                                                            <option id="state1" value="Odisha">Odisha</option>
                                                            <option id="state1" value="Punjab">Punjab</option>
                                                            <option id="state1" value="Rajasthan">Rajasthan</option>
                                                            <option id="state1" value="Sikkim">Sikkim</option>
                                                            <option id="state1" value="Tamil Nadu">Tamil Nadu</option>
                                                            <option id="state1" value="Telangana">Telangana</option>
                                                            <option id="state1" value="Tripura">Tripura</option>
                                                            <option id="state1" value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option id="state1" value="Uttarakhand">Uttarakhand</option>
                                                            <option id="state1" value="West Bengal">West Bengal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="district">District <span class="color-red"> * </span></h6>
                                                    <input required placeholder="District" id="district" name="district" type="text" class="validate" value="">
                                                    <div class="error" id="district_err"></div>
                                                </div>
                                                <div class="input-field col s6 m6 l4">
                                                    <h6 for="postal">Postal code <span class="color-red"> * </span></h6>
                                                    <input required placeholder="Postal Code" type="text" id="postal_code" name="postal_code" class="validate" value="">
                                                    <div class="error" id="postal_code_err"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-header">
                                                <h3 class="card-title">Declaration</h3>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s6 m6 l12">
                                                    <p>
                                                        <label>
                                                            <input required type="checkbox" id="declare_1" name="declare_1" value="1">
                                                            <span>I declare that I meet all the eligibility criteria of admission as per the university guideline. In case of failure to do so or , in case of non-submission of required document by scheduled date given by university , my admission shall stand cancelled &amp; fees paid will be forfeited</span>
                                                        </label>
                                                    </p>
                                                    <div class="error" id="declare_1_err"></div>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6 m6 l12">
                                                    <p>
                                                        <label>
                                                            <input required type="checkbox" id="declare_2" name="declare_2" value="1">
                                                            <span>I declare that the information given above is true and to the best of my knowledge and belief ; and if any of its found to be incorrect at any time during the program , my admission shall stand cancelled and I shall be liable to such disciplinary action as may be decided by the university</span>
                                                        </label>
                                                    </p>
                                                    <div class="error" id="declare_2_err"></div>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input required type="hidden" name="course_hide" id="course_hide" value="">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light" type="submit" name="submit">
                                                Save &amp; Next
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="center-align red-text">For any query feel free to contact @ 7283000220</div>
                <br>
                <!-- END CONTENT -->
                <!--
              //////////////////////////////////////////////////////////////////////////// -->
            </div>
            <!-- END WRAPPER -->
        </div>
        <!-- END MAIN -->
        <!--
      //////////////////////////////////////////////////////////////////////////// -->
        <!-- START FOOTER -->
        <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow"></footer>
        <!-- END FOOTER -->
        <!-- ================================================
      Scripts
      ================================================ -->
        <!-- END: Footer-->
        <!-- BEGIN VENDOR JS-->
        <script src="app-assets/js/vendors.min.js"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="app-assets/vendors/dropify/js/dropify.min.js"></script>
        <script src="app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN THEME  JS-->
        <script src="app-assets/js/plugins.js"></script>
        <script src="app-assets/js/search.js"></script>
        <script src="app-assets/js/custom/custom-script.js"></script>
        <!-- END THEME  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="app-assets/js/scripts/form-file-uploads.js"></script>
        <script src="app-assets/js/scripts/form-validation.js"></script>


        <div class="modal datepicker-modal" id="modal-fb7341e7-fdf4-92b2-dd44-d1ef2eb353c9" tabindex="0">
            <div class="modal-content datepicker-container">
                <div class="datepicker-date-display"><span class="year-text"></span><span class="date-text"></span></div>
                <div class="datepicker-calendar-container">
                    <div class="datepicker-calendar"></div>
                    <div class="datepicker-footer"><button class="btn-flat datepicker-clear waves-effect" style="visibility: hidden;" type="button"></button>
                        <div class="confirmation-btns"><button class="btn-flat datepicker-cancel waves-effect" type="button">Cancel</button><button class="btn-flat datepicker-done waves-effect" type="button">Ok</button></div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
    // here to inserting the data into the database
    if (isset($_POST['submit'])) {

        //     // course Details
        $prospectus_session = $_POST['session'];
        $prospectus_course_name = $_POST['course'];

        //     // persnal details

        $prospectus_applicant_name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $prospectus_emailid = $_POST['email'];
        $prospectus_gender = $_POST['gender'];
        $prospectus_dob = $_POST['dob'];
        $prospectus_father_name = $_POST['father_name'];
        $prospectus_mother_name = $_POST['mather_name'];
        $revert_by = $_POST['referby'];

        // address details
        $address1 = $_POST['address1'];
        $address1 = $_POST['address2'];
        // address1 and address2 has converting into the json form and send to the database
        $address = array("permanet" => $address1, "crosspodens" => $address2);

        $prospectus_address = json_encode($address);
        $prospectus_country = $_POST['country'];
        $prospectus_state = $_POST['state'];
        $prospectus_city = $_POST['city'];
        $prospectus_postal_code = $_POST['postal_code'];

        // //for updating in final page
        //     $payment_status=
        //     $prospectus_rate=
        //     $prospectus_payment_mode=
        //     $prospectus_deposit_to=
        //     $bank_name=
        //     $transaction_no=
        //     $transaction_date=
        //     $post_at=
        //     $type=
        //     $easebuzz_id=
        //     $transaction_id=
        //     $status=



        $tbl_prospectus_query = "INSERT INTO `tbl_prospectus`(`prospectus_no`, `prospectus_applicant_name`, `prospectus_gender`, `prospectus_father_name`, `prospectus_mother_name`, `prospectus_address`, `prospectus_country`, `prospectus_state`, `prospectus_city`, `prospectus_postal_code`, `prospectus_dob`, `prospectus_emailid`, `mobile`, `revert_by`, `prospectus_course_name`, `prospectus_session`, `payment_status`, `prospectus_rate`, `prospectus_payment_mode`, `prospectus_deposit_to`, `bank_name`, `transaction_no`, `transaction_date`, `post_at`, `type`, `easebuzz_id`, `transaction_id`, `status`) VALUES ('NULL','$prospectus_applicant_name','$prospectus_gender','$prospectus_father_name','$prospectus_mother_name','$prospectus_address','$prospectus_country','$prospectus_state','$prospectus_city','$prospectus_postal_code','$prospectus_dob','$prospectus_emailid','$mobile','$revert_by','$prospectus_course_name','$prospectus_session','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL')";
        $tbl_prospectus_insert = mysqli_query($connection, $tbl_prospectus_query);
        if ($tbl_prospectus_insert) {
            // update the user login table
            $update_login = "UPDATE `snu_login` SET `name`='$prospectus_applicant_name',`phone`='$mobile',`email`='$prospectus_emailid' WHERE `email`='$prospectus_emailid'";
            $update_login_result = mysqli_query($connection, $update_login);
            if ($update_login_result) {
                echo "<script>
       window.location.replace('conformation.php');
       </script>";
            }
        } else {
            echo "<script> alert('Data already Exits');</script>";
        }
    }
} else {
    echo "<script>

    window.location.replace('./index.php');
</script>";
}
?>