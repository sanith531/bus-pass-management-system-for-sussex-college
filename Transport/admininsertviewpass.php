<?php

   
   //query for retrieve record from table
   $sql_query="Select Startingdate,Email from passrequest where Status='Accepted' ";
     
   //to execute query
   $result=mysqli_query($con,$sql_query) ;
   //To fetch row of data
if($row=mysqli_fetch_assoc($result))
{
$startingdate=$row['Startingdate'];
$Email=$row['Email'];

}
   
?>