<?php

require_once('../mysql_connect_test.php');
$query = 'SELECT * FROM Cities ORDER BY Population DESC';

$result = @mysqli_query($dbc, $query);

$n=0;
echo '<table border="solid">';
while($row = mysqli_fetch_array($result)){
	$n += 1;
	echo '<tr><td><b>' . $n . '</b></td><td>' . ucfirst($row['City']) . '</td><td>' . $row['Population'] . '</td></tr>';
	
}
echo '</table>';

?>
