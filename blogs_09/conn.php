<?php

	$engi = 'mysql';
	$host = "localhost";
	$dbse = 'blogs_09';
	$user = 'root';
	$pass = "";

	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);

?>