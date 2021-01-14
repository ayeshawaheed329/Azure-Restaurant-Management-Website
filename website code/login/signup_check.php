<?php 
session_start();
$link = mysqli_connect('localhost','root','','rms');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $fname = $_POST['fname'];    
    $lname = $_POST['lname']; 
	$username = $_POST['username'];
	$pass = $_POST['pass'];
    $reppass = $_POST['reppass'];



if($pass!=$reppass)
{
    echo "<script> alert('Passwords do not match. Please re-enter');
            window.location.href='signup.php';
            </script>";
}
else if ($pass==$reppass)
{
    $sql= "INSERT INTO signup (Firstname, Lastname, username, password) VALUES ('$fname','$lname','$username','$pass')";
}

if ($link->query($sql)==TRUE)
{
    echo "<script> alert('SignUp Successful!');
            window.location.href='/project/hidden.php';  
            </script>";
}else
{
    echo "<script> alert('Error in signing up. Please try again');
            window.location.href='signup.php';
            </script>";
}

$link->close();

?>