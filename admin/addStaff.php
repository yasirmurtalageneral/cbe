<?php
 session_start();
 include'config/db.php';
$error="";
if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"img/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];
$sno=$_POST['sno'];
$rank=$_POST['rank']; 
$dept=$_POST['dept'];  
$unit=$_POST['unit']; 
$phone=$_POST['phone'];
$_SESSION['username']=$_POST['username'];
$password=$_POST['password']; 

$sql1 = mysqli_query($connection, "SELECT * FROM lecturers WHERE username = '".$_SESSION['username']."'");
if (mysqli_num_rows($sql1) < 1) {
  # code...
  $sql = mysqli_query($connection,"INSERT INTO lecturers(fname,sname,oname,gender,sno,rank,phone,username,password,dept,unit,picture) VALUES('$fname','$sname','$oname','$gender','$sno','$rank','$phone','".$_SESSION['username']."','$password','$dept','$unit','$location')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addStaff.php'</script>";
}
else{
  $error = "<div class='alert alert-danger col-md-12 text-center'>Username Exists</div>";

}

 
 
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
              <h3 class="box-title"> <span class="fa fa-user-plus"></span> Add Staff</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <?php 
                echo $error;

                ?>
                <div class="form-group col-md-4">
                  <label > First Name</label>
                  <input type="text" required class="form-control" name="fname" placeholder="  First Name">
                </div>
                <div class="form-group col-md-4">
                  <label > Last Name</label>
                  <input type="text" required class="form-control" name="sname" placeholder="  Last Name">
                </div>
                <div class="form-group col-md-4">
                  <label > Other Name</label>
                  <input type="text"  class="form-control" name="oname" placeholder="  Other Name">
                </div>
                <div class="form-group col-md-4">
                  <label >Gender</label>
                  <select class="form-control" name="gender" required>
                    <option>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
               
                <div class="form-group col-md-4">
                  <label > Staff No.</label>
                  <input type="text" required class="form-control" name="sno" placeholder="  Staff Number">
                </div>
                <div class="form-group col-md-4">
                  <label > Phone Number</label>
                  <input type="number" required class="form-control" name="phone" placeholder="  Phone Number">
                </div>
                <div class="form-group col-md-4">
                  <label > Email</label>
                  <input type="email" required class="form-control" name="email" placeholder="  Email Address">
                </div>

                  <div class="form-group col-md-4">
                  <label > Rank</label>
                  <input type="text" required class="form-control" name="rank" placeholder="  Rank">
                </div>
                
                <div class="form-group col-md-4">
                  <label>Department</label>
                  <select class="form-control" name="dept" required>
                    <option>Select Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Accountancy">Accounting</option>
                    <option value="Applied Science">Applied Science</option>
                    <option value="Food Technology">Food Technology</option>
                    <option value="Fashion Design">Fashion Design</option>
                    <option value="Nutrition and Dietetics">Nutrition and Dietetics</option>
                    <option value="Hospitality Management">Hospitality Management</option>
                    <option value="Mathematics and Statistics">Mathematics and Statistics</option>
                    <option value="Clothing and Textile Management">Clothing and Textile Management</option>
                    <option value="Printing Technology">Printing Technology</option>
                    <option value="Leisure and Tourism Management">Leisure and Tourism Management</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Minerals and Petroleum Resources Engineering">Minerals and Petroleum Resources Engineering</option>
                    <option value="Office Technology Management">Office Technology Management</option>
                    <option value="Business Administration and Management">Business Administration and Management</option>
                    <option value="Banking and Finance">Banking and Finance</option>
                    <option value="Cooperative Economics">Cooperative Economics</option>
                    <option value="Purchasing and Supply">Purchasing and Supply </option>
                    <option value="Languages">Languages</option>
                    <option value="Public Administration">Public Administration</option>
                    <option value="Social Development">Social Development </option>
                    <option value="Local Government Studies">Local Government Studies </option>
                    <option value="Rehabilitation Studies">Rehabilitation Studies </option>
                    <option value="Mass Communication">Mass Communication </option>
                    <option value="Quantity Survey">Quantity Survey</option>
                    <option value="Survey and Geo-Informatics">Survey and Geo-Informatics </option>
                    <option value="Urban and Regional Planning">Urban and Regional Planning </option>
                    <option value="Architecture">Architecture </option>
                    <option value="Building Technology">Building Technology </option>


                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Unit</label>
                  <select class="form-control" name="unit" required>
                    <option>Select Unit</option>
                    <option value="CST">CST</option>
                    <option value="COE">COE</option>
                    <option value="CES">CES</option>
                    <option value="CASSS">CASSS</option>
                    <option value="CBMS">CBMS</option>

                  </select>
                </div>

 <div class="form-group col-md-4">
 
       <label >Username </label>
                  <input type="text" required class="form-control" name="username" placeholder="  Username">
                </div>

                <div class="form-group col-md-4">
                  <label > Password</label>
                  <input type="password" required class="form-control" name="password" placeholder="  Password">
                </div>
                
                <div class="form-group col-md-4 mb-5">
                  <label >Upload Picture</label>
                  <input type="file" name="pic">
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
