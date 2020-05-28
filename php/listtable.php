<?php

  include "connection.php";

  $sql =<<<EOF
    SELECT name FROM sqlite_master WHERE type='table';
  EOF;

  $ret = $db->query($sql);
  while ($table = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo $table['name'] . '<br />';
  }

  // $tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");

  // while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
  //     echo $table['name'] . '<br />';
  // }

