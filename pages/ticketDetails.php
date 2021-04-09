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


//Debug statement:
//var_dump($ticketID);
//echo $userID;

foreach ($ticketID as $key => $value) {

  if ($value->textContent == $userID) {

    //print($value->nodeValue);

    echo $key . $value->textContent . "<br/>";

    $matchingTicket = $xmlDoc->getElementsByTagName("ticketNumber")[$key]->nodeValue;

    print($matchingTicket);
  }
}

?>
