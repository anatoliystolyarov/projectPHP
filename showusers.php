<!DOCTYPE html>
<html>
<head>
<center>
	<meta charset="utf-8">
	<title>Table with users</title>
    <style type="text/css">
	#centerLayer {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #AFEEEE;
    }
</style>
</center>
</head>
<body>
<div id="centerLayer">
	<?php 
               try{
		         $link = new PDO('mysql:host=mysql; dbname=project; charset=UTF8', 'root', 'pass', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
</div>
</body>
</html>
