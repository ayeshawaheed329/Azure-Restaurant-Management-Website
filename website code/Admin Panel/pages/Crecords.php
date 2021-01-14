<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer-info</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index.html" style="color: black">AZURE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <!-- <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </li> -->
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../finance.php?id=1" alt="" class="user-avatar-md rounded-circle" style="width:50px;height:50px"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">Ayesha Waheed </h5>
                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>
                        <a class="dropdown-item" href="AdminAccountChanges.php?"><i class="fas fa-user mr-2"></i>Account</a>
                        <a class="dropdown-item" href="../../index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
       
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar " style="background-color: black; color: white" >
          <div class="menu-list">
              <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black; color: white">
                  <a class="d-xl-none d-lg-none" href="#">Finance</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav" style="background-color: black; color: white">
                      <ul class="navbar-nav flex-column">
                          <li class="nav-divider">
                              Menu
                          </li>
                          <li class="nav-item ">
                              <a class="nav-link " href="../index.php" target="_blank" ><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                          </li>
                         
                          <li class="nav-item">
                              <a class="nav-link " href="Erecords.php"  target="_blank"><i class="fas fa-fw fa-table"></i>Employee Records</a>
                              
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="Crecords.php" target="_blank"><i class="fas fa-fw fa-table"></i>Customer Records</a>
                              
                          </li>
                      
                          <li class="nav-item">
                              <a class="nav-link" href="menu.php" target="_blank"><i class="fas fa-fw fa-file"></i> Menu </a>

                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="chat.php" target="_blank"><i class="fas fa-fw fa-inbox"></i>Chat</a>
                             
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Reviews.php " target="_blank"><i class="fas fa-fw fa-columns"></i>Reviews</a>
                          </li>
                      
                      </ul>
                  </div>
              </nav>
          </div>
      </div>        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Customer Records </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Customer Records</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                      
                      
                    
                        <!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Registered Customer</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Password</th>
                                                <th scope="col"></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php include 'CustomerPHP.php';
                                         
                                        while($row = mysqli_fetch_assoc($result))
                                        {   
                                        ?> 
                                            <tr>
                                            <td scope="row" id="eid" name="eidtid"><?php echo $row['CID']; ?></td>
                                            <td id="fname"><?php echo $row['FirstName']; ?></td>
                                            <td id="lname"><?php echo $row['LastName']; ?></td>
                                            <td id="con"><?php echo $row['username']; ?></td>
                                            <td id="add"><?php echo $row['password']; ?></td>
                                            <td><a class="btn btn-sm btn-outline-light" href="CustomerPHP.php?DelID=<?=$row['CID']?>"  ><i class="fa fa-trash"></i></a></td>
                                       
                                            </tr>
                                            <?php                                
                                            } 
                                            ?>      
                                          
                                        </tbody>
                                        
                                    </table>
                                    <button type="button" class="btn btn-primary btn-sm mt-2" style="float:right" data-toggle="modal" data-target="#exampleModal">Delete Records</button>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                        <!-- ============================================================== -->


                          <!-- ============================================================== -->
                        <!-- Order table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Total Orders</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer_ID</th>
                                                <th scope="col">No_Pak Items</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">No_Italian Items</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">No_Desserts</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">No_Drinks</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Total</th>
                                             

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php include 'CustomerPHP.php';
                         
                         while($row = mysqli_fetch_assoc($result1))
                         {   
                         ?> 
                             <tr>
                             <td scope="row"  name="eidtid"><?php echo $row['OID']; ?></td>
                             <td ><?php echo $row['CID']; ?></td>
                             <td ><?php echo $row['No_PItems']; ?></td>
                             <td ><?php echo $row['Price_Pitem']; ?></td>
                             <td ><?php echo $row['No_IItems']; ?></td>
                             <td ><?php echo $row['Price_Iitem']; ?></td>
                             <td ><?php echo $row['No_Deserts']; ?></td>
                             <td ><?php echo $row['Price_Deserts']; ?></td>
                             <td ><?php echo $row['No_Drinks']; ?></td>
                             <td ><?php echo $row['Price_Drinks']; ?></td>
                             <td ><?php echo $row['Total']; ?></td>
                             </tr>
                             <?php                                
                             } 
                             ?>   
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <!-- ============================================================== -->
                         <!-- end Order Table -->
                         <!-- ============================================================== -->


                              <!-- ============================================================== -->
                        <!-- Table Reservation table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Table Reservations</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col">Reservation_ID</th>
                                                <th scope="col">Customer_ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Persons</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php include 'CustomerPHP.php';
                         
                         while($row = mysqli_fetch_assoc($result2))
                         {   
                         ?> 
                             <tr>
                             <td scope="row"  name="eidtid"><?php echo $row['RID']; ?></td>
                             <td ><?php echo $row['CID']; ?></td>
                             <td ><?php echo $row['Name']; ?></td>
                             <td ><?php echo $row['phone']; ?></td>
                             <td ><?php echo $row['email']; ?></td>
                             <td ><?php echo $row['date']; ?></td>
                             <td ><?php echo $row['time']; ?></td>
                             <td ><?php echo $row['person']; ?></td>
                             <td><a class="btn btn-sm btn-outline-light" href="CustomerPHP.php?DelRID=<?=$row['RID']?>" name="link1"  ><i class="fa fa-trash"></i></a></td>
                                          
                             </tr>
                             <?php                                
                             } 
                             ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <!-- ============================================================== -->
                         <!-- end Order Table -->
                         <!-- ============================================================== -->

                    </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Are you sure you want to delete all  the records of customers .</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="CustomerPHP.php" method="POST">
        <button type="submit" name="truncData" class="btn btn-primary" >Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>