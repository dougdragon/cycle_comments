<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the db table
 Gets the 'id' from the post on the calling page
*/

// connect to the database
include('db-connect.php');

// check if the 'id' variable is set in URL
if (isset($_GET['id'])) {
	// get id value
	$id = $_GET['id'];
	
	// delete the entry
	$result = mysql_query("DELETE FROM cadecticker.ticker_data WHERE id=$id") or die(mysql_error());
		
	// redirect back to the view page
	header("Location: index.php");
}
else {
	// if id isn't set, or isn't valid, redirect back to view page
	header("Location: index.php");
}
?>