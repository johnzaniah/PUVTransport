<?php
	$host = 'localhost';
	$user = 'root';
	$pass = 'joshua567482';
	$db = 'adminacc';

	$sql = new mysqli($host,$user,$pass,$db) or die ($sql->connect_error);
?>