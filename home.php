<?php
 session_start();
 $id=$_SESSION['id'];
// $email= $_SESSION['email'];
// echo "$id"."$email";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="home.css">




</head>
<body>
   
       <div class="nav">
         <div class="logo">
           <div class="heading"><h3>DISASTER MANAGEMENT SYSTEM</h3></div>
           <div class="slogan"><p>Prepare. Respond. Recover</p></div>
         </div>
         <div class="homebar">
                <a href="#" class="Home" >Home</a>
                <a href="Volunteer.php" class="Volunteer">Volunteer</a>
                <a href="#" class="EmergencyService">Emergency Service</a>
                <a href="#" class="NewsEvents">News Events</a>
                <div class="options">
                <input type="checkbox" id="MORE" name="MORE" value="MORE">
                <div class="mor"><label for="MORE"> More</label><i class="material-icons">expand_more</i></div>
                <div class="moreoptions" id="moreoptions">
                    <ul class="menubar">
                       <li><a href="#">Profile Info</a></li>
                        <li><a href="edit.php">change Profile</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Message us</a></li>
                         <li><a href="index.php">Logout</a></li>
                    </ul>

                </div>
                </div>
              
       </div>
   
      

</body>
</html>