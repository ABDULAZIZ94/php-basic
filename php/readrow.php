<?php
    include "connection.php";

    $sql =<<< EOF
        SELECT * FROM HADITH;
    EOF;

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
        echo "hadith_text: ".$row['hadith_text']."<br>";
        echo "id: ".$row['id']."<br><br>";
    }    

    echo "operation done";
    $db->close();
    