<?php
session_start();
$email = $pass = "";

$xmlDoc = new DOMDocument();
$xmlDoc->load("xml/users.xml");

print $xmlDoc->saveXML();


if  ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST['email']);
  $pass = test_input($_POST['pass']);
  $hashedPass = md5($pass);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>