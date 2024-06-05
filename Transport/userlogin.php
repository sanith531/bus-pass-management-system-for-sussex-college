
<?php
 session_start();
 include 'connection.php';

 ?>    
 <html >
<head>

    <title>User welcome</title>
    <link rel="Stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="Stylesheet" href="loginstyle.css">

</head>
<body>
    <header>
        <div class="welcome">
         <h3>Welcome To Pass Generation!</h3>
        </div>
   </header>   
<div class="myprofile">
 <section class="sidemenu">

     <div class="function">
    
 <ul>
    <?php
    echo" <li><a href='usereditprofile.php? Email={$_SESSION['Email']}' >Edit my details</a></li>";
     ?>
     <li><a href="userviewdetails.php">View details</a></li>
     <li><a href="userpassrequest.html?">Apply pass</a></li>
     <li><a href="userviewstatus.php?  ">View status</a></li>
     <li><a href="logout.php">Logout</a></li>
</ul>   
</div>
</section>
</div>
<script src="bootstrap\js\jquery.js"></script>
      <script src="bootstrap\js\bootstrap.min.js"></script>
</body>
</html>

