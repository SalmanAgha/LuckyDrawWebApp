 <?php
include('middleware/is_Logout.php');
 
if( isset($_SESSION['adminid']) ){
      $userid = $_SESSION['adminid'];
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
     <?php include "leftbar.php"; ?>
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
                               <li class="breadcrumb-item active">Admin Management </li>
                           </ol>
                       </div>
                       <h4 class="page-title">Admin Management Page</h4>
                   </div><!--end page-title-box-->
               </div><!--end col-->
           </div>
           <!-- end page title end breadcrumb -->
       </div><!-- container -->
   </div>
   <!-- end page content -->
</div>
<!-- end page-wrapper -->
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
<script src="functions/Staff.js"></script>
<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>