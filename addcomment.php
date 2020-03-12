<?php
require 'connection.php';
$nameErr = $emailErr =  $messageErr = "";
$name = $email = $message = "";
$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"])) {
   $nameErr = "Name is required";
} else {
  $name = test_input($_POST["name"]);
  if(!preg_match("/^[a-zA-Za-žA-Ž]{2,25}(([' -][ ]*[a-zA-Za-žA-Ž]{2,25})?[a-zA-Za-žA-Ž ]*)*$/", $name)){
   $nameErr = "Write your name properly";
  }
}

  if (empty($_POST["email"])) {
     $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if(!preg_match("/^[a-z0-9]+([._]?[a-z0-9]+)*@[a-z0-9]+[.-]?[a-z0-9]+\.[a-z]{2,6}$/",$email)){
      $emailErr = "Write your email properly";
    }
  }


  if (empty($_POST["message"])) {
   $messageErr = "Message can't be empty";
} else {
  $message = test_input($_POST["message"]);
}

if($nameErr == "" and $emailErr =="" and $messageErr == ""){

  $sql = "INSERT INTO comments (name, email, message)
  VALUES ('$_POST[name]', '$_POST[email]', '$_POST[message]')";

  if ($conn->query($sql) === TRUE) {
      $success = "Thank you. Your comment will be shown when administrator approves it.";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
