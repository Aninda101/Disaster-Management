<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <style>
      select {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        border: none;
        outline: none;
        scroll-behavior: smooth;
      }
    </style> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="style.CSS">
     
</head>
<body>
    <div class="container">
        <div class="form_box">
            <main class="indexmain">
             <header>Sign Up</header>
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
         
              <!-- <select name="location" id="location">
                  <option value="volvo" disabled selected>Region</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Chattogram">Chattogram</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Barisal">Barisal</option>
                  <option value="Khulna">Khulna</option> 

                </select> -->
                <i class="material-icons">add_location</i>
             </div>
             <br>
             <div class="field_input">
                
                
                <input type="password" name="password" vlaue="" id="password" autocomplete="off" required>
                <label for="password">Password</label>
                <i class="material-icons">lock</i>
             </div>
           <br>
           <div>
           <input type="submit" class="button" name="submit" value="SIGN UP">
           </div>
          </form>
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
                  $password=$_POST['password'];
                 


               $sql = "INSERT INTO usersadmit (username, email ,address,location,password)
               values('$username','$email','$address','$location','$password')";

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

          
           <br>
            <div class="links">
              Already have an account? <a href="index.php">Sign In</a>
            </div>
      </main>
    </div>
 </div>
</body>
</html>
 