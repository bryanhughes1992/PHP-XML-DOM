<?php
//Capture the userID from the query string
$userID = $_GET['id'];

//Store a new DOM document
$xmlDoc = new DOMDocument("1.0", "utf-8");

//Store the supportTicket XML doc in this variable
$testFile = file_get_contents("../xml/supportTicket.xml");

//Load the supportTicket file into the DOM document
$xmlDoc->loadXML($testFile);

//Get all the ticket ID's in the XML Document
$ticketID = $xmlDoc->getElementsByTagName("id");

//Iterate through the ID's
foreach ($ticketID as $key => $value) {
  //Find the corresponding user
  if ($value->nodeValue == $userID) {
    //Store the value of the matching ticket
    $matchingTicket = $xmlDoc->getElementsByTagName("ticketNumber")[$key];

    //Capture the subject of the matching ticket
    $subject = $matchingTicket->getElementsByTagName("subject")[0]->nodeValue;

    //Capture all the messages in this ticket
    $messages = $matchingTicket->getElementsByTagName("message");

    //Print the subject as an HTML header
    print("<h1>" . $subject . "</h1>");
    //Iterate through the messages
    foreach ($messages as $individualMessage)
    {
      //Make a list with...
      echo "<ul>";
      //...each individual message
      print("<li>" . $individualMessage->textContent . "</li>");
      echo "</ul>";
    }
    //Exit the if statement
    break;
  }
}




//Debug statement:
//var_dump($ticketID);
//echo $userID;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

  </body>
</html>
