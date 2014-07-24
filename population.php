<?php
$city = $_GET['city'];
?>
	 
<h1> Welcome to Population Data </h3>

<?php
		$cityPop= array('Philly' => 1553165, 
					   'Chicago'=> 2718782, 
					   'New York'=> 8405837, 
					   'Dallas' => 1257676,
					   'Miami' => 417650
				);

		if ($cityPop[$city]){

			print 'The population of ' . $city . ' is ' . $cityPop[$city];
		}
		else {
			print " I don't know where you're from dude";
		}	 
?>
           
<h2>Other Cities</h2>
<ul>
<?php
  foreach ($cityPop as $name => $value) {
    print '<li><a href="http://danniehost.com/population.php?city=' . $name  . '">' . $name
    . '</a></li>';
  }
?>
</ul>
