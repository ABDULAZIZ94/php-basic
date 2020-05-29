<?php
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $TABLE = $_POST["table_name"];
        $NO = $_POST["hadith_no"];
        $PAGE = $_POST["page"];
        $TEXT = $_POST["hadith_text"];

        $sql =<<< EOF
        INSERT INTO '$TABLE' ( hadith_no, page, hadith_text)
        VALUES ( $NO, $PAGE, "$TEXT")
        EOF;

        $ret = $db->exec($sql);
        if(!$ret){
            echo $db->lastErrorMsg();
        }else{
            echo "Records created successfuly";
        }
        $db->close();
    }

    