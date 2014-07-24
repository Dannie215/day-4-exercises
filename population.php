<?php
// Creates a connection to a MySQL server.
// Creating the variables to plug into the mysql_connect() function
// is optional, as they can be entered “manually.”
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
  $result = mysql_query('SELECT city_name, population FROM population');

  // Fetch the data from the result
  while ($row = mysql_fetch_array($result)) {
    echo "City Name: " . $row['city_name'] . "<br>" .
         "Population: "  . $row['population']  . "<br>";
  }
}

mysql_close($connection);
?>

