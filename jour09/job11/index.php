<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour08';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
																		// Template to create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$req = $conn->query("SELECT AVG(capacite) FROM salles;");

$res = mysqli_fetch_all($req, MYSQLI_ASSOC);  // MERCI NICO!!!

?>

<html>
<style>
	table td{
		border: solid 1px black;
	}
</style>

<table><tr>

<?php


foreach($res[0] as $k => $v){
	echo '<td>'. $k . '</td>';
}


foreach ($res as $k2 => $v2){
	echo '<tr>';
	foreach($v2 as $k3 => $v3){
		echo '<td>'. $v3 .' '. '</td>';
		}
	echo '</tr>';
}
echo '</table>';

?>

</html>