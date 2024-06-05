<html>
    <head>
        <title>Register</title>
      
        <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
      
    </head>
    <body>
<?php
session_start();
include 'connection.php';
 
if(isset($_POST['signin']))
{
   
    //storing inputs to variable
    $Email=$_POST['email'];
    $passwd=$_POST['passwd'];
    
    //selecting email and password from database that are similar to logging in email and password &assigning it to a variable
    $select="SELECT* from passengers where Email='$Email' && pswd='$passwd'";

    $query=mysqli_query($con,$select);
    $result=mysqli_fetch_assoc($query);
    $_SESSION['Email']=$Email;		

	if($result)
        {				
        

                header('location: userlogin.php');       
         }
    else
    {
        echo"<script>alert( 'Invalid input .Please check!')</script>";
       
    }
    
}

?>
  </script>
      <script src="bootstrap\js\jquery.js"></script>
      <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>
</html>