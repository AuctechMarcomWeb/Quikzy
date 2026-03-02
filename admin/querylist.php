<?php
include 'check_session.php';
include('../db_con.php');

/* ================= DELETE LOGIC ================= */
if(isset($_POST['delete_inquiry'])){

    $id = intval($_POST['inquiry_id']);

    $deleteQuery = "DELETE FROM contact_inquiries WHERE sno = ?";
    $stmt = $con->prepare($deleteQuery);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "<script>
                alert('Inquiry deleted successfully');
                window.location.href='';
              </script>";
    }else{
        echo "<script>alert('Delete failed');</script>";
    }

    $stmt->close();
}

include('header.php');
?>

<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="ibox">

            <div class="ibox-head">
                <div class="ibox-title">Contact Inquiries</div>
            </div>

            <div class="ibox-body">

                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">

                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Occupation</th>
                            <th>Message</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
$fetch_query = "SELECT * FROM contact_inquiries ORDER BY sno DESC";
$result = mysqli_query($con, $fetch_query);

$i = 1;
while ($row = mysqli_fetch_assoc($result)) {
?>

                        <tr>
                            <td><?php echo $i; ?></td>

                            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['address']); ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo htmlspecialchars($row['occupation']); ?></td>
                            <td><?php echo htmlspecialchars($row['message']); ?></td>
                            <td><?php echo date("d M Y h:i A", strtotime($row['added_on'])); ?></td>

                            <td>
                                <form method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this inquiry?')">
                                    <input type="hidden" name="inquiry_id" value="<?php echo $row['sno']; ?>">

                                    <button type="submit" name="delete_inquiry"
                                        class="btn btn-danger shadow btn-xs sharp">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>

                        <?php
$i++;
}
?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <style>
    .dataTables_length {
        display: none;
    }

    .dataTables_filter {
        display: none;
    }
    </style>

    <?php include('footer.php'); ?>