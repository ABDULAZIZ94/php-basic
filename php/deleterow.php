<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID = $_POST["row_id"];
    $TABLE = $_POST["table_name"];
    $sql =<<< EOL
      DELETE from '$TABLE' where ID = '$ID';
    EOL;

    $ret = $db->exec($sql);
    if(!$ret){
      echo $db->lastErrorMsg();
    }else{
      echo $db->changes(), "Redord deleted successfully.";
    }
  }