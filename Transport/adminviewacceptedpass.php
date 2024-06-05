
<html >
<head>
    
    <title>Passrequest</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">
    <link rel="Stylesheet" href="Style.css">
</head>
<body>
    <header> <h2 class="">Pass Requesting Passenger List</h2></header>
    
    <section>  
   <div>
  
  
<?php
include 'connection.php';

$sql_query2="Select * from acceptedrequest";
$result2= mysqli_query($con,$sql_query2);

echo"<center><table  class='table table-hover table-bordered border-dark table w-25 text-center '>";
echo "<thead class='bg-danger' >";
echo"<tr><td>No</td><th>StartingDate</th><th>Email</th><th>GeneratePass</th></tr>";
echo "</thead>";
while( $row2=mysqli_fetch_assoc($result2))
{

echo "<tr><td>{$row2['No']}</td><td>{$row2['StartingDate']}</td><td>{$row2['Email']}</td>
<th><a href='admingeneratepass.php?No={$row2['No']}' >Generate</a></th></tr>";

}

 echo'</table></center>';

?>
</div>

</section>

<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>