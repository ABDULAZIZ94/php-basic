<?php

	include "connection.php";

	$TABLE_NAME = $_POST["table_name"];
	echo  $_POST["table_name"]."<br>";
			
	$sql =<<<EOF
	CREATE TABLE $TABLE_NAME (
		id INTEGER PRIMARY KEY AUTOINCREMENT,
		hadith_no INT NOT NULL,
		page INT NOT NULL,
		hadith_text TEXT NOT NULL
	)
	EOF;

	echo "sql: ".$sql."<br>";

	function create_table($sql, $db){

		echo "execute create_table()"."<br>";
		echo "sql: ".$sql."<br>";

		$ret = $db->exec($sql);

		if(!$ret){
			echo $db->lastErrorMsg();
		}else{
			echo "Table $TABLE_NAME created successfully<br>";
		}

	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo "post received<br>";
		create_table($sql, $db);
	}

	// header("Location: ../read.html");