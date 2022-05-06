<?php

class Db {

    protected function connect(){

    $host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "studentportal";

	$con = mysqli_connect($host, $username, $password, $db_name);

	if(!$con) {
		die("Cannot connect to the database");

	}
        return $con;
    }
}

    
?>