<?PHP
 $connection = mysqli_connect("localhost","root","","rms");
if($connection)
 {
    header("Refresh:0; url=index.php");
//     $FeetchingData = "SELECT * FROM menu where TYPE = 'pakistani' ";
//     $pakistani = mysqli_query($connection,$FeetchingData);
//     if(!$pakistani)
//     echo "Querry Failed";

//     $FeetchingData = "SELECT * FROM menu where TYPE = 'italian' ";
//     $italian = mysqli_query($connection,$FeetchingData);
//     if(!$italian)
//     echo "Querry Failed";
 
//     $FeetchingData = "SELECT * FROM menu where TYPE = 'dessert' ";
//     $des = mysqli_query($connection,$FeetchingData);
//     if(!$des)
//     echo "Querry Failed";

//     $FeetchingData = "SELECT * FROM menu where TYPE = 'drink' ";
//     $drink = mysqli_query($connection,$FeetchingData);
//     if(!$drink)
//     echo "Querry Failed";


// //add an alert message which simply takes address as input!

// if(isset($_GET['pp']) && isset($_GET['pq']) && isset($_GET['ip']) && isset($_GET['iq']) && isset($_GET['dsp']) && isset($_GET['dsq']) && isset($_GET['drp']) && isset($_GET['drq']) )
// {

//     $pp = $_GET['pp'] ;
//     $pq = $_GET['pq'] ;
//     $ip = $_GET['ip'] ;
//     $iq = $_GET['iq'] ;
//     $dsp = $_GET['dsp'] ;
//     $dsq = $_GET['dsq'] ;
//     $drp = $_GET['drp'] ;
//     $drq = $_GET['drq'] ;
//     $total =  $pp + $pq + $ip +$iq +$dsp +$dsq+ $drp + $drq;
//     $day = date("Y-m-d", strtotime('0 day'));
//     $time=date("h:i:sa");
//     $insert = "INSERT INTO `delivery` (No_PItems,No_IItems,No_Deserts,No_Drinks,Price_Pitem,Price_Iitem,Price_Deserts,Price_Drinks,Total,Date,Time) VALUES ($pq,$iq,$dsq,$drq,$pp,$ip,$dsp,$drp,$total,'$day','$time')";
//     $result = mysqli_query($connection,$insert);
//     if(!$result)
//     echo "querry failed";
// }
// }
else
{
    echo "Connection Failed ";
}


?>