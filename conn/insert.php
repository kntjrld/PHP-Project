<!-- insert data to db -->
<?php
    $dbhost = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "db_users";

    $conn = mysqli_connect($dbhost, $user_name, $password, $dbname);

   if(isset($_POST['submit']) && !empty($_POST['user_name']) && !empty($_POST['email']) && !empty($_POST['password'])){

            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $query = "insert into users(user_name, email, password) values('$user_name', '$email', '$password')";
            $run = mysqli_query($conn,$query) or die(mysqli_error());
            
            if($run){
              header("Location: login.php");
            }
            else{
              echo "Invalid Registration!";
            }
  }
?>