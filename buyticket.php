
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



                <!--===================== section 1 ============================ -->

             <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="assets/images/products/2.jpg" alt="" class=" mx-auto  d-block" height="400">                                           
                                        </div><!--end col-->
                                        <div class="col-lg-6 align-self-center">
                                            <div class="single-pro-detail">
                                                <p class="mb-1">Buy Ticket</p>
                                                <div class="custom-border mb-3"></div>
                                                <h1 class="pro-price">$100,000,00</h1>
                                                <h3 class="pro-title">Contest Name</h3>                                         
                                                                                              
                                                <h5 class="text-muted font-13">Tickets Available : 55</h5> 
                                                <p class="text-muted font-12">Are you ready for an exciting contest? Participate in our thrilling event and showcase your skills! This contest is your chance to shine and demonstrate your talent. Whether you are an artist, a writer, a singer, or have any other creative passion, this contest welcomes participants from all backgrounds.</p> 
                                                <h5 class="text-muted font-13">Ticket PRice</h5> 
                                                <h2 class="pro-price"><span></span>$200</h2>

                                           
                                                
                                                <div class="quantity mt-3 ">
                                                    <a  onclick="buyticket();" class="btn btn-primary text-white px-4 d-inline-block">Buy Now</a>
                                                </div>                                             
                                            </div>
                                        </div><!--end col-->                                            
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->




            </div><!-- container -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
   <!-- // paste footer here -->
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


<script src="functions/buyticket.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>