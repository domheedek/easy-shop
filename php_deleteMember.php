<?php
include("connectdb.php");
$user = $_POST["user"];
$sql = "DELETE FROM login WHERE email='".$user."'";

if ($conn->query($sql) === TRUE) {
    
	echo "<script>alert(' ลบสมาชิกเรียบร้อย'); window.location ='form_showMember.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
