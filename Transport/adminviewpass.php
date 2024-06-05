<html >
<head>
    
    <title>Passrequest</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">
    <link rel="Stylesheet" href="Style.css">
</head>
<body>
    <header>
    <h2 class="welcome">Pass Requesting Passenger List</h2>
    </header>
   
  <section>          
    <?php
     

     include 'connection.php';

    //query for retrieve record from table
    $sql_query="Select * from passrequest ";
  
    //to execute query
    $result=mysqli_query($con,$sql_query) ;

    echo"<center><table  class='table table-hover table-bordered border-dark table w-25 text-center '>";
    echo "<thead class='bg-danger' >";
echo"<tr><th>Pass Request Number</th><th>Destination</th><th>Starting Date</th><th>Status</th><th>Email</th><th>ApproveRequest</th></tr>";
echo "</thead>";
    
    //To fetch row of data
   while( $row=mysqli_fetch_assoc($result))
   {

    echo "<tr><td>{$row['Passrequestno']}</td><td>{$row['Destination']}</td><td>{$row['Startingdate']}</td><td>{$row['Userstatus']}</td><td>{$row['Email']}</td>
    <td><button><a  href='adminacceptstatus.php?Passrequestno= {$row['Passrequestno']}'  style='text-decoration:none;'>Accept</a></button>
    </tr>";

   }
     
   echo"</table></center>";
  
?>

<a href="adminviewacceptedpass.php" class="signin"  >View Accepted Pass List</a>;

<hr size="20px" color="black">


<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>