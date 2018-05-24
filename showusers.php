<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table with users</title>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<section id="content">
<form action="">
	<?php 
	echo "bla";
               try{
		         $link = new PDO('mysql:host=mysql; dbname=projectphp; charset=UTF8', 'root', 'pass', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }catch (PDOException $e){
                  echo'ERROR: '.$e->getMessage(); 
                 }
                $Query = $link->query("SELECT * FROM userdata");
		echo "<table border 1px>";
		while($Result=$Query->fetch()){
			echo "<tr>";
			echo "<td>".$Result[0]."</td><td>".$Result[1]."</td><td>".$Result[2]."</td><td>".$Result[3]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
</form>
</section>
</div>
</body>
</html>
