<?php
include '../../dbCon.php';
$id=$_GET["hid"];

$sql = "DELETE FROM halls WHERE hall_id=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: AdminPanel.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
<!-- <script type="text/javascript">
    window.location="registerhall.php";
</script> -->



