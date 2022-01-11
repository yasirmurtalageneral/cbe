<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$_SESSION['username']=$_POST['username'];
$password=$_POST['password']; 


$sql = mysqli_query($connection,"INSERT INTO admin (username,pass) VALUES('".$_SESSION['username']."','$password')");  
 
echo "<script>alert(' Admin Successfully Added!!!'); window.location='register.php'</script>";
 
 
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
   
   <?php include"index_header.php";?>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area" style="margin-top: -57px;">
        <!-- Top Header Area Start -->
      <div class="top-header-area" style="background-color: #063 !important; color: #fff !important;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p >Kaduna Polytechnic Course Allocation Portal </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-inbox" aria-hidden="true"></i> support@kadpoly.edu.ng <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+234) 8102564648</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

            <?php include"index_nav.php"; ?>

    <!-- Welcome Area Start -->
    <section class="welcome-area mb-2" style="background-image: url(img/bg.png); height: 780px;">
        
                <!-- Welcome Content -->
                <div class="welcome-content">
                    <div class="container-fluid ">
                        <div class="row  align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text col-lg-12 offset-sm-7">
                                    
                                            
                                              <div class=" col-lg-10 offset-sm-1  mt-1">
                                                <div class="card mb-5" style="margin-top: px;">
                                                    <div class="card-header"><h5><span class="fa fa-user-plus"></span> Admin Registration</h5></div>
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                          <div class="form-group">
                                                        <label>Username</label>
                                                           <input type="text" required class="form-control" name="username" placeholder="  Username">

                                                       </div>
                                                       
                                                       
                                                       <div class="form-group">
                                                        <label>Password</label>
                                                           <input type="password" required class="form-control" name="password" placeholder="  Password">
                                                       </div>
                                                       <div class="form-group">
                                                        <button class="btn btn-info btn-sm " type="submit" name="submit">Register</button>
                                                       </div>
                                                   </form>
                                                    </div>
                                                </div>
                                                  </div>
                                            </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
               

  

       <!-- Footer Area Start -->
   <<?php include"./footer.php" ?>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
     <script src="jquery/jquery-3.3.1.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="vendor/datatables/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="vendor/datatables/datatables-demo.js"></script>

    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>