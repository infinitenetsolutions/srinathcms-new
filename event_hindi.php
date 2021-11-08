<?php
include './Backend/connection.inc.php';
// getting the all events name

// echo "<pre>";
// print_r($_SESSION['post']);
$i = 0;
$msg = '';
if (isset($_POST['submit'])) {
  $_SESSION['post'] = $_POST;
  $_POST['student'] = $i;
  // event info
  $event_id = $_POST['event'];
  $event_name = $_POST['event_name'];
  $event_name = json_encode($event_name);
  // college info
  $type = $_POST['type'];
  $board_name = $_POST['board'] . " " . $_POST['board_name'];
  $affiliated_name = $_POST['affiliated_name'];
  $college_name = $_POST['college_name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $district = $_POST['district'];
  $pincode = $_POST['pincode'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];

  // student info
  $s_department = $_POST['department'];
  $s_student_name = $_POST['student_name'];
  $s_f_name = $_POST['f_name'];
  $s_dob = $_POST['dob'];
  $s_gender = $_POST['gender'];
  $s_student_mobile = $_POST['student_mobile'];
  $s_student_email = $_POST['student_email'];

  // getting the events total number of  limit for a events

  $event_limit = "SELECT * FROM `tbl_event` WHERE `id`='$event_id' ";
  $e_result = mysqli_query($connection, $event_limit);
  $total_event_limit = mysqli_fetch_array($e_result)['no_of_participants'];
  // getting the all events
  $participants_limit = "SELECT * FROM `participants_list` WHERE `event_id`='$event_id' ";
  $participants_result = mysqli_query($connection, $participants_limit);
  $total_participants_limit = mysqli_num_rows($participants_result);

  if ($total_event_limit >= $total_participants_limit) {
    $insert_query = "INSERT INTO `participants_list`( `s_name`, `s_department`, `s_f_name`, `s_dob`, `s_gender`, `s_mobile`, `s_email`, `type`, `board_name`, `affiliated_name`, `college_name`, `mobile`, `email`, `state`, `district`, `city`, `pincode`, `address1`, `address2`, `event_name`,`event_id`) VALUES
                                             ('$s_student_name','$s_department','$s_f_name','$s_dob','$s_gender','$s_student_mobile','$s_student_email','$type','$board_name','$affiliated_name','$college_name','$mobile','$email','$state','$district','$city','$pincode','$address1','$address2','$event_name','$event_id')";

    $insert_resutl = mysqli_query($connection, $insert_query);
    if ($insert_resutl) {
      echo '<script> alert("Success Do you want to Add more Data")
        window.location.replace("event_hindi.php")
       </script>';
    } else {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Alert!</strong> Data Already Exits Please Check Your Input Data
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  } else {
    echo '<script> alert("Events has been full")
    window.location.replace("event_hindi.php")
   </script>';
  }
}
$event_qury = "SELECT * FROM `tbl_event` WHERE 1";
$result = mysqli_query($connection, $event_qury);

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
          <form action="" method="POST">
            <div class="card card-default">

              <br>
              <div class="card un-color">
                <h5 class="card-title ml-5  text-white">University Details </h5>
              </div>



              <div class="card-body">

                <div class="row">

                  <div class="col-sm-4  mt-3">
                    <form action="" method="POST">
                      <label>विद्यालय/महावि़द्यालय/संस्थान का नाम : <br>
                        School/College/Institution :</label>
                      <select id="type" onchange="change(this.value)" name="type" class="form-control">
                        <?php if ($_SESSION['post']['type']) { ?>
                          <option value="<?php echo $_SESSION['post']['type']; ?>"><?php echo $_SESSION['post']['type']; ?></option>
                        <?php } ?>

                        <option disabled>विद्यालय/महावि़द्यालय/संस्थान का नाम </option>
                        <option value="school">School</option>
                        <option value="college">College</option>
                        <option value="institution">Institution</option>
                        <option value="university">University</option>
                      </select>

                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>विद्यालय/महावि़द्यालय/विश्वविद्यालय/संस्थान का नाम : <br>
                      Name of the School/College/Institution/University :</label>
                    <input type="text" name="college_name" value="<?php echo $_SESSION['post']['college_name']; ?>" placeholder="विद्यालय/महावि़द्यालय/संस्थान का नाम" class="form-control">
                  </div>
                  <div id="board" style="display: none;" class="col-sm-4  mt-3">

                    <label>
                      बोर्ड का नाम चुनें : <br>
                      Choose the Board:</label>
                    <select onchange="change_board(this.value)" id="board" name="board" class="form-control">
                      <?php if ($_SESSION['post']['board']) { ?>
                        <option selected value="CBSE"><?php echo $_SESSION['post']['board_name']; ?></option>
                      <?php } else { ?>
                        <option disabled>बोर्ड का नाम चुनें</option>
                        <option value="CBSE">CBSE</option>
                        <option value="ICSE">ICSE</option>
                        <option value="CISCE">CISCE</option>
                        <option value="NIOS">NIOS</option>
                        <option value="IB">IB</option>
                        <option value="CIE">CIE</option>
                        <option value="others">Others</option>
                      <?php } ?>
                    </select>
                  </div>

                  <div id="board_name" style="display: none;" class="col-sm-4   mt-3">
                    <label>बोर्ड का नाम : <br>
                      Name of the Board :</label>
                    <input id="form_no" value="<?php echo $_SESSION['post']['board_name']; ?>" type="text" name="board_name" class="form-control" placeholder="बोर्ड का नाम :">
                  </div>

                  <div id="affiliated" style="display: none;" class="col-sm-4   mt-3">
                    <label>संबद्ध का नाम : <br>
                      Affiliated with/to :</label>
                    <input id="form_no" value="<?php echo $_SESSION['post']['affiliated_name']; ?>" type="text" name="affiliated_name" class="form-control" placeholder="संबद्ध का नाम :">
                  </div>

                  <div class="col-sm-4  mt-3">
                    <label>विभाग : <br>
                      Department :</label>
                    <input type="text" name="department" value="<?php echo $_SESSION['post']['department']; ?>" class="form-control" value="" placeholder="विभाग">
                  </div>

                  <div class="col-sm-4  mt-3">
                    <label>मोबाईल नं. : <br>
                      Mobile No. :</label>
                    <input type="text" value="<?php echo $_SESSION['post']['mobile']; ?>" name="mobile" placeholder="मोबाईल नं." class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>ई&मेल : <br>
                      E-mail :</label>
                    <input type="text" value="<?php echo $_SESSION['post']['email']; ?>" name="email" placeholder="ई&मेल" class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>पिन कोड
                      : <br>
                      Pin code :</label>
                    <input required onkeyup="pin(this.value)" type="text" value="<?php echo $_SESSION['post']['pincode']; ?>" name="pincode" placeholder="पिन कोड" class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>राज्य : <br>
                      State :</label>
                    <input readonly id="state" value="<?php echo $_SESSION['post']['state']; ?>" type="text" name="state" placeholder="राज्य " class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>जिला : <br>
                      District :</label>
                    <input readonly id="district" value="<?php echo $_SESSION['post']['district']; ?>" type="text" name="district" placeholder="शहर" class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>शहर : <br>
                      City :</label>
                    <input id="city" value="<?php echo $_SESSION['post']['city']; ?>" type="text" name="city" placeholder="शहर" class="form-control">
                  </div>

                  <div class="col-sm-4  mt-3">
                    <label>पता - 1 : <br>
                      Address - 1 :</label>
                    <input value="<?php echo $_SESSION['post']['address1']; ?>" type="text" name="address1" placeholder="पता - 1" class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>पता - 2 : <br>
                      Address - 2 :</label>
                    <input value="<?php echo $_SESSION['post']['address2']; ?>" type="text" name="address2" placeholder="पता - 2 " class="form-control">
                  </div>

                </div>

              </div>

              <br>

              <div class="card un-color">
                <h5 class="card-title ml-5  text-white">हिन्दी महोत्सव</h5>
              </div>


              <div class="card-body">

                <div class="col-md-12" id="error_section"></div>
                <div class="col-sm-4  mt-3">

                  <label>आयोजन का नाम : <br>
                    Name of Events :</label>
                  <select id="event" required onchange="change_event(this.value)" name="event" class="form-control">
                    <option selected disabled>आयोजन का नाम </option>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="container">
                  <div class="row" id="all_data">
                  </div>
                </div>
              </div>
              <br>
              <div class="card un-color">
                <h5 class="card-title ml-5  text-white">Participant’s Details</h5>
              </div>


              <div class="card-body">
                <div class="row">
                  <div class="col-md-12" id="error_section"></div>




                  <div class="col-sm-4  mt-3">
                    <label>प्रतिभागी का नाम : <br>
                      Participant’s Name :</label>

                    <input type="text" name="student_name" class="form-control" required>
                  </div>



                  <div class="col-sm-4  mt-3">
                    <label>पिता का नाम : <br>
                      Father’s Name :</label>
                    <input id="course" name="f_name" placeholder="पिता का नाम" class="form-control" required />


                  </div>
                  <div class="col-sm-2  mt-3">
                    <label>जन्म तिथि : <br>
                      Date of Birth :</label>
                    <input id="dob" type="date" name="dob" placeholder="जन्म तिथि" class="form-control" required>
                  </div>

                  <div class="col-sm-2  mt-3">
                    <label>लिंग : <br>
                      gender :</label>
                    <select id="gender" name="gender" class="form-control">
                      <option value="0">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>मोबाईल नं. : <br>
                      Mobile No. :</label>
                    <input type="text" name="student_mobile" placeholder="मोबाईल नं." class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>ई&मेल : <br>
                      E-mail :</label>
                    <input type="text" name="student_email" placeholder="ई&मेल" class="form-control">
                  </div>
                </div>
              </div>



            </div>

            <?php echo $msg; ?>
            <div class="col-md-12 mt-5 ">
              <label for="">
                <input type="checkbox" name="" id="" required> &nbsp; सामान्य नीति नियम एवं विशिष्ट निर्देश <a href="" class="text-un" data-toggle="modal" data-target="#exampleModal">Term & Conditions</a>
              </label>
            </div>
            <br>
            <div class=" text-center">


              <button type="submit" name="submit" class="btn btn-success  btn-xl ">Submit</button>

            </div>
          </form>
      </section>

      <!-- /.content -->
    </div>
    <section class="card mt-5 un-color">
      <img src="./asset/img/event/hindi1.png" class="img-fluid" alt="">
      <br>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> सामान्य नीति नियम एवं विशिष्ट निर्देश </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="ml-2">

                • प्रतिभागियों एवं प्रतिनिधियों का प्रवेश तथा पंजीयन निशुल्क होगा | <br>
                • प्रत्येक विद्यालय तथा विश्वविद्यालय प्रतिभागियों एवं प्रतिनिधियों की सूची पास्पोर्ट आकार के फ़ोटो के साथ १० दिसम्बर २०२१ दिन शुक्रवार तक ई मेल info@srinathuniversity.in पर उपलब्ध कराएँगे | <br>
                • प्रत्येक विद्यालय/ महाविद्यालय प्रतिभागी सूची अपने अधिकारिक मेल द्वारा भेजना सुनिश्चित करेंगे | <br>
                • प्रतिभागियों एवं प्रतिनिधियों का प्रवेश आयोजन समिति द्वारा निर्गत “प्रवेश पत्र” द्वारा होगा | <br>
                • प्रतिभागी एवं प्रतिनिधि अपने महाविद्यालय / विद्यालय द्वारा निर्गत पहचान पत्र साथ लाएँगे | <br>
                • प्रतियोगिता में प्रयुक्त होने वाली सभी सामग्री प्रतिभागी स्वयं ले कर आएँगे | <br>
                • पूर्व सूचना दिए जाने पर प्रतिभागियों एवं प्रतिनिधियों के रहने की समुचित व्यवस्था निशुल्क की जाएगी | <br>
                • प्रत्येक प्रतियोगिता के लिए जो प्रतिभागी समय सीमा सुनिश्चित की गई है वह अपरिवर्तनीय तथा सर्वमान्य होगी | <br>
                • प्रत्येक महाविद्यालय का प्रतियोगिता के लिए चयन पहले पंजीयन कराने के आधार पर होगा | <br>
                • प्रतिभागी तथा शिक्षक प्रतिनिधि विश्वविद्यालय परिसर की स्वच्छता बनाए रखने में आयोजन समिति का सहयोग करेंगे | <br>
                • वाहनों के ठहराव स्थल पर वाहनों को सलीके से खड़ा करेंगे | <br>
                • विश्वविद्यालय के सम्पत्ति को किसी भी प्रकार का कोई नुक़सान नहीं पहुँचाएँगे | <br>
                • भोजन के समय पंक्तिबद्ध होकर भोजन का आनंद लेंगे | <br>
                • विश्वविद्यालय परिसर में किसी भी प्रकार की हिंसा तथा अपशब्दों का प्रयोग पूर्णतः वर्जित होगा | <br>
                • प्रतिभागी अपने समान की सुरक्षा स्वयं करेंगे | <br>
                • किसी भी प्रकार का भत्ता देय नहीं है | <br>
                • विस्तृत जानकारी srinathuniversity.in पर उपलब्ध है अथवा दूरभाष संख्या ७९०९०३३३१८ / ७००४२११४२६ / ८४३४०१३२४६ पर सम्पर्क कर सकते हैं | <br>
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary un-color" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>

    </section>


  </div>
  <div class="bg-dark p-1 mt-5">
    <footer class="text-center mt-3 text-white ">
      <?php include './srinath/include/footer.php'; ?>
    </footer>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./asset/js/event.js"></script>


</html>