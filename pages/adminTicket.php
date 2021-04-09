<?php
//Create a new XML DOM document
$xmlDoc = new DOMDocument("1.0", "utf-8");
//Store the contents of this XML file in a variable
$supportTickets = file_get_contents("../xml/supportTicket.xml");
//Load the XML support tickets
$xmlDoc->loadXML($supportTickets);
//Capture all support tickets
$tickets = $xmlDoc->getElementsByTagName("ticketNumber");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
  </head>
  <body>
    <div>
      <h1>Admin Page</h1>
      <table>
        <thead>
          <th>ID:</th>
          <th>Subject:</th>
        </thead>
        <tbody>
          <?php
          foreach($tickets as $value) {
            $one = $value->getElementsByTagName('id')[0]->nodeValue;
            $two = $value->getElementsByTagName('subject')[0]->nodeValue;

            echo "<tr><td>" . $one . "</td>";
            echo "<td><a href='ticketDetails.php?id=". $one . "'>" . $two . "</a>";
            echo "</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>