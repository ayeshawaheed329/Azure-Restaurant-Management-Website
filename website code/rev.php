
<?PHP
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{

    //Inserting Data
    $name= $_POST['name'] ;
    $email= $_POST['email'] ;
    $msg= $_POST['msg'] ;
    $Day1 = date("Y-m-d", strtotime('0 day'));
    $insert = "INSERT INTO `reviews` (`Name`,`Email`,`Msg`,`Date`) VALUES ('$name','$email','$msg','$Day1')";
    $result = mysqli_query($connection,$insert);
    if($result)
    {
        header("Refresh:0; url=index.php");
    }
    else
    echo "ERROR !!! Querry Failed";
}
else
{
    echo "Connection Failed ";
}