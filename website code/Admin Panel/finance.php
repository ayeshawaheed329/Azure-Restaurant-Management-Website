<?php
$connection = mysqli_connect('localhost','root','','rms');
    if($connection)
    {
    //total order    
    $FeetchingData = "SELECT count(*)  FROM `order`";
    $result = mysqli_query($connection,$FeetchingData);
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
    $totalCus=$row['0'];
    
    //for img
    if(isset($_GET['id']))
    {
    $id = $_GET['id'];
    // $FeetchingData = "SELECT Email , Password FROM `admin` where ID = $id " ;
    // $result = mysqli_query($connection,$FeetchingData);
    // $Online = $result->fetch_assoc();
    // $OnlineEmail = $Online['Email']
    // $onlinePwd = $Online['Password'];

    $FeetchingData = "SELECT Img FROM `admin` where ID = $id " ;
    $result = mysqli_query($connection,$FeetchingData);
    $imgData = $result->fetch_assoc();
    header("Content-type: image/jpg"); 
    echo $imgData['Img']; 
   // header("Content-type: image/jpeg");
   // $image_data=$row['0'];
    }

    //total Reviews
    $FeetchingData = "SELECT count(*)  FROM `reviews`";
    $result = mysqli_query($connection,$FeetchingData);
    $review=mysqli_fetch_array($result,MYSQLI_NUM);
   

    //total customer
    $FeetchingData = "SELECT count(*)  FROM `signup`";
    $result = mysqli_query($connection,$FeetchingData);
    $cus=mysqli_fetch_array($result,MYSQLI_NUM);
     
    //Total employees
    $FeetchingData = "SELECT count(*)  FROM `employee`";
    $result = mysqli_query($connection,$FeetchingData);
    $emp=mysqli_fetch_array($result,MYSQLI_NUM);

    //current Date
    $Day1 = "2019-11-24";
    $FeetchingData = "SELECT sum(No_PItems) , sum(No_IItems) , sum(No_Deserts)  FROM `order` where Date = '$Day1' ";
    $result = mysqli_query($connection,$FeetchingData);
    $P1=mysqli_fetch_array($result,MYSQLI_NUM);

    $Day2 = "2019-11-23";
    $FeetchingData = "SELECT sum(No_PItems) , sum(No_IItems) , sum(No_Deserts)  FROM `order` where Date = '$Day2' ";
    $result = mysqli_query($connection,$FeetchingData);
    $P2=mysqli_fetch_array($result,MYSQLI_NUM);


    $Day3 ="2019-11-23";
    $FeetchingData = "SELECT sum(No_PItems) , sum(No_IItems) , sum(No_Deserts)   FROM `order` where Date = '$Day3' ";
    $result = mysqli_query($connection,$FeetchingData);
    $P3=mysqli_fetch_array($result,MYSQLI_NUM);
   


    $Day4 = "2019-11-22";
    $FeetchingData = "SELECT sum(No_PItems) , sum(No_IItems) , sum(No_Deserts)  FROM `order` where Date = '$Day4' ";
    $result = mysqli_query($connection,$FeetchingData);
    $P4=mysqli_fetch_array($result,MYSQLI_NUM);

    //Sale
    $FeetchingData = "SELECT sum(Price_Pitem) , sum(Price_Iitem) , sum(Price_Deserts) , sum(Price_Drinks)  FROM `order` ";
    $result = mysqli_query($connection,$FeetchingData);
    $chart=mysqli_fetch_array($result,MYSQLI_NUM);

    //Revenue 
    $FeetchingData = "SELECT sum(Price_Pitem) + sum(Price_Iitem) + sum(Price_Deserts) + sum(Price_Drinks)  FROM `order` ";
    $result = mysqli_query($connection,$FeetchingData);
    $price=mysqli_fetch_array($result,MYSQLI_NUM);

    $FeetchingData = "SELECT sum(No_PItems) , sum(No_IItems) , sum(No_Deserts) , sum(No_Drinks)  FROM `order` ";
    $result = mysqli_query($connection,$FeetchingData);
    $quantity=mysqli_fetch_array($result,MYSQLI_NUM);


    $revenue = $price['0'] * $quantity['0'];
    $avg = $revenue / $totalCus;
    }
              
else
{
    echo "Connection Failed ";
}
?>