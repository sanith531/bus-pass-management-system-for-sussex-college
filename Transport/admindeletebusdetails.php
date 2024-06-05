<?php

include 'connection.php';


if(isset($_GET['Passengerno']))
{
 
 $passengerno=$_GET['Passengerno'];


//query for delete from table
$sql_query="DELETE from busdetails where Passengerno='$passengerno' ";

if(mysqli_query($con,$sql_query))

    {
        echo"<script>alert( 'You have succesfully deleted')</script>";
    }
    
else
{
    echo"<script>alert( 'Error')</script>";
    
}
 
mysqli_close($con);
}
?>
