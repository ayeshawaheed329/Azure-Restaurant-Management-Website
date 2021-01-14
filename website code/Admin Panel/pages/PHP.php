
<?PHP
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{
    $FeetchingData = "SELECT * FROM menu";
    $result = mysqli_query($connection,$FeetchingData);
    if($result)
    $name ="fetched";

}
else
{
    echo "Connection Failed ";
}