 <?php
include 'connection.php';

if(isset($_GET['Passengerno']))
{
    $Passengerno=$_GET['Passengerno'];

    $sql_query="SELECT * from busdetails where Passengerno='$Passengerno' ";
    $result=mysqli_query($con,$sql_query) ;
    $row=mysqli_fetch_assoc($result);
}
?>

<html>
<head>

    <title>Bus details</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="Style.css">
</head>

<body class ="background" >  
    <div class="login"> 
<?php
   
   echo "<form action='adminupdatebusdetails.php?Passengerno={$row['Passengerno']}' method='post'>"
 ?>
        <h2>update Bus Details</h2>
            

            <label>Routes</label>
            <input  class="logininput" type="text" value="<?php echo $row["Routes"] ?>" name="route" >
       
            <label>Charge</label>
            <input  class="logininput"type="text " value="<?php echo $row["Charge"] ?>" name="charge" ><br><br><br>
           
         
            <input  class="signin" type="submit" name="submit" value="Save"><br>
         
    </form>
    </div>
    <script src="bootstrap\js\jquery.js"></script>
<script src="bootstrap\js\bootstrap.min.js"></script>
</body>
</html>
