<?php
include 'check_session.php';
include('../db_con.php');

/* ================= DELETE LOGIC ================= */
if(isset($_POST['delete_booking'])){

    $id = intval($_POST['booking_id']);

    $deleteQuery = "DELETE FROM cab_bookings WHERE sno = ?";
    $stmt = $con->prepare($deleteQuery);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "<script>
                alert('Booking deleted successfully');
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
    <div class="ibox-title">Cab Booking Requests</div>
</div>

<div class="ibox-body">

<table class="table table-striped table-bordered table-hover"
       id="example-table" cellspacing="0" width="100%">

<thead>
<tr>
    <th>S.No.</th>
    <th>Name</th>
    <th>Age</th>
    <th>Phone</th>
    <th>Occupation</th>
    <th>Pickup</th>
    <th>Drop</th>
    <th>Pickup Time</th>
    <th>Return Time</th>
    <th>Added On</th>
    <th>Action</th>
</tr>
</thead>

<tbody>

<?php
$fetch_query = "SELECT * FROM cab_bookings ORDER BY sno DESC";
$result = mysqli_query($con, $fetch_query);

$i = 1;
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo htmlspecialchars($row['phone']); ?></td>
    <td><?php echo htmlspecialchars($row['occupation']); ?></td>
    <td><?php echo htmlspecialchars($row['start_destination']); ?></td>
    <td><?php echo htmlspecialchars($row['end_destination']); ?></td>
    <td><?php echo $row['pickup_time']; ?></td>
    <td><?php echo $row['return_time']; ?></td>
    <td><?php echo date("d M Y h:i A", strtotime($row['added_on'])); ?></td>

    <td>
        <form method="POST" onsubmit="return confirm('Delete this booking?')">
            <input type="hidden" name="booking_id"
                   value="<?php echo $row['sno']; ?>">

            <button type="submit"
                name="delete_booking"
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
.dataTables_length { display:none; }
.dataTables_filter { display:none; }
</style>

<?php include('footer.php'); ?>