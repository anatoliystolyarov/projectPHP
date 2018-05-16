<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table with users</title>
</head>
<body>
	<?php 
		$link=mysql_connect("localhost", "root", "123");
		mysql_select_db('mysql', $link);
		mysql_query('SET character_set_database=utf8'); 
		mysql_query('SET NAMES utf8');
		$s="SELECT * FROM userdata;";
		$r=mysql_query($s);
		echo "<table border 1px>";
		while($q=mysql_fetch_row($r)){
			echo "<tr>";
			echo "<td>".$q[0]."</td><td>".$q[1]."</td><td>".$q[2]."</td><td>".$q[3]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>