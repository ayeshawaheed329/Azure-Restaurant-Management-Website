
<?php 
session_start();
$link = mysqli_connect("localhost", "mariam", "marium", "customer");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
	$username = $_POST['username'];
	$password = $_POST['password'];


$query = "SELECT * FROM signup where username = '$username' AND password = '$password' ";
$sql = mysqli_query($link,$query);

	if(mysqli_num_rows($sql)==1){
         
             header("location:menu.php");
        }    
            else{
	            echo "username and password was incorrect";
	        }
        


mysqli_close($link);

?>