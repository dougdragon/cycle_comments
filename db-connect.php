<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to the database
*/

// grab the secrets
require('../../../SECRETS_LOL.php');

// connect to db
$link = mysql_connect('YOUR_HOSTNAME', MYSQL_USER, MYSQL_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
	}

?>