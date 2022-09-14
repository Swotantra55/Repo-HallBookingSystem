<?php
include '../../dbCon.php';

$id=$_GET["hid"];

$sql = "DELETE FROM user WHERE user_id=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
session_start();
session_destroy();
header("Location: ../../index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
<script type="text/javascript">
    window.location="../../index.php";
</script>



