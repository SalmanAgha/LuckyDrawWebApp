<?php
session_start();
include('connect.php');
error_reporting(1);

if( !isset($_SESSION['userid']) ){
    header("location: Login.php");
}else{ 

    $userid = $_SESSION['userid'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
   <?php include 'meta.php';?>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">

    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper"> 
        <!-- Left Sidenav -->
 

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li> 
                                   <li class="breadcrumb-item"><a href="javascript:void(0);">Profile</a></li> 
                               </ol>
                           </div>
                           <h4 class="page-title"> Profile</h4>
                       </div><!--end page-title-box-->
                   </div><!--end col-->
               </div>
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-5 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name"><?php echo $_SESSION['name'];?></h5>                                                        
                                                        <p class="mb-0 met-user-name-post">Email : <?php echo $_SESSION['email'];?></p>
                                                        <p class="mb-0 met-user-name-post">Adhar Card : <?php echo $_SESSION['email'];?></p>
                                                        <p class="mb-0 met-user-name-post">Pan Card : <?php echo $_SESSION['email'];?></p>
                                                         <p class="mb-0 met-user-name-post">Account Balance : <?php echo $_SESSION['balance'];?></p>

                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                             
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="My_Tickets_tab" data-toggle="pill" href="#My_Tickets_detail">My Tickets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="My_Transactions_tab" data-toggle="pill" href="#My_Transactions_detail">My Transactions</a>
                                        </li> 
                                     <!--    <li class="nav-item">
                                            <a class="nav-link" id="My_Profile_tab" data-toggle="pill" href="#My_Profile_detail">My Profile</a>
                                        </li> -->
                                    </ul>        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                            <div class="row">
                        <div class="col-12">
                            <div class="tab-content detail-list" id="pills-tabContent">
                              <?php include 'Profile_Sections/My_Tickets_Section.php'; ?>
                              <?php include 'Profile_Sections/My_Profile.php'; ?>
                              <?php include 'Profile_Sections/My_Transactions.php'; ?>

                             
                            </div><!--end tab-content--> 
                            
                        </div><!--end col-->
                    </div><!--end row-->

                    </div><!--end row-->
         
   </div><!-- container -->
   <?php include("footer.php");?>
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/waves.min.js"></script>
<script src="../assets/js/jquery.slimscroll.min.js"></script>
<!--Plugins-->

<script src="../assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="../assets/pages/jquery.sweet-alert.init.js"></script>


<script src="functions/mytickets.js"></script>
<script src="functions/mytransactions.js"></script>


<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>