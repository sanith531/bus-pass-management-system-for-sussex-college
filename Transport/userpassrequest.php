<?php
include 'login.php';

include 'connection.php';
   
if(isset($_SESSION['Email']))
{
    $Email=$_SESSION['Email'];

    if(isset($_POST['Submit']))
        {
    
            $Destination=$_POST['Destination'];
            $Startdate=$_POST['period'];
           
            
            $sql_query="INSERT INTO passrequest( Destination,Startingdate,Email) VALUES( '$Destination',' $Startdate','$Email')"; 
            $result=mysqli_query($con,$sql_query) ;
           
           if(($result))
            {
                echo"<script>alert( 'You have successfully requested the pass')</script>";
   
            
            }
            else
            {
                
                echo"<script>alert( 'Error')</script>";
            }
    
            //closing the connection
            mysqli_close($con);
        
        
        }
   
    }
?>