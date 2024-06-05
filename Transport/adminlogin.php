<?php
include 'connection.php';
 

if(isset($_POST['signin']))
{
   
    //storing inputs to variable
    $Email=$_POST['email'];
    $passwd=$_POST['passwd'];
    
    //selecting email and password from database that are similar to logging in email and password &assigning it to a variable
    $select="SELECT* from admindetails where Email='$Email' && Password='$passwd'";

    $query=mysqli_query($con,$select);
    $row=mysqli_num_rows($query);

        if($row==1 &&!is_null($Email))
                {
                    session_start();
                    $_SESSION['Email']=$Email;
                      header('location: Admin.html');
                }
       
    

         else
            {
                echo"Invalid input .Please check!";

            }
}

?>