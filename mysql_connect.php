<?php
 
 	DEFINE('DB_USER','root');
 	DEFINE('DB_HOST','localhost');
 	DEFINE('DB_PASSWORD','sharpshooter');
 	DEFINE('DB_DATABASE','test');
 		
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);