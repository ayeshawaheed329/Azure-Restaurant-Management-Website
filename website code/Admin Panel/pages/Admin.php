
<?PHP
$connection = mysqli_connect('localhost','root','','rms');
if($connection)
{
    $FeetchingData = "SELECT * FROM employee e inner join job j where e.JobID=j.JID";
    $result = mysqli_query($connection,$FeetchingData);
    if($result)
    $name ="fetched";

}
else
{
    echo "Connection Failed ";
}

//delete Data
if(isset($_GET['DelID'])){
    $deleteData = "DELETE FROM employee WHERE EID = {$_GET['DelID']} ";
    $result = mysqli_query($connection,$deleteData);
    if($result)
    {
        header("Refresh:0; url=Erecords.php");
    }
    

}
//Edit Data


//Inserting Data
if(isset($_POST['Ok']))
{
   
    $fname= $_POST['fname'] ;
    $lname= $_POST['lname'] ;
    $con= $_POST['contact'] ;
    $add= $_POST['address'] ;
    $shift= $_POST['shift'] ;
    $jid= $_POST['jid'] ;
    $insert = "INSERT INTO employee (FirstName,LastName,Contact,Address,Shift,JobID) VALUES ('$fname','$lname',$con,'$add','$shift',$jid)";
    $result = mysqli_query($connection,$insert);
    if($result)
    {
        header("Refresh:0; url=Erecords.php");
    }
    else
    echo "ERROR !!! Querry Failed";
} 


//Edit Data

if(isset($_POST['SaveChanges']))
{
    

    $iid=$_POST['eid'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $cnt =$_POST['cnt'];
    $add =$_POST['add'];
    $shift =$_POST['shift'];
    $jid =$_POST['jid'];
    if($fname != NULL)
    {
        $query = "UPDATE employee  SET FirstName = '$fname'  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
    }  
    if($lname != NULL)
    {
        $query = "UPDATE employee  SET LastName = '$lname'  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
    }  
    if($cnt != NULL)
    {
        $query = "UPDATE employee  SET LastName = $cnt  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
    
    }  
    if($add != NULL)
    {
        $query = "UPDATE employee  SET Address = '$add'  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
       
    } 
    if($shift != NULL)
    {
        $query = "UPDATE employee  SET Shift = '$shift'  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
        
    }   
    if($jid != NULL)
    {
        $query = "UPDATE employee  SET JobID = $jid  WHERE EID = $iid  ";
        $result = mysqli_query($connection,$query);
      
    }  

    header("Refresh:0; url=Erecords.php");
}



?>