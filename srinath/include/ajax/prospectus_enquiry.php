<?php
include '../config.php';
$data = $_GET['data'];
$trash = md5("trash");
$s_no = 1;
$admission_query = "SELECT * FROM `tbl_prospectus` WHERE  `prospectus_applicant_name` LIKE '%$data%' || `prospectus_no` LIKE '%$data%' ||`prospectus_gender` LIKE '%$data%'  || `prospectus_father_name` LIKE '%$data%'  || `prospectus_address` LIKE '%$data%'  || `prospectus_state` LIKE '%$data%'  || `prospectus_city` LIKE '%$data%'  || `prospectus_postal_code` LIKE '%$data%'  || `prospectus_dob` LIKE '%$data%'  || `prospectus_emailid` LIKE '%$data%'|| `mobile` LIKE '%$data%'|| `revert_by` LIKE '%$data%' || `prospectus_course_name` LIKE '%$data%' || `prospectus_session` LIKE '%$data%' || `payment_status` LIKE '%$data%'  && `status`!='$trash' && `prospectus_payment_mode`='cash'";

$result = $con->query($admission_query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];

?>
        <tr>
            <td><?php echo $s_no; ?></td>
            <td style="color:#8a0410;"><b><?php if ($row["prospectus_no"] != "") echo $row["prospectus_no"];
                                            else echo "Please Give Prospectus No"; ?></b></td>
            <?php
            //   i heve to check prospectus course name value interger or charater
            if (strlen($row["prospectus_course_name"]) <= 2) {
                $prospectus_course_name = $row["prospectus_course_name"];
                $course_no_query = "SELECT * FROM `tbl_course` WHERE `course_id`='$prospectus_course_name'";
                $course_no_result = mysqli_query($con, $course_no_query);
                $data_row1 = mysqli_fetch_array($course_no_result);
                $prospectus_course = $data_row1['course_name'];
            } else {
                $prospectus_course = $row["prospectus_course_name"];
            }
            ?>

            <div class="modal fade" id="exampleModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm " role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-center">
                            <div class="text-center">
                                <h6 class="modal-title " id="exampleModalLabel"> <strong> Move To Trash</strong></h6>

                            </div>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="modal-title text-danger " id="exampleModalLabel"> <strong><i class="fas fa-exclamation-triangle"></i> Are you sure ?</strong></h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <a type="button" href="./include/status/delete_prospectus?delete=<?php echo $id ?>" class="btn btn-danger">Yes</a>
                        </div>
                    </div>
                </div>
            </div>
            <td><?php echo $prospectus_course  ?></td>
            <td><?php echo $row["prospectus_applicant_name"] ?></td>
            <td><?php echo $row["mobile"] ?></td>
            <td><?php echo $row["revert_by"] ?></td>
            <td><?php echo $row["payment_status"] ?></td>
            <td><?php echo $row["prospectus_payment_mode"] ?></td>
            <td><?php echo $row["post_at"] ?></td>

            <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $id ?>">
                    <i class="fas fa-trash">
                    </i> </button>

            </td>


        </tr>
    <?php
        $s_no++;
    }
}

if ($data == '') { ?>
    <script>
        window.location.replace('../srinath/prospectus_view')
    </script>
<?php } ?>