 
  <?php 

  $inventoryOpenCheck='No';
  for ($i=0; $i <  count($_SESSION['modules']); $i++) { 
      
      if($_SESSION['modules'][$i]['id']  == '1'){
        $inventoryOpenCheck='Yes';
      }
  }

  ?> 
  <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">
                    <li>
                        <a href="Home.php"><i class="ti-bar-chart"></i><span>Home</span></i></span></a>
                    </li>


                    <?php
                    if($inventoryOpenCheck == 'Yes' || $_SESSION['role']  == 'SuperAdmin'){

                        echo ' <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Inventory</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/InventoryDashboard.php"><i class="ti-control-record"></i>Dashbaord</a></li>
                        </ul>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Staff/Staff.php"><i class="ti-control-record"></i>Staff</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Site/InvSite.php"><i class="ti-control-record"></i>Site</a></li>
                        </ul>
                         <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/Product/InvProduct.php"><i class="ti-control-record"></i>Product</a></li>
                        </ul>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/InventoryManagement/InvEntry/Inventory.php"><i class="ti-control-record"></i>Inventory</a></li>
                        </ul>

                    </li>';

                    }



                     if($_SESSION['role']  == 'SuperAdmin'){
                            echo '
                        <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>not final Roles Rights</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                             <li class="nav-item"><a class="nav-link" href="Modules.php"><i class="ti-control-record"></i>Modules</a></li>
                            <li class="nav-item"><a class="nav-link" href="Roles.php"><i class="ti-control-record"></i>Roles</a></li>
                             <li class="nav-item"><a class="nav-link" href="Rights.php"><i class="ti-control-record"></i>Rights</a></li>
                             
                        </ul>
                       
                    </li>
                  ';
                        }

                    ?>

                   

                  
                </ul>
            </div>