<?PHP
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{
    //fetch Data of customers
    $FeetchingData = "SELECT * FROM signup";
    $result = mysqli_query($connection,$FeetchingData);
   
    if(!$result)
    {
       die("Querry failed!" );
    }
    
    if(isset($_POST['truncData']))
    {
    $Truncate = "TRUNCATE TABLE `signup` ";
    $result = mysqli_query($connection,$Truncate);
    if(!$result)
    {
       die("Querry failed!");
    }
    }
    $FetchingData = "SELECT * FROM `order` ";
    $result1 = mysqli_query($connection,$FetchingData);
    if(!$result1)
    {
       die("Querry failed!");
    }

    //fetch Data of customers
    $FetchingData = "SELECT * FROM `reservation` ";
    $result2 = mysqli_query($connection,$FetchingData);
   
    if(!$result2)
    {
       die("Querry failed!");
    }

    //delete Data
    if(isset($_GET['DelRID'])){
    $deleteData = "DELETE FROM reservation WHERE RID = {$_GET['DelRID']} ";
    $result = mysqli_query($connection,$deleteData);
    if($result)
    {
    header("Refresh:0; url=Crecords.php");
    }
    
    }
   
//delete Data
if(isset($_GET['DelID'])){
    $deleteData = "DELETE FROM signup WHERE CID = {$_GET['DelID']} ";
    $result = mysqli_query($connection,$deleteData);
    if($result)
    {

        header("Refresh:0; url=Crecords.php");
    }
    
    
}

    
} 
else
{   
die("can not connect:) Connection Failed ". mysql_error( $connection));
}   

?>