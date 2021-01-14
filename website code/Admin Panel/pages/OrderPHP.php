<?php
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{
   
    $FetchingData = "SELECT * FROM `menu` ";
    $menuData = mysqli_query($connection,$FetchingData);
    if(!$menuData)
    {
       die("Querry failed!");
    }
}
else
{   
die("can not connect:) Connection Failed ". mysql_error( $connection));
}

    //Deleting Menu item
    //delete Data
    if(isset($_GET['Delitem'])){
       
        $del = "DELETE FROM menu WHERE ITEM_ID = {$_GET['Delitem']} ";
       $delresult = mysqli_query($connection,$del);
        if($delresult)
        {
            header("Refresh:0; url=menu.php");
        }
        else
        echo "ERROR !!! Querry Failed";
    } 

    //Inserting new item
    if(isset($_POST['newrecord']))
{
   
    $name= $_POST['Iname'] ;
    $des= $_POST['Des'] ;
    $type= $_POST['Type'] ;
    $price= $_POST['Price'] ;
    $pic= $_POST['pic'] ;
   
    $insert = "INSERT INTO menu (Name,DESCRIPTION,TYPE,PRICE,Img) VALUES ('$name','$des','$type','$price','$pic')";
    $result = mysqli_query($connection,$insert);
    if($result)
    {
        header("Refresh:0; url=menu.php");
    }
    else
    echo "ERROR !!! Querry Failed";
}

if(isset($_GET['id']) && isset($_GET['newPrice']))
{
   $newP = $_GET['newPrice'];
   $i = $_GET['id'];
   $deleteData = "UPDATE menu  SET PRICE = $newP  WHERE ITEM_ID = $i  ";
   $result = mysqli_query($connection,$deleteData);
   if($result){
    echo '<script language="javascript">';
    echo '</script>';  
    $URL="menu.php";
    echo "<script >location.href='$URL'</script>";
   }
   else
   echo "Querry Failed";

} 


?>