<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];
      
      if($username == "user" && $password == "pass") {
         header("Location: action_php.php");
         exit;
      } else {
         echo "Invalid username or password.";
      }
   }
?>
