<?php
$page_no = "9";
$page_no_inside = "9_3";
include "include/authentication.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRINATH UNIVERSITY | Admission Enquiry </title>
    <!-- Fav Icon -->
    <link rel="icon" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<?php include 'include/navbar.php'; ?>
<?php include 'include/aside.php'; ?>

<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admission Enquiry</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Admission</a></li>
                            <li class="breadcrumb-item active">Admission Enquiry</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header card-warning">

                            <form method="POST" action="export-admission.php">
                                <div class="card-body" style="margin-top: 0px;">
                                    <div class="row">
                                        <div class="col-12" id="error_section"></div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                <select class="form-control" name="course_id">
                                                    <option value="all">All</option>
                                                    <?php
                                                    $sql_course = "SELECT * FROM `tbl_course`
                                                                   WHERE `status` = '$visible';
                                                                   ";
                                                    $result_course = $con->query($sql_course);
                                                    while ($row_course = $result_course->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $row_course["course_id"]; ?>"><?php echo $row_course["course_name"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Academic Year</label>
                                                <select class="form-control" name="academic_year">
                                                    <option value="all">All</option>
                                                    <?php
                                                    $sql_ac_year = "SELECT * FROM `tbl_university_details`
                                                                   WHERE `status` = '$visible';
                                                                   ";
                                                    $result_ac_year = $con->query($sql_ac_year);
                                                    while ($row_ac_year = $result_ac_year->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $row_ac_year["university_details_id"]; ?>"><?php echo date("d/m/Y", strtotime($row_ac_year["university_details_academic_start_date"])) . " to " . date("d/m/Y", strtotime($row_ac_year["university_details_academic_end_date"])); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2" style="margin-top: 29px;">
                                            <input type="hidden" name="action" value="export_student_details" />
                                            <button type="submit" class="btn btn-warning pull-right"><i class="fa fa-download"></i> Export All</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive" id="data_table">

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-12">
                    <div class="card card-danger card-outline">
                        <div class="card-header card-warning">
                            <center>
                                <div class="btn-group">
                                    <button type="button" class="pr-2 pl-2 btn btn-default pagiNation" id="optionPre" name="options" value="pre">Pre</button>
                                    <button type="button" class="pr-2 pl-2 btn btn-danger pagiNation" id="option1" name="options" value="1">1</button>
                                    <button type="button" class="pr-2 pl-2 btn btn-default pagiNation" id="option2" name="options" value="2">2</button>
                                    <button type="button" class="pr-2 pl-2 btn btn-default pagiNation" id="dynamicChangeNumber" name="options" value="3">3</button>
                                    <button type="button" class="pr-2 pl-2 btn btn-default" value="">...</button>
                                    <button type="button" class="pr-2 pl-2 btn btn-default pagiNation" id="optionNext" name="options" value="next">Next</button>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <?php include 'include/footer.php'; ?>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'include/view.php?action=get_nsuniv-admission-enquiry',
                type: 'GET',
                success: function(result) {
                    $("#data_table").html(result);
                }
            });
        });
    </script>
</body>

</html>