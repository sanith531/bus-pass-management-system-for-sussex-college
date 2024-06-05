<html>
    <head>
        <title>Register</title>
      
        <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
      
    </head>
    <body>
        <?php

include 'connection.php';

   //if form is submitted
if(isset($_POST['submit']))
{
    //assigning input values to variable
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$DOB=$_POST['DOB'];
$Gender=$_POST['r1'];
$Addrss=$_POST['Addrss'];
$Email=$_POST['Email'];

$Pswd=$_POST['Pswd'];



//inserting values to database

$sql_query="INSERT INTO passengers(FirstName, LastName, DOB, Gender, AddressDetails, PhoneNumber,Email, PassengerType, Destination, Pswd) VALUES('$FirstName', '$LastName', '$DOB', '$Gender', '$Addrss', '$PhoneNumber','$Email', '$PassengerType', '$Destination','$Pswd')"; 
     

    if(mysqli_query($con,$sql_query))
    {
      
        echo"<script>alert( 'You have successfully registered')</script>";
       
    }
    else
    {
       
        echo"<script>alert( 'Error')</script>";

    }
    
    //closing the connection
    mysqli_close($con);

}

?>

   </script>
      <script src="bootstrap\js\jquery.js"></script>
      <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>
</html>