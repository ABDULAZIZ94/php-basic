<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $TABLE = $_POST["table_name"];
    $sql =<<< EOL
      DROP TABLE '$TABLE';
    EOL;

    $ret = $db->exec($sql);
    if(!$ret){
      echo $db->lastErrorMsg();
    }else{
      echo $db->changes(), "Redord deleted successfully.";
    }
  }