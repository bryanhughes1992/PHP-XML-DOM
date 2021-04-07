<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("../xml/supportTicket.xml");

$tickets = $xmlDoc->getElementsByTagName("ticketNumber");
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
          <?php
          foreach($tickets as $value) {
            echo "<tr><td>" . $value->getElementsByTagName('id')[0]->nodeValue . "</td>";
            echo "<td><a href='ticketDetails.php?id=". $value->getElementsByTagName('id')[0]->nodeValue."'>". $value->getElementsByTagName('subject')[0]->nodeValue."</a>";
            echo "</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>