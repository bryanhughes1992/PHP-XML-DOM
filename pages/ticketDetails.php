<?php
//Store a new DOM document
$xmlDoc = new DOMDocument("1.0", "utf-8");

//Store the supportTicket XML doc in this variable
$testFile = file_get_contents("../xml/supportTicket.xml");
//Load the supportTicket file into the DOM document
$xmlDoc->loadXML($testFile);

$ticketID = $xmlDoc->getElementsByTagName("id");
var_dump($ticketID);

/**
 * Connection to previous page
 */
$userID = $_GET['id'];
echo $userID;

//$xmlDoc = simplexml_load_file("../xml/supportTicket.xml");


//var_dump($ticketID);


?>
