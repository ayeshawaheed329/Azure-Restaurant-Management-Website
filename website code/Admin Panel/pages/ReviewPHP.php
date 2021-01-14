
<?php
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{
    //fetch Data of customers
    //Review
    $rev = "SELECT * FROM reviews";
    $review = mysqli_query($connection,$rev);
    if(!$review)
    {
       die("Querry failed!" );
    }

if(isset($_POST['reply']))
{
  
$msg=$_POST['msg'];
$add=$_POST['mail'];
$subject="Reply Of Your Review On Azure Resturant";
$msg = wordwrap($msg,70);
if(mail($add,$subject,$msg))
 {
   echo '<script language="javascript">';
   echo 'alert("Reply  has been send successfully!")';
   echo '</script>';  
   $URL="Reviews.php";
   echo "<script >location.href='$URL'</script>";
  
 }
 else
 {
   echo '<script language="javascript">';
   echo 'alert("Incorrect Email Or Network Problem!")';
   echo '</script>';  
   $URL="Reviews.php";
   echo "<script >location.href='$URL'</script>";  
 }  
 }


}
else
{   
die("can not connect:) Connection Failed ");
}
?>