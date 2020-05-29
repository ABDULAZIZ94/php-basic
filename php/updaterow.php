<?php
  include "connection.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ID = $_POST["id"];
    $TEXT = $_POST["hadith_text"];
    echo "ID: ".$ID."<br>";
    echo "ID: ".$TEXT."<br>";

    $sql =<<< EOL
        UPDATE HADITH set hadith_text = '$TEXT' where id = '$ID';
    EOL;

    echo "sql: ".$sql."<br>";

    $ret = $db->query($sql);
    echo "ret: ".$ret;
    if(!$ret){
        echo $db->lastErrorMsg;
    }else{
        echo $db->changes(), "Record updated successfuly";
    }

  }