<?php
$mysqli = new mysqli ("localhost", "root","" ,"cafeteria");

if ($mysqli==false){
	die ("ERROR: Could not connect." . $mysql->connect_error);

}
echo " connected successfully. Host info:". $mysqli->host_info;
$mysqli -> close ();








?>