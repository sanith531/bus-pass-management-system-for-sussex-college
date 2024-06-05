         
    
     <?php

include 'connection.php';



        $Passrequestno=$_GET['Passrequestno'];
       
     
        //once accept link is clicked by admin,retriew specific row's data
         $sql_query2="SELECT Startingdate,Email,Userstatus FROM  passrequest where Passrequestno=$Passrequestno "; 
         $result2=mysqli_query($con,$sql_query2);
         $row2=mysqli_fetch_assoc($result2);
         $status=$row2['Userstatus'];
         $startingdate=$row2['Startingdate'];
         $Email=$row2['Email'];

         //check status of that row and if it is pending update status
         if($status=="Pending")
         {

         $newstatus="Accepted";

        $sql_query="Update passrequest set Userstatus='$newstatus' where Passrequestno=$Passrequestno"; 
        $result=mysqli_query($con,$sql_query);

        $sql_query1="INSERT INTO acceptedrequest ( StartingDate , Email) VALUES( '$startingdate', '$Email')"; 
        $result1= mysqli_query($con,$sql_query1);

        echo "<script>alert( 'You have successfully accepted request ')</script>";
        
         }
        //check status of that row anf if it is accepted popup already accepted message
         elseif($status=="Accepted")
         {
            echo "<script>alert( 'You have already accepted the pass request')</script>";
         }

        else
        {
            echo "<script>alert( 'Error')</script>";
        }
       


        mysqli_close($con);    
    

?>


