<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM courses  WHERE course_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='viewCourses.php'</script>";

?>