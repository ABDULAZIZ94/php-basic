<?php
    include "connection.php";

    $sql =<<< EOF
        DELETE FROM HADITH where id = 1
    EOF;

    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    }else{
        echo $db->changes(), "Records deleted successfully";
    }