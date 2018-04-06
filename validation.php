<?php
  echo "<h2>Name Validation</h2>";
  $username = "FilipusHandi";
  echo "Username : $username<br>";
  if (!preg_match('/\s/',$username) && preg_match('/^[a-zA-Z ]*$/',$username)){
      echo "Validation success, your name format is accepted<br>";
  }
    else{
      echo "Validaton failed, no white spaces allowed and special characters allowed<br>";
    }
    echo "<br>";
    $username = "Filipus Handi23";
    echo "Username : $username<br>";
    if (!preg_match('/\s/',$username) && preg_match('/^[a-zA-Z ]*$/',$username)){
        echo "Validation success, your name format is accepted";
    }
      else{
        echo "Validaton failed, no white spaces allowed and special characters allowed";
      }
    echo "<hr>";
    echo "<h2>Email Validation</h2>";
    $email = "filipushandi23@gmail.com";
    echo "Email: $email<br>";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
    }
    else{
      echo "Email is valid.";
    }
    echo "<br>";
    $email = "filipu#@#shandi23@gmail.com";
    echo "Email: $email<br>";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
    }
    else{
      echo "Email is valid.";
    }
?>
