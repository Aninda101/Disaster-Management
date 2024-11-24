<?php 
        session_start();
        $id=$_SESSION['id'];
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
                 


               $sql = 
               "UPDATE usersadmit SET username ='$username', email = '$email',address ='$address',
               location='$location',password='$password' WHERE id=$id";

               $quary = mysqli_query($conn,$sql);
            
               if(!$quary){
                  echo "not done";
               }
               else
               {
                header("location:home.php");
               
               }

               mysqli_close($conn);

          }
       
       
       ?>