
<html >
<head>
    
    <title>Passengers</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">
     <link rel="Stylesheet" href="Style.css">

</head>
<body>
    <header><h2> Details</h2></header>
<section >
        <div >
        <h3 class="heading">Passengers Details</h3></header>
      
<?php

include 'connection.php';
//query for retrieve record from table
$sql_query="Select* from passengers ";

//to execute query
$result=mysqli_query($con,$sql_query) ;

echo"<center><table  class='table table-hover table-bordered border-dark table w-25 text-center  ''>";
echo "<thead class='bg-danger' >";
echo"<tr><th>FirstName</th><th>LastName</th><th>DOB</th><th>Gender</th><th>AddressDetails</th><th>PhoneNumber</th><th>Email</th><th>PassengerType</th><th>Destination</th><th>Password</th><th>Update</th></tr>";
echo "</thead>";

//To fetch row of data
while( $row=mysqli_fetch_assoc($result))
{

echo "<tr><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['DOB']}</td><td>{$row['Gender']}</td><td>{$row['AddressDetails']}</td><td>{$row['PhoneNumber']}</td><td>{$row['Email']}</td><td>{$row['PassengerType']}</td><td>{$row['Destination']}</td><td>{$row['Pswd']}</td>
<th><a href='adminuseredit.php? Email={$row['Email']}'>Edit</a></th></tr>";
}
 
echo"</table></center>";




 
?>
  <a  href='signup.html'  class="signin"  value="Sign in">Add new member</a>
</div><br>


</section>
<hr size="20px" color="black">
<div>
<section >
<h3 class="heading">Bus Details</h3></header>

<?php

include 'connection.php';
//query for retrieve record from table
$sql_query="Select * from busdetails ";
  
//to execute query
$result=mysqli_query($con,$sql_query) ;


echo"<center><table  class='table table-hover table-bordered border-dark table w-25 text-center'>";
echo "<thead class='bg-danger' >";
echo"<tr><th>PassengerNo</th><th>Route</th><th>Charge</th><th>Update</th><th>Delete</th></tr>";
echo "</thead>";
//To fetch row of data
while( $row=mysqli_fetch_assoc($result))
{

echo "<tr><td>{$row['Passengerno']}</td><td>{$row['Routes']}</td><td>{$row['Charge']}</td>
<th><a href='admineditbusdetails.php? Passengerno={$row['Passengerno']}'>Edit</a>
<th><a  href='admindeletebusdetails.php? Passengerno={$row['Passengerno']}'>Delete</a></th></tr>";
}

echo"</table></center>";


?>


<a  href='admininsertdetails.html'  class="signin"  value="Sign in">Add bus details</a>
</div>

</section>
<hr size="20px" color="black">
<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>