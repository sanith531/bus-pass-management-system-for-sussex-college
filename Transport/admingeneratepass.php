<?php
include 'connection.php';

?>
<html >
<head>
    <title>Login </title>
    <link rel="Stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">
    
</head>
<body >
        <form class="pass">
          <h3 class="passtitle"> Sussex  College  Transport  Pass  </h3>
         
          
      <?php
      include 'connection.php';
   
        $No=$_GET['No'];
      //query for retrieve record from table
      $sql_query="Select* from acceptedrequest where No='$No' ";
      
      //to execute query
      $result=mysqli_query($con,$sql_query) ;

      if(!mysqli_num_rows($result)==0)
      {
       $row=mysqli_fetch_assoc($result);
       echo"<h4>Pass No:  ",  $row['No'],"</h4><br>";
       echo"<h4>Pass Starting Date:  ",  $row['StartingDate'],"</h4><br>";
       echo"<h4>Email:  ",  $row['Email'],"</h4><br>";
       echo"<h4>Pass valid for one month from Starting date</h4><br><br>";
       echo"<h5>Sharing your pass with others or any other violation lead the pass invalid.<br>Make sure to renew the pass after expiry. </h>";

      }
    
      ?>
             
</form>
  
<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>


</body>
</html>