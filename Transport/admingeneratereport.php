<html >
<head>
    <title>Generate Report</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="Style.css">
    
</head>
<body>
    
<div  >

<?php

include 'connection.php';


if(isset($_POST['Search']))
{
    $Destination=$_POST['Dest'];
//query for retrieve record from table
$sql_query="Select FirstName,LastName,AddressDetails ,Email from passengers where Destination='$Destination'";

//to execute query
$result=mysqli_query($con,$sql_query) ;
echo "<h3 class='heading'>Passengers of specific Destination </h3><br><br>";

echo"<table  class='table table-hover table-bordered border-dark'>";
echo "<thead class='bg-info' >";
echo"<tr><th>FirstName</th><th>LastName</th><th>AddressDetails</th><th>Email</th><th>Destination</th></tr>";
echo "</thead>";



//To fetch row of data
while( $row=mysqli_fetch_assoc($result))
{

echo "<tr><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['AddressDetails']}</td><td>{$row['Email']}</td><td>$Destination</td></tr>";
}
 
echo"</table>";
mysqli_close($con);

}
?>
</div>


<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>
