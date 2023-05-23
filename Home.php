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
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper"> 
        <div class="page-content">
            <div class="container-fluid">



                <!--===================== slider ============================ -->



                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body"> 
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="assets/images/sliderimg1.jpeg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="assets/images/sliderimg2.jpeg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="assets/images/sliderimg3.jpeg" alt="Third slide">
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->   
                </div> <!-- end row --> 



                <!--==================== section 2 =================== -->



                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg1.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg3.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->



                <!-- ========================section 3 ====================-->


                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg2.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg2.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg2.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg2.jpeg" alt="Card image cap"> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->



                <!--==================== section 4 ==================== -->



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="assets/images/sliderimg3.jpeg" alt="Card image cap"> 

                            </div>
                        </div><!--end card-body-->    
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->




            <!--==================== section 5 ==================== -->



            <div class="row mb-5 section5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top img-fluid mb-5" src="assets/images/section5img.png" alt="Card image cap"> 
                        </div>
                    </div><!--end card-body-->    
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
       

</div><!-- container -->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<?php include 'footer.php';?>
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="../assets/js/jquery.core.js"></script>

<!--Plugins-->

<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

<script src="../assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/app.js"></script>


<script src="functions/Staff.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>