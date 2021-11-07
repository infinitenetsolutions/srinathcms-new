<?php
include '../../Backend/connection.inc.php';
$id = $_GET['event'];

$event_qury = "SELECT * FROM `tbl_event` WHERE `id`='$id'";
$result = mysqli_query($connection, $event_qury);
$date = mysqli_fetch_array($result);
// getting the all activities of the event
$event_qury1 = "SELECT * FROM `tbl_sub_events` WHERE `event_id`='$id'";
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
<div class="col-4  mt-3">
    <label>प्रारंभ समय
        : <br>
        Started time :</label>
    <br>

</div>
<div class="col-4  mt-3">
    <label>समाप्त समय

        : <br>
        Ended time :</label>
    <br>

</div>
<?php while ($row1 = mysqli_fetch_array($result1)) { ?>
    <div class="col-4  mt-3">


        <label class="la" for="">
            <input type="checkbox" name="name" required> <?php echo $row1['name']; ?> :</label>
    </div>



    <div class="col-4  mt-3">


        <label class="la" for=""><?php echo $row1['start_time_doe']; ?></label>


    </div>
    <div class="col-4  mt-3">


        <label class="la" for=""><?php echo $row1['end_time_doe']; ?></label>

    </div>
<?php } ?>