<?php session_start(); ?>

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
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <span class="fa fa-book"></span> Manage Courses</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped" style="font-size: 12px; ">
                <thead>
                <tr>
                  <th>Course Title</th>
                  <th>Course Code.</th>
                  <th>Tutor</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM courses
      LEFT JOIN lecturers on lecturers.staff_Id = courses.staff_id");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["course_title"]; ?></td>
                  <td><?php echo $row["course_code"]; ?></td>
                  <td><?php echo $row["fname"]." ".$row["sname"]." ".$row["oname"]; ?></td>
                 
              

                    <td align="center"><a href="delete_course.php?id=<?php echo $row['course_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-xs" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
