<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  <link rel="stylesheet" href="style.CSS">
</head>

    <body class="homebody">
        <div class="nav">
            <div class="logo">
                <a href="home.php" class="Home" >Home</a>
                <a href="Volunteer.php" class="Volunteer">Volunteer</a>
                <a href="#" class="EmergencyService">Emergency Service</a>
                <a href="#" class="NewsEvents">News Events</a>
            </div>
            <div class="right-links">
                <a href="edit.php" class="changeprofile">Change Profile</a>
                <a href="logout.php"><button class="btn">Log Out</button></a>
            </div>
        </div>

    
   <div class="editcontainer">
        <div class="form_box">
            <main class="indexmain">
             <header class="editheader">Change Profile</header>
             <?php
             session_start();
             $id=$_SESSION['id'];
             $conn = new mysqli('localhost', 'root', '', 'dbms_project');

             $query="SELECT * FROM usersadmit WHERE id=$id";
             $result=mysqli_query($conn,$query) or die("Query Unsuccessful");
             if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
             
        ?>
             <form action="update.php" method="post">
             <div class="field_input">
                <input type="text" name="username"  id="username" autocomplete="off" required>
                <label for="Username">Change Username</label>
                <i class="material-icons">person</i>
             </div>
             <br>
             <div class="field_input">
                
                
                <input type="text" name="Eamil" id="Eamil" autocomplete="off" required>
                <label for="Email">Change Email</label>
                <i class="material-icons">email</i>
             </div>
             <br>
             <div class="field_input">
                
                
                <input type="text" name="address"  id="address" autocomplete="off" required>
                <label for="Address">Change Address</label>
                <i class="material-icons">home</i>
             </div>
             <br>
             <div class="field_input">
                
                
                <input type="text" name="location"  id="location" autocomplete="off" required>
                <label for="Location">Change Loaction</label>
                <i class="material-icons">add_location</i>
             </div>
             <br>
             <div class="field_input">
                
                
                <input type="password" name="password" vlaue="" id="password" autocomplete="off" required>
                <label for="password">Change Password</label>
                <i class="material-icons">lock</i>
             </div>
             
            <br>
           <div>
           <input type="submit" class="button" name="submit" value="Update">
           </div>
          </form>
          <?php }
             }
             ?>
          </main>
          </div>
    </div>
   
   

</body>
</html>