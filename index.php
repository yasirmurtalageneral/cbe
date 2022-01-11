<?php
 session_start();
 include'config/db.php';
   $err="";
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
    <section class="welcome-area mb-2 " style="background-image: url(img/img.jpg); background-size: cover; background-repeat: no-repeat; height: 350px;">
        
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-8">
                                <div class="welcome-text col-lg-12 offset-sm-4 mb-2 text-white">
                                     <h3 class=" animated fadeInDown" style="margin-top: 70px;"><b> ONLINE COURSE ALLOCATION FOR KADUNA POLYTECHNIC </b></h3><br>
                                             <li class="divider" style="background-color: #eee; height: 1px;"></li><br>
                                              <h6 class="animated slideInRight" style="margin-top: -10px;">A Computer Based Course Allocarion System is designed to eliminate the manual process in the institution.</h6>
                                              
                                            </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
               

           
    </section>
     
    <!-- Welcome Area End -->

  

       <!-- Footer Area Start -->
    <?php include"footer.php"; ?>
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