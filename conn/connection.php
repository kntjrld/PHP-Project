<!-- php connection to db -->
<?php
    $dbhost = "localhost";
    $user_name = "root";
    $password = "";
    $dbname = "db_users";

        $conn = mysqli_connect($dbhost, $user_name, $password, $dbname);
         if (!$conn) {
           echo "Connection failed";
        }
          
?>