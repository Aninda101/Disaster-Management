<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  <link rel="stylesheet" href="Volunteer.css">
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

    <div class="Volunteer-form">
          <div class="Volunteer-header">
               <header>Register as a Volunteer</header>
          </div>
          <div class="form-box">
            <form action="" method="post">
                <div class="field_input">
                   <input type="text" name="username" id="username" autocomplete="off" required>
                   <label for="Username">Username</label>
                   <i class="material-icons">person</i>
                </div>
                <br>
                <div class="field_input">
                   
                   
                   <input type="text" name="Eamil" id="Eamil" autocomplete="off" required>
                   <label for="Email">Email</label>
                   <i class="material-icons">email</i>
                </div>
                <br>
                <div class="field_input">
                   
                   
                   <input type="text" name="address" id="address" autocomplete="off" required>
                   <label for="Address">Address</label>
                   <i class="material-icons">home</i>
                </div>
                <br>
                <div class="field_input">
                  
                 <input type="text" name="location"  id="location" autocomplete="off" required> 
                 <label for="Location">Loaction</label> 
                 <i class="material-icons">add_location</i> 
                </div>
                <br>

              <div>
              <input type="submit" class="button" name="submit" value="REGISTER">
              </div>
             </form>
          </div>
          <br>
          <div class="links">
            Already have an account? <a href="home.php">Go to Home</a>
          </div>
    </div>
    <?php 
        $conn = new mysqli('localhost', 'root', '', 'dbms_project');
        if (!$conn) {
            echo 'not connect';
        }
    
          if (isset($_POST['submit'])) {
                  $username=$_POST['username'];
                  $email=$_POST['Eamil'];
                  $address=$_POST['address'];
                  $location=$_POST['location'];

                 


               $sql = "INSERT INTO volunteer (username, email ,address,location)
               values('$username','$email','$address','$location')";

               $quary = mysqli_query($conn,$sql);
            
               if(!$quary){
                  echo "not done";
               }
               else
               {
                  echo " done";
               
               }

               mysqli_close($conn);

          }
       
       
       ?>

</body>
</html>