<?php
$page_no = "15";
$page_no_inside = "15_2";
$year = date('Y');
$start = '';
$end = '';
include "include/authentication.php";
include '../srinath/include/config.php';
if (isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $year = explode('-', $start)[0];
    $get_event = "SELECT * FROM `rebate`  WHERE rebate_date BETWEEN '$start' AND '$end'";
    $event_result = mysqli_query($con, $get_event);

    // getting the data of approved amount
    $sql_approve = "SELECT SUM(approve_amount) as amount FROM `rebate` WHERE approve_date BETWEEN '$start' AND '$end' ";
    $query = mysqli_query($con, $sql_approve);

    $row_approve = mysqli_fetch_array($query);

    // getting the total amount f rebate
    $sql_rebate = "SELECT SUM(rebate_amount) as amount FROM `rebate` WHERE rebate_date BETWEEN '$start' AND '$end' ";
    $query = mysqli_query($con, $sql_rebate);
    $row_rebate = mysqli_fetch_array($query);
} else {
    $get_event = "SELECT * FROM `rebate` WHERE 1";
    $event_result = mysqli_query($con, $get_event);

    // getting the data of approved amount
    $sql_approve = "SELECT SUM(approve_amount) as amount FROM `rebate` WHERE 1 ";
    $query = mysqli_query($con, $sql_approve);

    $row_approve = mysqli_fetch_array($query);

    // getting the total amount f rebate
    $sql_rebate = "SELECT SUM(rebate_amount) as amount FROM `rebate` WHERE 1 ";
    $query = mysqli_query($con, $sql_rebate);
    $row_rebate = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRINATH UNIVERSITY | Dashboard</title>
    <!-- Fav Icon -->
    <link rel="icon" href="images/logo.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="./event_hindi_inc/css/main.css"> 


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include 'include/navbar.php'; ?>
        <?php include 'include/aside.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper  ">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <?php

                            if (isset($autority)) {
                                echo '<h1 class="m-0 text-dark">Hello, ' . $_SESSION["admin_name"] . ' ~ Welcome to your Dashboard';
                            } else {
                            ?>
                                <h1 class="m-0 text-dark">Dashboard</h1>
                            <?php } ?>
                        </div><!-- /.col -->
                        <!--<div class="col-sm-6">-->
                        <!--    <ol class="breadcrumb float-sm-right">-->
                        <!--        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>-->
                        <!--        <li class="breadcrumb-item active">Dashboard</li>-->
                        <!--    </ol>-->
                        <!--</div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?php if (!isset($autority)) { ?>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- PIE CHART -->
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Overall Total Rebate</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <!-- /.card-body -->
                                </div>


                                <!-- DONUT CHART -->
                                <div class="card card-danger d-none">
                                    <div class="card-header">
                                        <h3 class="card-title">Donut Chart</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col (LEFT) -->
                            <div class="col-md-6 ">
                                <!-- LINE CHART -->


                                <!-- BAR CHART -->
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Apply and Expenses</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card card-primary d-none">
                                    <div class="card-header">
                                        <h3 class="card-title">Area Chart</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card card-info d-none">
                                    <div class="card-header">
                                        <h3 class="card-title">Line Chart</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <!-- /.row -->

                </section>




                <section class="content">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">


                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <label for="year"></label>
                                                                <input name="start" value="<?php echo $start ?>" type="date" class="form-control">
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <label for="year"></label>
                                                                <input name="end" value="<?php echo $end ?>" type="date" class="form-control">
                                                            </div>
                                                            <div class="col-sm-2 mt-2 p-1">
                                                                <button name="submit" class="btn btn-success btn-sm ">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </form>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="table-responsive">
                                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">S.NO
                                                    </th>
                                                    <th class="th-sm">rebate_amount
                                                    </th>
                                                    <th class="th-sm">approve_amount
                                                    </th>
                                                    <th class="th-sm">
                                                        rebate_by_name </th>
                                                    <th class="th-sm">
                                                        rebate_by_email </th>
                                                    <th class="th-sm">student_email
                                                    </th>
                                                    <th class="th-sm">student_name
                                                    </th>
                                                    <th class="th-sm">rebate_date
                                                    </th>
                                                    <th class="th-sm">approve_date
                                                    </th>
                                                    <th class="th-sm">particular
                                                    </th>
                                                    <th class="th-sm">status
                                                    </th>
                                                    <th class="th-sm">document
                                                    </th>
                                                    <th class="th-sm">massage
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                while ($get_row = mysqli_fetch_array($event_result)) {


                                                ?>
                                                    <!-- Button trigger modal -->


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal<?php echo $get_row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Term & Conditions</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <?php echo $get_row['massage']; ?>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $get_row['rebate_amount']; ?></td>
                                                        <td><?php echo $get_row['approve_amount']; ?></td>
                                                        <td><?php echo $get_row['rebate_by_name'] ?></td>
                                                        <td><?php echo $get_row['rebate_by_email'] ?></td>
                                                        <td><?php echo $get_row['student_email']; ?></td>
                                                        <td><?php echo $get_row['student_name']; ?></td>
                                                        <td><?php echo $get_row['rebate_date']; ?></td>
                                                        <td><?php echo $get_row['approve_date']; ?></td>
                                                        <td><?php echo $get_row['particular']; ?></td>
                                                        <td><?php if ($get_row['status'] == 0) {
                                                                echo '<p class="text-warning">Pending</p>';
                                                            } elseif ($get_row['status'] == 1) {
                                                                echo '<p class="text-success">Success</p>';
                                                            } else {
                                                                echo '<p class="text-danger">Reject</p>';
                                                            }
                                                            ?>

                                                        </td>

                                                        <td>
                                                            <a <?php echo ' href="data:image/jpeg;base64,' . base64_encode($get_row['attach']) . '"' ?> data-toggle="lightbox" data-title="Images">
                                                                <img height="30px" width="30px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($get_row['attach']) . '"' ?> class="img-fluid mb-2" alt="Slider Images" />
                                                            </a>
                                                        </td>
                                                        <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $get_row['id']; ?>">
                                                                Read
                                                            </button></td>

                                                    </tr>
                                                <?php $i++;
                                                } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="th-sm"> T - <b class="text-warning"> <?php echo $i - 1; ?> </b>
                                                    </th>
                                                    <th class="th-sm "> Total - <b class="text-danger"> <?php echo $row_rebate['amount'] ?> </b>
                                                    </th>
                                                    <th class="th-sm "> Total - <b class="text-info">
                                                            <?php echo $row_approve['amount'] ?>
                                                        </b>
                                                    </th>

                                                    <th colspan="10" class="th-sm">
                                                    </th>

                                                </tr>
                                                <!-- <tr>
                                                    <th class="th-sm">Total
                                                    </th>
                                                    <th class="th-sm">rebate_amount
                                                    </th>
                                                    <th class="th-sm">approve_amount
                                                    </th>
                                                    <th class="th-sm">
                                                        rebate_by_name </th>
                                                    <th class="th-sm">
                                                        rebate_by_email </th>
                                                    <th class="th-sm">student_email
                                                    </th>
                                                    <th class="th-sm">student_name
                                                    </th>
                                                    <th class="th-sm">rebate_date
                                                    </th>
                                                    <th class="th-sm">approve_date
                                                    </th>
                                                    <th class="th-sm">particular
                                                    </th>
                                                    <th class="th-sm">status
                                                    </th>
                                                    <th class="th-sm">document
                                                    </th>
                                                    <th class="th-sm">massage
                                                    </th>

                                                </tr> -->
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>

                <!-- /.content -->

        </div>

    </div>

<?php } ?>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include 'include/footer.php'; ?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Bootstrap 4 -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="./event_hindi_inc/js/main.js"></script>
</body>
<script>
    const date1 = []
    const income = []
    const expense = []
</script>
<?php
// getting the data of pie chart

// getting the total fee admission and semester
$sql = "SELECT SUM(approve_amount) as amount FROM `rebate` WHERE approve_date BETWEEN '$year-01-01' AND '$year-12-31' ";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

echo "<script>
admission_fee=" . $row['amount'] . "
</script>";

// getting the total amount of prospectus fee
$prospectus_fee = "SELECT SUM(rebate_amount) as amount FROM `rebate` WHERE rebate_date BETWEEN '$year-01-01' AND '$year-12-31' ";
$prospectus_fee_result = mysqli_query($con, $prospectus_fee);
$total__prospectus_fee = mysqli_fetch_array($prospectus_fee_result);
echo "<script>
prospectus_fee=" . $total__prospectus_fee['amount'] . "
</script>";

// getting the total amount of Examination fee
$sql = "SELECT SUM(rebate_amount) as amount FROM `rebate` WHERE rebate_date BETWEEN '$year-01-01' AND '$year-12-31' && `status`='2' ";
$query = mysqli_query($con, $sql);
$sum13 = 0;
while ($row = mysqli_fetch_array($query)) {
    $sum13 = $sum13 + array_sum(explode(",", $row["amount"]));
}
echo "<script>
extra_fee=" . $sum13 . "
</script>";

// end the pie chart

// getting the month of the year
// print the month of the year
$last_date = date('m');
$arr = array();

$year = date('Y');
for ($i = 1; $i <= $last_date; $i++) {
    $d =  date("M", strtotime("+" . $i - 1 . " month", $last_date));

    echo "<script>

date1.push('" . $d . "')
</script>";
    if ($i <= 9) {
        $total_income = "SELECT SUM(rebate_amount) as total FROM `rebate` WHERE rebate_date BETWEEN '$year-0$i-01' AND '$year-0$i-31' ";
        $income_result = mysqli_query($con, $total_income);
        $total_income_data = mysqli_fetch_array($income_result);
        $total_income_amount = $total_income_data['total'];

        echo "<script>

income.push('" . $total_income_amount . "')
</script>";

        $total_expense = "SELECT SUM(approve_amount) as total FROM `rebate` WHERE approve_date BETWEEN '$year-0$i-01' AND '$year-0$i-31' ";
        $expense_result = mysqli_query($con, $total_expense);
        $total_expense_data = mysqli_fetch_array($expense_result);
        $total_expense_amount = $total_expense_data['total'];

        echo "<script>

expense.push('" . $total_expense_amount . "')
</script>";
    } else {

        $total_income = "SELECT SUM(rebate_amount) as total FROM `rebate` WHERE rebate_date BETWEEN  '$year-$i-01' AND '$year-$i-31' ";
        $income_result = mysqli_query($con, $total_income);
        $total_income_data = mysqli_fetch_array($income_result);
        $total_income_amount = $total_income_data['total'];

        echo "<script>

income.push('" . $total_income_amount . "')
</script>";

        $total_expense = "SELECT SUM(approve_amount) as total FROM `rebate` WHERE approve_date BETWEEN '$year-$i-01' AND '$year-$i-31' ";
        $expense_result = mysqli_query($con, $total_expense);
        $total_expense_data = mysqli_fetch_array($expense_result);
        $total_expense_amount = $total_expense_data['total'];

        echo "<script>

expense.push('" . $total_expense_amount . "')
</script>";
    }
}

?>

<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            // here i have passed the array for printing the month data1 variable name
            labels: date1,
            datasets: [{
                    label: 'Approved',
                    backgroundColor: '#28a745',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: expense
                },
                {
                    label: 'Apply',
                    backgroundColor: '#67a2dd',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: income
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')

        var donutData = {
            labels: [
                'Approved',
                'Apply',
                'Rejected',


            ],
            datasets: [{
                data: [admission_fee, prospectus_fee, extra_fee, ],
                backgroundColor: ['#00a65a', '#67a2dd', '#dc3545', ],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
        // adding some comment
        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = jQuery.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>

</html>