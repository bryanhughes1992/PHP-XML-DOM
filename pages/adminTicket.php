<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("../xml/supportTicket.xml");

$tickets = $xmlDoc->getElementsByTagName("ticketNumber");
var_dump($tickets);
?>

<!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
  </head>
  <body>
    <div>
      <table>
        <thead>
          <th>ID:</th>
          <th>Subject:</th>
        </thead>
        <tbody>
          <tr>
            <?php

            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>