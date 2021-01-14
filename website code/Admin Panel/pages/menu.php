<?php session_start(); ?>
<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu</title>
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
                              <a class="nav-link " href="Crecords.php" target="_blank"><i class="fas fa-fw fa-table"></i>Customer Records</a>
                              
                          </li>
                      
                          <li class="nav-item">
                              <a class="nav-link active" href="menu.php" target="_blank"><i class="fas fa-fw fa-file"></i> Menu </a>

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
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Menu Lists</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu</a></li>
                                    
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="dashboard-short-list">
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- shortable list  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Italian \ Pakistani Menu Items</h5>
                            <div class="card-body">
                               
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Item_ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Price</th>
                                          

                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php include 'OrderPHP.php';
                         
                                    while($row = mysqli_fetch_assoc($menuData))
                                    {
                                    ?>   
                                        <tr>

                                        <?php if($row['TYPE'] == "pakistani" || $row['TYPE'] == "italian" )
                                            {
                                            ?>  
                                            <td scope="row" id="eid" name="ItemDelid"><?php echo $row['ITEM_ID']; ?></td>
                                            <input type="text" id="editid" value="<?php echo $row['ITEM_ID']; ?> "  style="display:none;">
                                            <td id="fname"><?php echo $row['NAME']; ?></td>
                                            <td id="lname"><?php echo $row['DESCRIPTION']; ?></td>  
                                            <td id="con"><?php echo $row['TYPE']; ?></td>

                                            <td id="add"><?php echo $row['PRICE']; ?></td>
                                            <td>   <button class="btn btn-sm btn-outline-light" onclick="javascript:edit(<?php echo $row['ITEM_ID']; ?> )" >  Edit  Price</button></td>
                                           <td>   <button class="btn btn-sm btn-outline-light" >
                                              <a href="OrderPHP.php?Delitem=<?=$row['ITEM_ID']?>">  <i class="far fa-trash-alt"> </i> </a> 
                                            </button></td> 
                                        
                                      <?php
                                            }
                                      ?>
                                        </tr>
                                        
                                        <?php                                
                                            } 
                                    
                                        ?>  
                                         
                                    </tbody>
                                </table>
                                <table class="table table-hover insertBox">
                                <div  >
                          
                                    </div>
                                    </table>
                      </div>
                </div>
            </div>
        </div>
            <!--deserts-->
            <div class="row">
                        <!-- ============================================================== -->
                        <!-- shortable list  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Desserts</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Item Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Img</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php include 'OrderPHP.php';
                         
                                    while($row = mysqli_fetch_assoc($menuData))
                                    {
                                    ?>   
                                        <tr>

                                        <?php if($row['TYPE'] == "dessert" )
                                            {
                                            ?>  
                                            <td scope="row" id="eid" name="eidtid"><?php echo $row['ITEM_ID']; ?></td>
                                            <td id="fname"><?php echo $row['NAME']; ?></td>
                                            <td id="lname"><?php echo $row['DESCRIPTION']; ?></td>  
                                            
                                            <td id="add"><?php echo $row['PRICE']; ?></td>
                                       
                                            <td>   <button class="btn btn-sm btn-outline-light" onclick="javascript:edit(<?php echo $row['ITEM_ID']; ?> )">Edit  Price</button></td>
                                           <td>   <button class="btn btn-sm btn-outline-light">
                                           <a href="OrderPHP.php?Delitem=<?=$row['ITEM_ID']?>">  <i class="far fa-trash-alt"> </i> </a>
                                            </button></td> 
                                        
                                      <?php
                                            }
                                      ?>
                                        </tr>
                                        
                                        <?php                                
                                            } 
                                    
                                        ?>  
                                         
                                    </tbody>
                                </table>
                      </div>
                </div>
                </div>

     <!--drinks
     <div class="row"> -->
                        <!-- ============================================================== -->
                        <!-- shortable list  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Drinks</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    
                                        <tr>
                                            <th scope="col">Item_ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                         
                                            <th scope="col">Price</th>
                                          

                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                    <?php include 'OrderPHP.php';
                         
                                    while($row = mysqli_fetch_assoc($menuData))
                                    {
                                    ?>   
                                        <tr>

                                        <?php if($row['TYPE'] == "drink" )
                                            {
                                            ?>  
                                            <td scope="row" id="eid" name="eidtid"><?php echo $row['ITEM_ID']; ?></td>
                                            <td id="fname"><?php echo $row['NAME']; ?></td>
                                            <td id="lname"><?php echo $row['DESCRIPTION']; ?></td>  
                                            
                                            <td id="add"><?php echo $row['PRICE']; ?></td>
                                       
                                            <td>   <button class="btn btn-sm btn-outline-light" onclick="javascript:edit(<?php echo $row['ITEM_ID']; ?> )">Edit  Price</button></td>
                                           <td>   <button class="btn btn-sm btn-outline-light">
                                           <a href="OrderPHP.php?Delitem=<?=$row['ITEM_ID']?>">  <i class="far fa-trash-alt"> </i> </a>
                                            </button></td> 
                                        
                                      <?php
                                            }
                                      ?>
                                        </tr>
                                        
                                        <?php                                
                                            } 
                                    
                                        ?>  
                                         
                                    </tbody>
                                </table>
                      </div>
                </div>
            </div>
   </div>

   </div>       

   <!--insert new record -->
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Drinks</h5>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    
                                    <form action="OrderPHP.php" method="post">
                                    <tr>
                                            <th scope="col">Item Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Img</th>
                                        
                                      <tr>
                                    </thead>
                                    <tbody>
                                    <td> <input name="Iname" style="width:50%;" Required></td>
                                       <td> <input name="Des" style="width:50%;" Required></td>
                                       <td> <input name="Type" style="width:50%;" Required></td>
                                       <td> <input name="Price" style="width:50%;" Required></td>
                                       <td> <input type="file" name="pic"> </td>

                                     <th scope="col"><button class="btn btn-sm btn-outline-light" name="newrecord" >Insert New Record </button>
                                      </th>
                                    
                                    </tr>
                                    </form>
                                    </div>
                                    </table>
                                 
                                    </tbody>
                                </table>
                      </div>
                </div>
            </div>
   </div>

   </div>       
       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Enter New Price </h5>
        <input type="text" id="1" placeholder="" class="newPrice">
        <!-- <input type="test" name="newPrice" /> -->
         <!-- <input type="test" name="id" value="1" />  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        <button type="submit" name="truncData" class="btn btn-primary" onclick="edit()" >Yes</button>
        
      </div>
    </div>
  </div>
</div>
     <script language="javascript">

      function ShowModal(){
        var eid = document.getElementById('editid').value;
        console.log(eid);
          $('#exampleModal').modal();

      }
      function edit(id)
      {
           console.log(id);
         var newprice=prompt("Enter new price");
         console.log(newprice);
  
        // console.log($('.newPrice').val());
        // var eid = document.getElementById('editid').value;
        // console.log(eid);
         link = 'http://localhost/Admin%20panel/pages/OrderPHP.php?id='+id+'&newPrice='+newprice;
         console.log(link);
        $.get(link,function (data) { 
            console.log(data);
            location.reload();
        });
        
      }
    </script>             
    
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/shortable-nestable/Sortable.min.js"></script>
    <script src="../assets/vendor/shortable-nestable/sort-nest.js"></script>
    <script src="../assets/vendor/shortable-nestable/jquery.nestable.js"></script>
   
</body>
 
</html>