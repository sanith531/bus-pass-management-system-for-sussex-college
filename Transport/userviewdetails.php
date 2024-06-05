<html >
<head>
    
    <title>Passrequest</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">
    <link rel="Stylesheet" href="Style.css">
</head>
<body>
    <header>
    <h2 class="welcome">Details</h2>
</header>

<section >
     <div >
     <h3 class="heading" >Bus Details</h3></header>

<?php
    
    include 'connection.php';
    //query for retrieve record from table
    $sql_query="Select Routes,Charge from busdetails group by Routes";
  
    //to execute query
    $result=mysqli_query($con,$sql_query) ;


    echo"<center><table  class='table table-hover table-bordered border-dark table w-25 text-center  '  >";
    echo "<thead class='bg-danger' >";
echo"<tr><th>Route</th><th>Charge</th></tr>";
echo "</thead>";
    
    //To fetch row of data
   while( $row=mysqli_fetch_assoc($result))
   {

    echo "<tr><td>{$row['Routes']}</td><td>{$row['Charge']}</td></td></tr>";
   }
     
   echo"</table> </center>";
  
   ?>
</section>
</div>

<script src="bootstrap\js\jquery.js"></script>
      <script src="bootstrap\js\bootstrap.min.js"></script>
   </body>
</html>