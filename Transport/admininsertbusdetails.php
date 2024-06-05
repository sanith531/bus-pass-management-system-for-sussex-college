<?php
include 'connection.php';
   //if form is submitted
if(isset($_POST['Save']))
{

    //assigning input values to variable
     $Route=$_POST['route'];
    $Charge=$_POST['charge'];
  
//inserting values to database
$sql_query="INSERT INTO busdetails ( Routes , Charge) VALUES( '$Route', '$Charge')"; 
     
    if(mysqli_query($con,$sql_query))
    {
        echo"<script>alert( 'You have successfully inserted bus details')</script>";

    }
    else
    {
        echo"<script>alert( 'Error')</script>";
    }
    //closing the connection
    mysqli_close($con);

}

?>