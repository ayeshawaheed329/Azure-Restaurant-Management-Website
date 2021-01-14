
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer - Reviews</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Mystyle.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body style="overflow-x: hidden;">
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
                              <a class="nav-link" href="Crecords.php" target="_blank"><i class="fas fa-fw fa-table"></i>Customer Records</a>
                              
                          </li>
                      
                          <li class="nav-item">
                              <a class="nav-link" href="menu.php" target="_blank"><i class="fas fa-fw fa-file"></i> Menu </a>

                          </li>
                          <li class="nav-item">
                              <a class="nav-link " href="chat.php" target="_blank"><i class="fas fa-fw fa-inbox"></i>Chat</a>
                             
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="Reviews.php " target="_blank"><i class="fas fa-fw fa-columns"></i>Reviews</a>
                          </li>
                      
                      </ul>
                  </div>
              </nav>
          </div>
      </div>             <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper mt-5">
            <div class="main-container">
                <div class="navbar breadcrumb-bar border-bottom">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin</a>
                            </li>
                           
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                        </ol>
                    </nav>
                    <div class="dropdown">
                        <button class="btn btn-outline-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Manage Members</a>
                            <a class="dropdown-item" href="#">Subscribe</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Leave Chat</a>
                        </div>
                    </div>
                </div>
                <div class="content-container" style="overflow-x:hidden;">
                    <div class="chat-module" style="overflow-x:hidden;">
                        <div class="chat-module-top">
                            <form>
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="search" class="form-control filter-list-input" placeholder="Search chat" aria-label="Search Chat">
                                </div>
                            </form>

                                
                            <div class="chat-module-body" style="overflow-x:hidden;">
                         <!--       <div class="media chat-item">
                                    <img alt="William" src="../assets/images/avatar-1.jpg" class="rounded-circle user-avatar-lg">
                                    <div class="media-body">
                                        <div class="chat-item-title">
                                            <span class="chat-item-author">William</span>
                                            <span>4 days ago</span>
                                        </div>
                                        <div class="chat-item-body">
                                            <p>Hey guys, Phasellus imperdiet arcu venenatis, malesuada nulla a, porta sem. Curabitur nec massa ultrices, consequat erat sit amet, luctus justo. Brand Concept &amp; Design!</p>
                                        </div>
                                    </div>
                                </div> -->

                                <?php include 'ReviewPHP.php' ;
                                while($row = mysqli_fetch_assoc($review))
                                {
                                ?>
                                 <div class="media chat-item">
                                        <img alt="William" src="../assets/images/avatar-1.jpg" class="rounded-circle user-avatar-lg">
                                        <div class="media-body">
                                            <div class="chat-item-title">
                                                <span class="chat-item-author"><?php echo $row['Name'] ; ?></span>
                                                <span> <?php echo $row['Date'] ; ?> </span>
                                            </div>
                                            <div class="chat-item-body">
                                                <p> <?php echo $row['Msg'] ; ?> </p>
                                            </div>
                                            <a href="?link=<?=$row['ID']?>" style="float:right" name="link">Reply</a> 
                                            <?php 
                                            if ((isset($_GET['link'])) && ($_GET['link']) == $row['ID'] )
                                            {
                                             $Eml = $row['Email'];    
                                            ?>
                            <div class="chat-module-bottom">

                            <form class="chat-form" action="ReviewPHP.php" method="POST" > 
                            <input type="text" style="display: none;" value="<?php echo $row['Email'] ?>" name="mail">

                                <textarea class="form-control" placeholder="Type message" rows="1" name="msg" Required></textarea>
                                <div class="chat-form-buttons">
                                    <button  class="btn btn-link" type="submit" name="reply">
                                    <i class="far fa-share-square"></i>
                                    </button>
                                    <div class="custom-file custom-file-naked">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">
                                            <i class="fas fa-paperclip"></i>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div> 

                        <?php
                        }
                        ?>    
                           </div>
                        </div> 
                                   
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                        <!-- <?php include 'ReviewPHP.php' ;
                         if($mailed) 
                                     { 
                                        echo '<script language="javascript">';
                                        echo 'alert("Reply Sent!")';
                                        echo '</script>';
                                      
                                      } ?> -->
                        <!-- <div class="chat-module-bottom">
                            <form class="chat-form">
                                <textarea class="form-control" placeholder="Type message" rows="1"></textarea>
                                <div class="chat-form-buttons">
                                    <button type="button" class="btn btn-link">
                                        <i class="far fa-smile"></i>
                                    </button>
                                    <div class="custom-file custom-file-naked">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">
                                            <i class="fas fa-paperclip"></i>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                    <!-- <div class="chat-sidebar collapse" id="sidebar-collapse">
                        <div class="chat-sidebar-content">
                            <div class="chat-team-sidebar text-small">
                                <div class="chat-team-sidebar-top">
                                    <div class="media align-items-center">
                                        <a href="#" class="mr-2">
                                            <img alt="Team Avatar" src="../assets/images/avatar-2.jpg" class="rounded-circle user-avatar-xl">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mb-1">Pipeline Fans</h5>
                                            <p>A collective of Pipeline enthusiasts sharing the the love</p>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="members-tab" data-toggle="tab" href="#members" role="tab" aria-controls="members" aria-selected="true">Members</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="files-tab" data-toggle="tab" href="#files" role="tab" aria-controls="files" aria-selected="false">Files</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-team-sidebar-bottom">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="members" role="tabpanel" aria-labelledby="members-tab" data-filter-list="list-group">
                                            <div id="test-list">
                                                <form class="px-3 mb-3">
                                                    <div class="input-group input-group-round">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            <i class="fas fa-search"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" class="form-control search" placeholder="Filter members" aria-label="Filter Members">
                                                    </div>
                                                </form>
                                                <div class="list-group list-group-flush  list">
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Claire Connors" src="../assets/images/avatar-1.jpg" class="avatar">
                                                            <div class="media-body ">
                                                                <h6 class="mb-0 name">Claire Connors</h6>
                                                                <span class="name">Administrator</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Marcus Simmons" src="../assets/images/avatar-2.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Marcus Simmons</h6>
                                                                <span class="name">Administrator</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Peggy Brown" src="../assets/images/avatar-3.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Peggy Brown</h6>
                                                                <span class="name">Project Manager</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Harry Xai" src="../assets/images/avatar-3.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Harry Xai</h6>
                                                                <span class="name">Project Manager</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Sally Harper" src="../assets/images/avatar-1.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Sally Harper</h6>
                                                                <span class="name">Developer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Ravi Singh" src="../assets/images/avatar-2.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Ravi Singh</h6>
                                                                <span class="name">Developer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="David Whittaker" src="../assets/images/avatar-3.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">David Whittaker</h6>
                                                                <span class="name">Designer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Kerri-Anne Banks" src="../assets/images/avatar-4.jpg"  class="avatar ">
                                                        <div class="media-body ">
                                                            <h6 class="mb-0 name ">Kerri-Anne Banks</h6>
                                                            <span class="name ">Marketing</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                    <a class="list-group-item list-group-item-action " href="# ">
                                                    <div class="media media-member mb-0 ">
                                                        <img alt="Masimba Sibanda " src="../assets/images/avatar-3.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Masimba Sibanda</h6>
                                                                <span class="name">Designer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="list-group-item list-group-item-action" href="#">
                                                        <div class="media media-member mb-0">
                                                            <img alt="Krishna Bajaj" src="../assets/images/avatar-2.jpg"  class="avatar ">
                                                        <div class="media-body ">
                                                            <h6 class="mb-0 name ">Krishna Bajaj</h6>
                                                            <span class="name ">Marketing</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                    <a class="list-group-item list-group-item-action " href="# ">
                                                    <div class="media media-member mb-0 ">
                                                        <img alt="Kenny Tran " src="../assets/images/avatar-1.jpg" class="avatar">
                                                            <div class="media-body">
                                                                <h6 class="mb-0 name">Kenny Tran</h6>
                                                                <span class="name">Contributor</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="files" role="tabpanel" aria-labelledby="files-tab" data-filter-list="dropzone-previews">
                                            <div id="test-list-2">
                                                <form class="px-3 mb-3">
                                                    <div class="input-group input-group-round">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                            <i class="fas fa-search"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" class="form-control search" placeholder="Filter members" aria-label="Filter Members">
                                                    </div>
                                                </form>
                                                <ul class="d-none dz-template list-unstyled">
                                                    <li class="list-group-item dz-preview dz-file-preview">
                                                        <div class="media align-items-center dz-details">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary dz-file-representation">
                                                                        <img src="https://jituchauhan.com/" class="avatar" data-dz-thumbnail="" alt="">
                                                                        <i class="fas fa-paperclip"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar" data-title="David Whittaker" data-toggle="tooltip">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div class="dz-file-details">
                                                                    <a href="#" class="dz-filename">
                                                                    <span data-dz-name=""></span>
                                                                </a>
                                                                    <br>
                                                                    <span class="text-small dz-size" data-dz-size=""></span>
                                                                </div>
                                                                <img alt="Loader" src="../assets/images/loader.svg" class="dz-loading">
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#" data-dz-remove="">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-danger btn-sm dz-remove" data-dz-remove="">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="progress dz-progress">
                                                            <div class="progress-bar dz-upload" data-dz-uploadprogress=""></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <form class="dropzone dz-clickable" action="http://mediumra.re/dropzone/upload.php">
                                                    <span class="dz-message">Drop files here or click here to upload</span>
                                                </form>
                                                <ul class="list-group list-group-activity dropzone-previews flex-column-reverse list-group-flush list ">
                                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null" data-e="null">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="Peggy Brown" src="../assets/images/avatar-1.jpg" class="avatar filter-by-data-title" data-title="Peggy Brown" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">client-questionnaire</a>
                                                                    <br>
                                                                    <span class="name">48kb Text Doc</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="Harry Xai" src="../assets/images/avatar-2.jpg" class="avatar filter-by-data-title" data-title="Harry Xai" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">moodboard_images</a>
                                                                    <br>
                                                                    <span class="name">748kb ZIP</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-image"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="Ravi Singh" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="Ravi Singh" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">possible-hero-image</a>
                                                                    <br>
                                                                    <span class="name">1.2mb JPEG image</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="Claire Connors" src="../assets/images/avatar-3.jpg" class="avatar filter-by-data-title" data-title="Claire Connors" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">LandingPrototypes</a>
                                                                    <br>
                                                                    <span class="name">415kb Sketch Doc</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="media align-items-center">
                                                            <ul class="avatars list-unstyled">
                                                                <li>
                                                                    <div class="avatar bg-primary">
                                                                        <i class="fas fa-file"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img alt="David Whittaker" src="../assets/images/avatar-4.jpg" class="avatar filter-by-data-title" data-title="David Whittaker" data-toggle="tooltip" data-filter-by="data-title">
                                                                </li>
                                                            </ul>
                                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <a href="#" class="name">Branding-Proforma</a>
                                                                    <br>
                                                                    <span class="name">15kb Text Document</span>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Download</a>
                                                                        <a class="dropdown-item" href="#">Share</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
    
    <script src="../assets/vendor/dropzone/dropzone.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>