<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the username and password from the form
      $username = $_POST["username"];
      $password = $_POST["password"];
      
      // Validate the user's credentials
      if($username == "user" && $password == "pass") {
         // Redirect the user to their dashboard page
         header("Location: action_php.php");
         exit;
      } else {
         echo "Invalid username or password.";
      }
   }
?>