<?php

    include "connection.php";

    $sql =<<<EOF
    CREATE TABLE HADITH (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        hadith_no INT NOT NULL,
        page INT NOT NULL,
        hadith_text TEXT NOT NULL
    )
    EOF;

    $ret  = $db->exec($sql);
    if(!$ret){
        echo $db->lastErrorMsg();
    }else{
        echo "Table created successfully<br>";
    }

    header("Location: ../index.html");