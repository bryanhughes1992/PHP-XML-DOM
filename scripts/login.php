<?php
$email = $pass = "";

if  ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST['email']);
  $pass = test_input($_POST['pass']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>