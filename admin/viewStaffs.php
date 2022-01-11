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
              <h3 class="box-title"> <span class="fa fa-book"></span> Staff Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped" style="font-size: 12px; ">
                <thead>
                <tr>
                  <th>Staff Name</th>
                  <th>Staff No.</th>
                  <th>Gender</th>
                  <th>Department</th>
                  <th>Unit</th>
                  <th>Picture</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM lecturers");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["fname"]." ".$row["sname"]." ".$row["oname"]; ?></td>
                  <td><?php echo $row["sno"]; ?></td>
                  <td><?php echo $row["gender"]; ?></td>
                  <td><?php echo $row["dept"]; ?></td>
                  <td><?php echo $row["unit"]; ?></td>
                   <td align="center"><a href="img/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-primary fa fa-xs  fa-download"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>


                    <td align="center"><a href="more_info.php?staff_Id=<?php echo $row['staff_Id']; ?>"  class="btn  btn-xs btn-info fa  fa-check-circle fa-sm" ><strong style="font-size: 12px;"> View More</strong></a></td>

                    <td align="center"><a href="staff_delete.php?id=<?php echo $row['staff_Id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-xs" ><strong style="font-size: 12px;"> Delete</strong></a></td>

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
