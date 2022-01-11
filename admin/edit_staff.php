<?php
 session_start();
 include'config/db.php';

$staff=$_GET['id'];
   $query = mysqli_query($connection, "SELECT * FROM staff WHERE staff_Id='$staff' ");
   
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

     
     $name = $row["name"];
     $sname = $row["sname"];
     $oname = $row["oname"];
     $gender = $row["gender"];
     $state = $row["state"];
     $phone = $row["phone"];
     $marital= $row["marital"];
     $dob = $row["dob"];
     $address = $row["address"];
     $department = $row["department"];
     $grade = $row["grade"];
     $accno = $row["accno"];
     $accname = $row["accname"];
     $bank = $row["bank"];
     $date_employed = $row["date_employed"];
     $position = $row["position"];
     $username = $row["username"];
     $pic=$row["picture"];
     $qualification=$row["qualification"];
     $salary=$row["salary"];
     $entry_date = $row["entry_date"];

     
    }

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$position=$_POST['position'];
$grade=$_POST['grade'];
$date_employed=$_POST['date_employed'];
$accno=$_POST['accno'];
$accname=$_POST['accname'];
$bank=$_POST['bank'];
$username=$_POST['username'];
$password=$_POST['password'];
$marital=$_POST['marital'];
$salary=$_POST['salary'];
$qualification=$_POST['qualification'];  



 
$sql = mysqli_query($connection,"UPDATE staff SET name='$name',gender='$gender',dob='$dob',address='$address',phone='$phone',department='$department',position='$position',grade='$grade',date_employed='$date_employed',accno='$accno',accname='$accname',bank='$bank',username='$username',password='$password',marital='$marital',salary='$salary',qualification='$qualification',picture='$location' WHERE staff_Id='$staff'");  
 
echo "<script>alert('Successfully update!!!'); window.location='edit_staff.php?id=$staff'</script>";
 
 
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
              <h3 class="box-title"> <span class="fa fa-edit"></span>  Staff</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label > Staff Name</label>
                  <input type="text" required class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
                 <div class="form-group col-md-4">
                  <label>Gender</label>
                  <select class="form-control" name="gender" required>
                    <option><?php echo $gender; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                 <div class="form-group col-md-4">
                  <label >Date of Birth</label>
                  <input type="date" class="form-control" name="dob" value="<?php echo $date; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label > Marital Status</label>
                  <select class="form-control" name="marital" required>
                    <option><?php echo $marital; ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                  </select>
                </div>
                 <div class="form-group col-md-4">
                  <label >Address</label>
                  <input type="text" class="form-control prc" name="address" value="<?php echo $address; ?>">
                </div>
                 <div class="form-group col-md-4">
                  <label >Phone Number</label>
                  <input type="number" class="form-control prc" name="phone" value="<?php echo $phone; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label>Department</label>
                  <select class="form-control" name="department" required>
                    <option><?php echo $department; ?></option>
              
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Grade</label>
                  <select class="form-control" name="grade" required>
                    <option><?php echo $grade; ?></option>
                    <option value="Grade 1">Grade 1</option>
                    <option value="Grade 2">Grade 2</option>
                    <option value="Grade 3">Grade 3</option>
                    <option value="Grade 4">Grade 4</option>
                    <option value="Grade 5">Grade 5</option>
                    <option value="Grade 6">Grade 6</option>
                    <option value="Grade 7">Grade 7</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label >Position</label>
                  <input type="text" class="form-control" name="position" value="<?php echo $position; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Qualification</label>
                  <select class="form-control" name="qualification" required>
                    <option><?php echo $qualification; ?></option>
                    <option value="MSc">MSc</option>
                    <option value="BSc">BSc</option>
                    <option value="HND">HND</option>
                    <option value="ND">ND</option>
                    <option value="NCE">NCE</option>
                    <option value="SSCE">SSCE</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label >Monthly Salary</label>
                  <input type="number" class="form-control" name="salary" value="<?php echo $salary; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Account Name</label>
                  <input type="text" class="form-control" name="accname" value="<?php echo $accname; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Account Number</label>
                  <input type="number" class="form-control" name="accno" value="<?php echo $accno; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Bank</label>
                  <input type="text" class="form-control" name="bank" value="<?php echo $bank; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Date Employed</label>
                  <input type="date" class="form-control" name="date_employed" value="<?php echo $date; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="form-group col-md-4">
                  <label >Password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
                <div class="form-group col-md-4 mb-5">
                  <label >Picture</label>
                  <input type="file" name="pic">
                </div>

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Staff Registration Form
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
