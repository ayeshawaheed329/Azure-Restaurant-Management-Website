<?php session_start(); ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/select2/css/select2.css">
    <link rel="stylesheet" href="../assets/vendor/summernote/css/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <title>Account</title>
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
                              <a class="nav-link active" href="../index.php" target="_blank" ><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                          </li>
                         
                          <li class="nav-item">
                              <a class="nav-link " href="Erecords.php"  target="_blank"><i class="fas fa-fw fa-table"></i>Employee Records</a>
                              
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
        <form class="splash-container mx-auto ml-5" action="AdminAccountPHP.php" method="POST">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="mb-1">Admin Profile</h3>
                    <p>Create New Account</p>
                </div>
                <div class="card-body">

                    <div class="form-group">
                     <div class="row">
                      <div class="col">
                        <input class="form-control form-control-lg" type="text" name="fname" required="" placeholder="First Name" autocomplete="off">
                      </div>
                      <div class="col">
                        <input class="form-control form-control-lg" type="text" name="lname" required="" placeholder="Last Name" autocomplete="off">
                      </div>
                     </div>   
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass1" type="password" name="password" required="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass2" type="password" name="repassword" required="" placeholder="Repeat Password">
                        <small class="text-danger"> <?php  if(isset($_SESSION["msg"])) 
                                     { echo $_SESSION["msg"]; 
                                      session_unset();
                                      session_destroy();
                                      } ?> </small>
                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pic" type="file" name="pic" required="" placeholder="Upload Img" accept="image/*" style="border:none;">
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating new account , you agree the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit" name="signup" >Sign Up</button>
                    </div>
                  
                    <div class="form-group row pt-0">
                       
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                        </div>
                    </div>
                </div>
               
            </div>
            <?php  if(isset($_SESSION["InsResult"])) 
                                     { 
                                        echo '<script language="javascript">';
                                        echo 'alert("Password Has Changed ")';
                                        echo '</script>';
                                        session_unset();
                                        session_destroy();
                                      } ?>
  
        </form>
    
   
   
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/select2/js/select2.min.js"></script>
    <script src="../assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({ tags: true });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300

        });
    });
    </script>
</body>
 
</html>