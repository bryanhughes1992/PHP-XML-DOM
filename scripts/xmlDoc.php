<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("xml/users.xml");

$users = $xmlDoc->getElementsByTagName("users")[0];
foreach ($users->childNodes as $value) {
  print $value->nodeValue . "</br>";
}

?>
