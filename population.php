<?php
// Creates a connection to a MySQL server.
// Creating the variables to plug into the mysql_connect() function
// is optional, as they can be entered “manually.”
$connection = mysql_connect('127.0.0.1', 'root', 'basketbal1');
mysql_select_db('day-4-exercises');
// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);

// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}

?>

