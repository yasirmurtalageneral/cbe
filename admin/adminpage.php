<?php
 session_start();
 include'config/db.php';

 
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
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-dashboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin Dashboard</span>
              <span class="info-box-number"><small> Online</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
     
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Lecturers</span>
              <span class="info-box-number"> 


                
                  <?php

   require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT count(*) FROM lecturers");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
      echo $row["count(*)"];

    
     }
  ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Courses</span>
              <span class="info-box-number">

             <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT count(*) FROM courses");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
      echo $row["count(*)"];

    }
     
  ?> 
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
         <div class="col-lg-6  col-sm-offset-4 animated fadeInDown" style="margin-top: 150px;">

            <h1>Welcome: <span class="text-danger">Administrator</span></h1>


         </div>
     
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
