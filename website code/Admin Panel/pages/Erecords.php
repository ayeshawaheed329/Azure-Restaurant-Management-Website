<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employees - info</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Mystyle.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
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
                              <a class="nav-link active" href="Erecords.php"  target="_blank"><i class="fas fa-fw fa-table"></i>Employee Records</a>
                              
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Crecords.php" target="_blank"><i class="fas fa-fw fa-table"></i>Customer Records</a>
                              
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
      </div>
        <!-- ============================================================== -->
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
                            <h2 class="pageheader-title mt-5">Employee Records </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
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

                <div class="row" >
                    <!-- ============================================================== -->
                    <!-- bordered table -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- hoverable table -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Employee's Record</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Job ID </th>
                                            <th scope="col">Job </th>
                                            <th scope="col">Working Hours</th>
                                            <th scope="col">Salary</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php include 'Admin.php';
                         
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>   
                                        <tr>

                                            
                                            <td scope="row" id="eid" name="eidtid"><?php echo $row['EID']; ?></td>
                                            <td id="fname"><?php echo $row['FirstName']; ?></td>
                                            <td id="lname"><?php echo $row['LastName']; ?></td>
                                            <td id="con"><?php echo $row['Contact']; ?></td>
                                            <td id="add"><?php echo $row['Address']; ?></td>
                                            <td id="shift"><?php echo $row['Shift']; ?></td>
                                            <td id="jid"><?php echo $row['JobID']; ?></td>
                                            <td ><?php echo $row['Title']; ?></td>
                                            <td ><?php echo $row['WorkingHours']; ?></td>
                                            <td><?php echo $row['Salary']; ?></td>
                                            <?php $add = wordwrap($row['Address'],100); ?>
                                           <td><a class="btn btn-sm btn-outline-light" href="Admin.php?DelID=<?=$row['EID']?>" name="link1"  ><i class="fa fa-trash"></i></a></td>
                                           <td><a class="btn btn-sm btn-outline-light" href="EditSubPage.php?EditID=<?=$row['EID']?>&EditFN=<?=$row['FirstName']?>&EditLN=<?=$row['LastName']?>&Contact=<?=$row['Contact']?>&addr=<?=$add?>&Sh=<?=$row['Shift']?>&JI=<?=$row['JobID']?>"  name="editbutton" ><i class="fa fa-edit"></i></a></td> 
                                          
                                        </tr>
                                        
                                        <?php                                
                                            } 
                                    
                                        ?>  
                                         
                                    </tbody>
                                </table>
                                
                                <table class="table table-hover insertBox">
                                <div  >
                                    <form action="Admin.php" method="post">
                                    <tr>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Job ID</th>
                                        </tr>
                                      <tr>  
                                       <td> <input name="fname" style="width:50%;" Required></td>
                                       <td> <input name="lname" style="width:50%;" Required></td>
                                       <td> <input name="contact" style="width:50%;" Required></td>
                                       <td> <input name="address" style="width:50%;" Required></td>
                                       <td> <input name="shift" style="width:50%;"  Required></td>
                                       <td> <input name="jid" style="width:50%; " Required></td>

                                     <th scope="col"><button class="btn btn-sm btn-outline-light" name="Ok" >Insert New Record </button>
                                      </th>
                                    
                                    </tr>
                                    </form>
                                    </div>
                                    </table>
                               
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end hoverable table -->
                    <!-- ============================================================== -->
                </div>

                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->


       <!-- POP UP for editing-->

        <!-- Optional JavaScript -->
        <script>
        function editFunction()
        {
            document.getElementById("exampleModal").style.display = "block";
        }
        </script>
        <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
        <script src="../assets/libs/js/main-js.js"></script>
</body>

</html>