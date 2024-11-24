<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="login.css">
</head>
<body>
 
  <div class ="Container">
    <!-- <div class="image"></div> -->
    <div class="loginInfo">
    <header>Login</header>
             <form action="" method="post">
             <div class="field_input">
                <input type="text" name="username" id="username" required>
                <label for="Username">Username</label>
                <i class="material-icons">person</i>
             </div>

             <br>
             
             <div class="field_input">
                <input type="password" name="password" vlaue="" id="password" required>
                <label for="password">Password</label>
                <i class="material-icons">lock</i>
             </div>
              <br>
             <span style="color: white; margin-left:28px;"><input type="checkbox" onclick="myFunction()" > Show Password</span>
             <script>
                function myFunction() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                </script>
              <br>
              

            <div >
              <input type="submit" class="button" name="submit" value="SIGN IN">
            </div>
            </form>
            
            <br>
                 <div class="links">
                    Don't have an account? <a href="register.php" >Sign Up Now</a>
                 </div>
              
            </div>
        </div>
    </div>
        
    </div>
    <?php 
            
            session_start();
    
              $conn = new mysqli('localhost', 'root', '', 'dbms_project');
            if (!$conn) {
                echo 'not connect';
                       }
    
    if (isset($_POST['submit'])) {
     $username = $_POST['username'];
     $Password = $_POST['password'];
    
    
    
     $sql = "SELECT* FROM usersadmit WHERE  username = '$username' AND password = '$Password' " ;
    
    
    
     $query = $conn->query($sql);
    
    
    
     if ($query->num_rows> 0) {
         $data = mysqli_fetch_assoc($query);
         $id = $data['id'];
         $email = $data['email'];
         $_SESSION['id']=$id;
         $_SESSION['email']=$email;
    
         header("location:home.php");
    
    
     }else {
      echo "error";
    }
    }
    
    ?>
    
    
</body>
</html>