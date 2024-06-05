<html >
<head>
    <title>View Status</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="Style.css">
    <link rel="Stylesheet" href="loginstyle.css">
    </head>
<body>
    <header>
    <h3 class="heading">My Status</h3>
    </header>
   
  <section>   
<?php



include 'connection.php';
include 'login.php';

if(isset($_SESSION['Email']))
{
    $Email=$_SESSION['Email'];


   
//query for retrieve record from table
$sql_query="Select  Userstatus from passrequest where Email='$Email' and Userstatus like 'Accepted' ";


$query=mysqli_query($con,$sql_query);
$result=mysqli_fetch_assoc($query);
    
//to execute query

if($result)
      {
    echo "<form class='pass'><h3><br>Your request is approved.<br><br>Please collect the pass.<h3></form>";
    }
  
    
  //query for retrieve record from table
$sql_query1="Select  Userstatus from passrequest where Email='$Email' and Userstatus like 'Pending' ";


$query1=mysqli_query($con,$sql_query1);
$result1=mysqli_fetch_assoc($query1);
    
//to execute query

if($result1)
      {
    echo "<form class='pass'><h3>Sorry your request is not accepted yet.<h3></form>";
    }
    //if both above happen execute this
if(!$result1&&!$result)
{


  echo "<form class='pass'>Sorry,You are not requested the pass yet</form>";
}

        


mysqli_close($con);
}
?>
</div>

</section>

<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>