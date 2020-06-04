<?php

// Require the Composer autoloader, if not already loaded
require '../vendor/autoload.php';

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

  include "connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $TABLE = $_POST["table_name"];

    $sql =<<< EOF
      SELECT * FROM $TABLE;
    EOF;
    // var_dump($sql);
    $ret = $db->query($sql);
    echo "<table>";
    echo "<tr><th>ID</th><th>Hadith Text</th></tr>";
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "<tr><td> ".$row['id']."</td>";
      echo "<td>".$row['hadith_text']."</td></tr>";
    }
    echo "</table>"; 
  
    echo "operation done";
    $db->close();

  }else{
    echo "Unsuported Method<br>";
  }
  
?>
<html>
    <head>
        <?php echo $debugbarRenderer->renderHead() ?>
    </head>
    <body>
        ...
        <?php echo $debugbarRenderer->render() ?>
    </body>
</html>
    