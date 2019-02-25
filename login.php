<?php
	$host = 'mysql.freehostia.com';
	$user = 'josalv94_transad';
	$pass = 'joshua567482';
	$db = 'josalv94_transad';
	$port = '3307';

	$sql = new mysqli($host,$user,$pass,$db) or die ($sql->connect_error);
?>