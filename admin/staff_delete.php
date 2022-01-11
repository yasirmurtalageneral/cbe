<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM lecturers WHERE staff_Id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='viewstaffs.php'</script>";

?>