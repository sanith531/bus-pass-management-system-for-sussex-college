<?php

include 'connection.php';

if(isset($_GET['Passengerno']))
{
    
$Passengerno=$_GET['Passengerno'];
   
   //if edit option pressed
if(isset($_POST['submit']))
{
    $Route=$_POST['route'];
    $Charge=$_POST['charge'];
   
   
//query for retrieve record from table
$sql_query="UPDATE busdetails SET Routes= '$Route', Charge= '$Charge' where Passengerno='$Passengerno' " ;

if(mysqli_query($con,$sql_query))
{
    
    echo"<script>alert( 'You have successfully updated your details')</script>";
}
else
{
    echo"<script>alert( 'Error')</script>";
}

mysqli_close($con);
}
}

?>