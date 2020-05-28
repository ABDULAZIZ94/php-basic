<?php
    include "connection.php";

    $sql =<<< EOL
        UPDATE HADITH set hadith_text ="updated text" where id =2;
    EOL;

    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg;
    }else{
        echo $db->changes(), "Record updated successfuly";
    }