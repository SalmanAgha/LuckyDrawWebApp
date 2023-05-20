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
                                        <li class="breadcrumb-item active">Contest Management</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Contest Management Page</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                     <div class="col-lg-12" >
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-left">
                                        <!-- Small modal -->
                                        <button type="button" class="btn btn-gradient-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-add-modal-lg">Add New</button>
                                    </div>
                                    <br>
                                    <br>
 
                                   
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style=" overflow-x: auto;border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                    <tr>
                                    <th></th><th>Name</th><th>Date of Creation</th><th>Date of Expiry</th><th>Total Tickets</th><th>Tickets Remaining</th><th>Tickets Sold</th><th>Amount</th><th>Status</th><th>Admin Id</th><th>Winning Amount</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->



                    <div class="modal fade bs-add-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add contest</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                                      <div class="col-lg-12">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center">Add contest</label>
 
                                            
                                         
                                           <div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Name</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Name" id="name"><span class="help-block custom-block-hide" id="1v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Date of Creation</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Date of Creation" id="dateofcreation"><span class="help-block custom-block-hide" id="2v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Date of Expiry</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Date of Expiry" id="dateofexpiry"><span class="help-block custom-block-hide" id="3v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Total Tickets</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Total Tickets" id="totaltickets"><span class="help-block custom-block-hide" id="4v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Tickets Remaining</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Tickets Remaining" id="ticketsremaining"><span class="help-block custom-block-hide" id="5v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Tickets Sold</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Sold Tickets" id="ticketsold"><span class="help-block custom-block-hide" id="6v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Amount</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Amount" id="amount"><span class="help-block custom-block-hide" id="7v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Status</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Status" id="status"><span class="help-block custom-block-hide" id="8v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Admin Id</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Admin Id" id="adminid"><span class="help-block custom-block-hide" id="9v"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Winning Amount</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Winning Amount" id="winningamount"><span class="help-block custom-block-hide" id="10v"><small ></small></span>
    </div>
    </div>
                                    
                                            
                                                    </div>
                                                     </div>
                                             <div class="form-group row">
                                                <div class="col-md-4"> 
                                                      <button type="button" onclick="Addcontest();" class="btn btn-primary waves-effect waves-light" style="width: 100%;">Save</button>
                                                </div>
                                                <div class="col-md-4"> 
                                                     <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal" id="btncancel" aria-hidden="true" style="width: 100%;">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>


    <div class="modal fade edit-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit contest</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                                      <div class="col-lg-12">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="example-text-input" class="col-lg-12 col-form-label  C-Modal-Data-title text-center">Edit contest</label>
                                           <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label text-right">contest Id</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="id2" disabled="">
                                                <span class="help-block custom-block-hide" id="0v1"><small ></small></span></div>
                                            </div>
                                           
                                       
                                      <div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Name</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Name" id="name1"><span class="help-block custom-block-hide" id="1v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Date of Creation</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Date of Creation" id="dateofcreation1"><span class="help-block custom-block-hide" id="2v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Date of Expiry</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Date of Expiry" id="dateofexpiry1"><span class="help-block custom-block-hide" id="3v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Total Tickets</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Total Tickets" id="totaltickets1"><span class="help-block custom-block-hide" id="4v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Tickets Remaining</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Tickets Remaining" id="ticketsremaining1"><span class="help-block custom-block-hide" id="5v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Tickets Sold</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Sold Tickets" id="ticketsold1"><span class="help-block custom-block-hide" id="6v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Amount</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Amount" id="amount1"><span class="help-block custom-block-hide" id="7v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Status</label>
    <div class="col-sm-10">
    <input class="form-control  " type="text" placeholder="Enter Status" id="status1"><span class="help-block custom-block-hide" id="8v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Admin Id</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Admin Id" id="adminid1"><span class="help-block custom-block-hide" id="9v1"><small ></small></span>
    </div>
    </div><div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Winning Amount</label>
    <div class="col-sm-10">
    <input class="form-control numbersOnly" type="number" placeholder="Enter Winning Amount" id="winningamount1"><span class="help-block custom-block-hide" id="10v1"><small ></small></span>
    </div>
    </div>
                                            
                                                    </div>
                                                     </div>
                                             <div class="form-group row">
                                                <div class="col-md-4"> 
                                                      <button type="button" onclick="Updatecontest();" class="btn btn-primary waves-effect waves-light" style="width: 100%;">Update</button>
                                                </div>
                                              
                                                <div class="col-md-4"> 
                                                     <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal" id="btncancel1" aria-hidden="true" style="width: 100%;">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>









                    
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
<script src="functions/Staff.js"></script>
<script src="functions/contest.js"></script>
<!-- App js -->
<script src="../assets/js/app.js"></script>
</body>
</html>