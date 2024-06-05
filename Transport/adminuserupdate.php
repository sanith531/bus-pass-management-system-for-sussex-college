<?php
include 'connection.php';

if(isset($_GET['Email']))
{
$Email=$_GET['Email'];

//if edit option pressed
if(isset($_POST['submit']))
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $DOB=$_POST['DOB'];
    $Gender=$_POST['Gender'];
    $Addrss=$_POST['Addrss'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $PassengerType=$_POST['PassengerType'];
    $Destination=$_POST['Destination'];
    $Pswd=$_POST['Pswd'];

//query for update record table
$sql_query="UPDATE passengers SET FirstName= '$FirstName', LastName= '$LastName', DOB='$DOB',Gender='$Gender',AddressDetails='$Addrss',PhoneNumber='$PhoneNumber',PassengerType=' $PassengerType',Destination='$Destination',Pswd='$Pswd' where Email='$Email' " ;
$result=mysqli_query($con,$sql_query);

if($result)
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