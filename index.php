<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration page</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
<center>
<div class="container">
<section id="content">
<form action="adduser.php" method="POST">
	<?php
		echo "Hello it`s new veriosn of jenkins"
 		echo "First Name <br><br>";
		echo "<input type='text' name='firstname'><br>";
		echo "<br>Second Name <br><br>";
		echo "<input type='text' name='secondname'><br>";
		echo "<br>Birth date <br><br>";
		echo "<input type='text' name='date'><br>";
		echo "<br>Inventory number<br><br>";
		echo "<input type='text' name='invnumber'><br>";
		echo '<br><p><input type="Submit">';
		
	?>
</form>
<form action="showusers.php" method="">
	<?php 
		echo '<a href="showusers.php"><button>View a table</button></a>';
	 ?>
</form>
</section>
</div>
</center>
</body>
</html>
