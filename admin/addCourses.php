<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {


$ctitle=$_POST['ctitle'];
$ccode=$_POST['ccode'];
$tutor=$_POST['tutor'];





//$connection = mysqli_connect("localhost", "root", "", "abm"); 
$sql = mysqli_query($connection,"INSERT INTO courses(course_title,course_code,staff_id) VALUES('$ctitle','$ccode','$tutor')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addCourses.php'</script>";
 
 
}


?>
<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("admin_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-11">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> <span class="fa fa-user-plus"></span> Add Courses</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label > Course Title</label>
                  <input type="text" required class="form-control" name="ctitle" placeholder="  Course Title">
                </div>
                <div class="form-group col-md-6">
                  <label > Course Code</label>
                  <input type="text" required class="form-control" name="ccode" placeholder="  Course Code">
                </div>
               
                <div class="form-group col-md-6">
                  <label >Tutor</label>
                  <select class="form-control" name="tutor" required>

                    <option>Select Tutor</option>

                    <?php

                    include 'config/db.php';

                    $query=mysqli_query($connection, "SELECT * FROM lecturers");

                    while ($row=mysqli_fetch_array($query)) {
                    ?>

                    <option value="<?php echo $row["staff_Id"]; ?>"><?php echo $row["fname"]." ".$row["sname"]." ".$row["oname"]; ?></option>

                    <?php
                  }

                  ?>
                  </select>
                </div>
               
              

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Fill all Fields Above
              </div>
            </form>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
