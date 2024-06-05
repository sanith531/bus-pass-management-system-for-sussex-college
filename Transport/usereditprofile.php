
<?php
session_start();
include 'connection.php';


if(isset($_GET['Email']))
{
$Email=$_GET['Email'];

$sql_query="SELECT * FROM passengers where Email='$Email' ";
$result=mysqli_query($con,$sql_query) ;
$row=mysqli_fetch_assoc($result);
}
?>

<html>
   <head>
   <title>Edit My Profile</title>

   <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
   <link rel="Stylesheet" href="Style.css">
 

</head>

<body class="background">
   <div class="signup" >
    <div class="formdetails">
     <?php 
     echo"<form action='adminuserupdate.php?Email={$row['Email']}'  method='post'>" 
     ?>
           <h2>Edit My Profile Details</h2><br><br>
 
            
               <label class="Details">Firstname</label">
               <input  type="text"  value="<?php echo $row["FirstName"] ?>" name="FirstName"><br>
           
           
               <label class="Details">Lastname</label>
               <input  type="text" value="<?php echo $row["LastName"] ?>"   name="LastName"><br>

          
               <label class="date">DOB</label>
               <input  type="date" value="<?php echo $row["DOB"] ?>"   name="DOB"><br>
          
            <!--This is for selecting gender type out of options-->
            
              
              <label class="Details">Gender </label>

              <input  class="space"type="radio"  name="Gender" value="Male" <?php if($row["Gender"]=="Male") { echo'checked'; } ?>>
               <label >Male</label><br>

               <input  class="space" type="radio"  name="Gender" value="Female" <?php if($row["Gender"]=="Female") { echo'checked'; } ?>>
               <label >Female</label><br>
               
        
   
   
           <label class="Details">Address</label>
           <input  type="text" value="<?php echo $row["AddressDetails"] ?>"  name="Addrss"><br>
           

           <label class="Details">Phone Number</label>
           <input  type="text" value="<?php echo $row["PhoneNumber"] ?>"  name="PhoneNumber"><br>
       

           <!--This is for passenger selecting their type-->
       
           <label >Passenger Type</label>
           <div  class="selection"  >
           <select name="PassengerType">
               <option value="Student" <?php if($row["PassengerType"]=="Student") { echo'selected'; } ?>>Student</option>
               <option value="Staff" <?php if($row["PassengerType"]=="Staff") { echo'selected'; } ?>>Staff</option>
               
        </select>
           </div>
        
           <label>Destination</label>
           <div  class="selection" >
           <select name="Destination" >
               <option value="Kandy" <?php if($row["Destination"]=="Kandy") { echo'selected'; } ?>>Kandy</option>
               <option value="Peradheniya" <?php if($row["Destination"]=="Peradheniya") { echo'selected'; } ?>>Peradheniya</option>
               <option value="Digana" <?php  if($row["Destination"]=="Digana") { echo'selected'; } ?> >Digana</option>
            
           </select>
       
         </div>

     
           <label class="Details">Password</label>
           <input  type="password" value="<?php echo $row["Pswd"] ?>"  name="Pswd"><br><br><br>
        <input  class="signin" type="submit" name="submit" value="submit"> 
       
    </form>
    </div>

</div>
<script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>
</body>
</html>
