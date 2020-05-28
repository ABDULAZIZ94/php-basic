<?php
    include "connection.php";

    $sql =<<< EOF
    INSERT INTO HADITH ( hadith_no, page, hadith_text)
    VALUES ( 1, 1, "la ilaha illa allah muhammada rasulu allah")
    EOF;

    $ret = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    }else{
        echo "Records created successfuly";
    }
    $db->close();