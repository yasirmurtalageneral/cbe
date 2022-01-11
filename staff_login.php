<?php
include 'config/db.php';
$msg="";
session_start();

if(isset($_POST['submit'])){

$_SESSION['username'] = $_POST['username'];
$password = $_POST['password'];


if($_SESSION['username']&&$password){
  
  
  
 
  $sql= mysqli_query($connection,"SELECT * FROM lecturers WHERE username='".$_SESSION['username']."'");
  
  $numrows=(mysqli_num_rows($sql));
  
  if($numrows !=0)
  {
    
    while($row=mysqli_fetch_array($sql))
    {
      
    $dbuser=$row["username"];
    $dbpass=$row["password"];
    $_SESSION['lecturer']=$row["staff_Id"];  
    }
    
    if($_SESSION['username']==$dbuser)
    {
      
      if($password==$dbpass)
      {

        header("location: ./admin/staffpage.php");
 
        
      }else{
        
        $msg="<p class='alert alert-danger text-center animated shake'>Incorrect password</p>";
      
      }
      
      
    }else{
      
      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect Email Address</p>";
      
      }
  }else {

      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect Email or password</p>"; 
      
    
  }
  
  
}
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
    <header class="header-area" style="margin-top: -57px; ">
        <!-- Top Header Area Start -->
        <div class="top-header-area" style="background-color: #063 !important; color: #fff !important;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p >Kaduna Polytechnic Staff Recruitment </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-inbox" aria-hidden="true"></i> support@nounexams.edu.ng <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+234) 8050627544</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

           <?php include"index_nav.php"; ?>

    <!-- Welcome Area Start -->
    <section class="welcome-area mb-2" style="background-image: url(img/bg.png); height: 500px;">
        
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text col-lg-12 offset-sm-7">
                                    
                                            
                                              <div class=" col-lg-10 offset-sm-1  mt-1">
                                                <div class="card" style="margin-top: -120px;">
                                                    <div class="card-header"><h5><span class="fa fa-user"></span> Tutor (Staff) Login</h5></div>
                                                    <div class="card-body">
                                                      <?php echo $msg; ?>
                                                        <form action="" method="post">
                                                       <div class="form-group">
                                                        <label>Username</label>
                                                           <input type="text" name="username" class="form-control" placeholder="Username">
                                                       </div>
                                                       <div class="form-group">
                                                        <label>Password</label>
                                                           <input type="password" name="password" class="form-control" placeholder="Password">
                                                       </div>
                                                       <div class="form-group">
                                                        <button class="btn btn-info btn-sm " type="submit" name="submit">Login</button>
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
               
<footer class="main-footer fixed-bottom text-center" >
    <div class="container" style="margin-top: -10px;">
      
      <strong>Copyright &copy; 2022 Designed by  <a href="https://adminlte.io"> Designed by </a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
           
    </section>
    
  

       <!-- Footer Area Start -->
   
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