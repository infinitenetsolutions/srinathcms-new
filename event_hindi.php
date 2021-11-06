<?php
include './Backend/connection.inc.php';
if (isset($_POST['submit'])) {
  echo "<pre>";
  print_r($_POST);

  $college_name=$_POST['college_name'];
  $university=$_POST['university'];
  $department=$_POST['department'];
  $name=$_POST['name'];
  $f_name=$_POST['f_name'];
  $dob=$_POST['dob'];
  $sex=$_POST['sex'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRINATH UNIVERSITY | हिन्दी महोत्सव </title>
  <link rel="icon" href="images/logo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">



    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header bg-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="text-center">हिन्दी महोत्सव</h1>
            </div>

          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">5 वाँ श्रीनाथ हिन्दी महोत्सव, जमशेदपुर, झारखण्ड 2021</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
              </div>
            </div>

            <form role="form" action="" method="POST"  enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12" id="error_section"></div>
                  <div class="col-sm-4  mt-3">

                    <label>विद्यालय/महावि़द्यालय/संस्थान का नाम : <br>
                      Name of the School/College/Institution :</label>
                    <input type="text" name="college_name" value="" placeholder="विद्यालय/महावि़द्यालय/संस्थान का नाम" class="form-control">

                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>विश्वविद्यालय का नाम : <br>
                      Name of the University :</label>
                    <input id="form_no" type="text" name="university" class="form-control" placeholder="विश्वविद्यालय का नाम " required>
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>विभाग : <br>
                      Department :</label>
                    <input type="text" name="department" class="form-control" value="" placeholder="विभाग">
                  </div>



                  <div class="col-sm-4  mt-3">
                    <label>प्रतिभागी का नाम : <br>
                      Participant’s Name :</label>

                    <input type="text" name="name" class="form-control" required>
                  </div>



                  <div class="col-sm-4  mt-3">
                    <label>पिता का नाम : <br>
                      Father’s Name :</label>
                    <input id="course" name="f_name" placeholder="पिता का नाम" class="form-control" required />


                  </div>



                  <div class="col-sm-4  mt-3">
                    <label>जन्म तिथि : <br>
                      Date of Birth :</label>
                    <input id="dob" type="date" name="dob" placeholder="जन्म तिथि" class="form-control" required>
                  </div>

                  <div class="col-sm-4  mt-3">
                    <label>लिंग : <br>
                      Sex :</label>
                    <select id="gender" name="sex" class="form-control">
                      <option value="0">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

                  <div class="col-sm-4  mt-3">
                    <label>मोबाईल नं. : <br>
                      Mobile No. :</label>
                    <input type="text" name="mobile" placeholder="मोबाईल नं." class="form-control">
                  </div>
                  <div class="col-sm-4  mt-3">
                    <label>ई&मेल : <br>
                      E-mail :</label>
                    <input type="text" name="email" placeholder="ई&मेल" class="form-control">
                  </div>
                </div>
              </div>
          </div>



          <div class="col-md-12 mt-5">

            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
          </form>

        </div>
      </section>
      <!-- /.content -->
    </div>


    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <div class="bg-dark p-1 mt-5">
    <footer class="text-center mt-3 text-white ">
      <?php include './srinath/include/footer.php'; ?>
    </footer>
  </div>
</body>

</html>