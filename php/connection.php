<?php
    class MyDB extends SQLite3{
        function __construct(){
            $this->open('munthakab.db');
        }
    }

    $db = new MyDB();
    if(!db){
        echo $db->lastErrorMsg();
    }else{
        echo "opened database successfuly<br>";
    }

