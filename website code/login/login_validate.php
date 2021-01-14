<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "rms");
 $CID=0;
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
	$username = $_POST['username'];
	$password = $_POST['pass'];
    $_SESSION['chk'] = true;

$query = "SELECT * FROM signup where username = '$username' AND password = '$password' ";
$sql = mysqli_query($link,$query);
$data = mysqli_fetch_array($sql, MYSQLI_NUM);

//admin
$query1 = "SELECT * FROM admin where Email = '$username' AND Password = '$password' ";
$sql2 = mysqli_query($link,$query1);
$data1 = mysqli_fetch_array($sql2, MYSQLI_NUM);
	if($data != 0){
            // $check=true;
            $query = "SELECT * FROM signup where username = '$username'";
            $sql = mysqli_query($link,$query);
            $data = $sql->fetch_assoc();
            $val=$data['CID'];
            
            header("Location:/project/Resturant Management System/hidden.php?cid=".$val);
        }
     else  if($data1 != 0){
            // $check=true;
          
             header("Location:/project/Resturant Management System/Admin Panel/index.php?");
        }      
    else{

        	echo "<script> alert('username and password was incorrect');
            window.location.href='login.php';
            </script>";
             

    }
        



?>