<?php
//Begin a server session
session_start();

//If POST is used
if  ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Empty strings for the email and password
  $email = $pass = "";
  //A variable to hold a new XML Document
  $xmlDoc = new DOMDocument();
  //Load the 'users.xml' into the xmlDoc variable
  $xmlDoc->load("../xml/users.xml");
  //A variable to hold all users
  $users = $xmlDoc->getElementsByTagName("user");

  //Capture the user inputted email
  $email = test_input($_POST['email']);
  //Capture the user inputted password
  $pass = test_input($_POST['pass']);
  //Hash their password
  $hashedPass = md5($pass);

  foreach ($users as $value) {
    //Capture all the email element(s) in the XML doc
    $xmlEmail = $value->getElementsByTagName("email")[0]->nodeValue;
    //Capture the password
    $xmlPass = $value->getElementsByTagName("password")[0]->nodeValue;
    //If the user inputted email matches any 'email' in the XML doc
    if ($email == $xmlEmail) {
      //AND if the hashed pass matches the value of 'password' in the XML doc
      if ($hashedPass == $xmlPass) {
        //Store the email for this user as a session variable
        $_SESSION["email"] = $value->getElementsByTagName('email')[0]->nodeValue;
        //Store the userType for this user as a session variable
        $_SESSION["userType"] = $value->getElementsByTagName("userType")[0]->nodeValue;
        //Store the ID for this user as a session variable
        $_SESSION["id"] = $value->getElementsByTagName("id")[0]->nodeValue;

        //If the userType is Admin,
        if ($_SESSION["userType"] == "Admin") {
          //redirect to the adminTicket page.
          header("Location: ../pages/adminTicket.php");
        } else {
          //redirect to the userTicket page.
          header("Location: ../pages/userTicket.php");
        }

      } else {
        echo "Incorrect Email or Password";
        break;
      }
    }
  }
}


/**
 * This function takes user input, '$data'
 * and removes whitespace, slashes, and HTML
 * special characters.
 * @param string $data
 *
 */
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
?>