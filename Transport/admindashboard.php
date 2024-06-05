<html >
<head>
    <title>Dashboard</title>
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

 
//query for retrieve record from table
$sql_query="SELECT Count (Email) from passengers  ";


$query=mysqli_query($con,$sql_query);
$result=mysqli_fetch_assoc($query);
    
//to execute query

if($result)
      {
    echo "<form class='pass'><h3><br>The total Passengers echo['$result'];<br><h3></form>";
    }

mysqli_close($con);

?>
</div>

</section>

<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>

</body>
</html>