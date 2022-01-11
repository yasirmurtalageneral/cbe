<?php 
session_start();
 include'config/db.php';
 $err="";

        $get=$_GET['staff_Id'];
        $query2 = mysqli_query($connection, "SELECT * FROM lecturers WHERE staff_Id='$get'");
                                       
        while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

            $fname=$row["fname"];
            $oname=$row["oname"];
            $sname=$row["sname"];
            $gender=$row["gender"];
            $dept=$row["dept"];
            $sno=$row["sno"];
            $phone=$row["phone"];
            $unit=$row["rank"];
            $entry_date=$row["entry_date"];
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
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <span class="fa fa-file"></span> Staff Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <table class="table table-responsive-md" id="dataTable" width="100%" style="" cellspacing="0">
                                                        <tr>
                                                            <th>Full Names: </th>
                                                            <td class="text-info"><?php echo $fname." ".$sname." ".$oname; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Gender: </th>
                                                            <td class="text-info"><?php echo $gender; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Department:</th>
                                                            <td class="text-info"><?php echo $dept; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Staff Number:</th>
                                                            <td class="text-info"><?php echo $sno; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone:</th>
                                                            <td class="text-info"><?php echo $phone; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Unit</th>
                                                            <td class="text-info"><?php echo $unit; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Date of Appointment</th>
                                                            <td class="text-info"><?php echo $entry_date; ?></td>
                                                        </tr>
                                                     
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
