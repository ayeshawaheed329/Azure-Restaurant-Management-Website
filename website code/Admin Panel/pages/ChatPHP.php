<?php session_start(); ?>
<?php

/* Chat.php Backend 
Sending Email */
if(isset($_POST['submit']))
{
  
$msg =$_POST['editordata'];
$subject =$_POST['subject'];
$emailAdd =$_POST['EAdd'];
$msg = wordwrap($msg,70);
if(mail($emailAdd,$subject,$msg))
 {
    $_SESSION["mailed"]=true ;   
    header("Location:chat.php");
 }  

} 
?>