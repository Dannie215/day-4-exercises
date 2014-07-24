<?php
$connection = mysql_connect('127.0.0.1', 'root', 'basketbal1');
mysql_select_db('day4exercises');
// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);


// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}

if ($connection) {
  //die('YAY: ' . mysql_errno());
  // SQL Query
  $result = mysql_query('SELECT title, author, body FROM blog');

  // Fetch the data from the result
  while ($row = mysql_fetch_array($result)) {
    echo " " . $row['title'] . "<br>" .
	 ""  . $row['author']  . "<br>" .
         " "  . $row['body']  . "<br>";
  }
}

mysql_close($connection);
?>

