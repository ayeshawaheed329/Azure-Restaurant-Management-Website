<?php 

$link = mysqli_connect("localhost", "root", "", "rms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// 
$price=0;

// echo $count;
   //  if($_POST['submit1p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*1050);
   //  }
   //  if($_POST['submit1m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*1050);
   //  }

   //  if($_POST['submit2p']){
   //  		$count=$_POST['pd2'];
   //  		$count=$count+1;
			// // echo"<script>alert('$count');</script>";
			// $price=$price+($count*600);
   //  }
   //  if($_POST['submit2m']){
   //  		$count=$_POST['pd2'];
   //  		$count=$count-1;
			// // echo"<script>alert('$count');</script>";
			// $price=$price+($count*600);;
   //  }

   //  if($_POST['submit3p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*1600);
   //  }
   //  if($_POST['submit3m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  echo"<script>alert('$count');</script>";
			// $price=$price+($count*1600);
   //  }

   //  if($_POST['submit4p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*700);
   //  }
   //  if($_POST['submit4m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  echo"<script>alert('$count');</script>";
			// $price=$price+($count*700);
   //  }

   //  if($_POST['submit5p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*900);
   //  }
   //  if($_POST['submit5m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*900);
   //  }

   //  if($_POST['submit6p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*850);
   //  }
   //  if($_POST['submit6m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*850);
   //  }

   //  if($_POST['submit7p']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count+1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*400);
   //  }
   //  if($_POST['submit7m']){
   //  		$count=$_POST['pd1'];
   //  		$count=$count-1;
			//  // echo"<script>alert('$count');</script>";
			// $price=$price+($count*400);
   //  }
$price=0;
    if($_POST['order1']){
    	$price= ($_POST['pd1']*1050)+($_POST['pd2']*600)+($_POST['pd3']*1600)+($_POST['pd4']*700)+($_POST['pd5']*900)+($_POST['pd6']*850)+($_POST['pd7']*400);
    	    echo "<script> alert('Order Confirmed!  Total bill= ". $price ."  For details, check email');
            window.location.href='/project/index.php';  
            </script>";
    }

    $pk=$_POST['pd1']+$_POST['pd2'];
    $it=$_POST['pd3']+$_POST['pd4'];
    $de=$_POST['pd5']+$_POST['pd6'];
    $dr=$_POST['pd7'];

    $pp=($_POST['pd1']*1050)+($_POST['pd2']*600);
    $pi=($_POST['pd3']*1600)+($_POST['pd4']*700);
    $pd=($_POST['pd5']*900)+($_POST['pd6']*850);
    $pdr=($_POST['pd7']*400);

	$sql= "INSERT INTO order ('cid', 'No_PItems', 'No_IItems','No_Deserts', 'No_Drinks', Price_Pitem, Price_Iitem, Price_Deserts, Price_Drinks, 'Total', 'Date') VALUES ($id,'$pk','$it','$de','$dr','$pp','$pi','$pd','$pdr', sysdate)";

//	echo $price;






?>