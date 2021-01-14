<?php session_start(); ?>
<?php
$connection = mysqli_connect('localhost','root','','rms');
if(isset($_POST['signup']))
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $repass = $_POST['repassword'];
   $pic = $_POST['pic'];
   if($pass != $repass)
   {
    $_SESSION["msg"]="Password is not matching" ;   
    header("Location:AdminAccount.php");
   }
   else
   {
    
      if($connection)
      {  
      $insert = "INSERT INTO Admin (FirstName,LastName,Email,Password,Img) VALUES ('$fname','$lname','$email','$pass','$pic')";
      $result = mysqli_query($connection,$insert);
      if($result)
      {
         $_SESSION["InsResult"]=true ;   
         header("Location:AdminAccount.php");
      
        
         
      }
      else
      {
         die("Querry failed!" . mysql_error($result));
      }
      }
      else
      {   
      die("can not connect:". mysql_error( $connection));
      }
   }
}
if(isset($_POST['changes']))
{
  
   $email = $_POST['email'];
   $pass = $_POST['currntpass'];
   $newpass = $_POST['newpass'];
   $check = false;
   if($connection)
   {  
     
      $FeetchingData = "SELECT * FROM Admin";
      $result = mysqli_query($connection,$FeetchingData);
      while($row = mysqli_fetch_assoc($result))
      {
        
      if($row['Email'] == $email && $row['Password'] == $pass)
      {
         
         $check = true;
         $query = "UPDATE Admin  SET Password = '$newpass'  WHERE Email = '$email'  ";
         $result = mysqli_query($connection,$query);
         if($result)
         {
           
         $_SESSION["correctMsg"] = true ; 
        //  echo $_SESSION["correctMsg"] ; 
         header("Location:AdminAccountChanges.php");
         }
         else
        {
         die("Querry failed!" . mysql_error($result));
         }

      }
      }
      if($check == false)
      {
         $_SESSION["incorrectMsg"] = "Email Or Password Is Incorrect" ;
        header("Location:AdminAccountChanges.php");
      }   
   }
   else
   {   
   die("can not connect:". mysql_error( $connection));
   }

}
?>