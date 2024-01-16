<?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $userName = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    
      if (empty($firstName)) {
     header("Location: error.php");
    }
      if (empty($lastName)) {
     header("Location: error.php");
    }
      if (empty($userName)) {
     header("Location: error.php");
    }
      if (empty($password)) {
     header("Location: error.php");
    }
    
  echo "<h1>user credential confirmation</h1>";
  echo "<br>";
  echo "<h3>these are the data , user credentials have been submitted</h3>";
  echo "<br>";
  echo $firstName;
  echo "<br>";
  echo $lastName;
  echo "<br>";
  echo $userName;
  }