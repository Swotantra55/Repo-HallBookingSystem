<?php
include '../../dbCon.php';
echo "hello";
$id=$_GET["uid"];

$sql = "DELETE FROM user WHERE user_id=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
<script type="text/javascript">
    window.location="users.php";
</script>



