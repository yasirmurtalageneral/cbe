<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$_SESSION['username']=$_POST['username'];
$password=$_POST['password']; 


$sql = mysqli_query($connection,"INSERT INTO admin (username,pass) VALUES('".$_SESSION['username']."','$password')");  
 
echo "<script>alert(' Admin Successfully Added!!!'); window.location='addAdmin.php'</script>";
 
 
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
              <h3 class="box-title"> <span class="fa fa-user-plus"></span> Add New Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group col-md-4">
       <label >Username </label>
                  <input type="text" required class="form-control" name="username" placeholder="  Username">
                </div>

                <div class="form-group col-md-4">
                  <label > Password</label>
                  <input type="password" required class="form-control" name="password" placeholder="  Password">
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
