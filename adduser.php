<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LogPage</title>
</head>
<body>
<?php
	$f=$_POST['firstname'];
	$n=$_POST['secondname'];
	$o=$_POST['date'];
	$g=$_POST['invnumber'];
	$link=mysql_connect("localhost", "root", "123");#server,user,password
	mysql_select_db('mysql', $link);#data base name
	mysql_query('SET character_set_database=utf8'); 
	mysql_query('SET NAMES utf8');
	$seach="SELECT * FROM userdata;";#table name
	$r=mysql_query($seach);
	$p=0;
	while($q=mysql_fetch_row($r)){
		if($q[0]==$f and $q[1]==$n and $q[2]==$o){
			$up="UPDATE userdata SET g=".$g." WHERE f='".$f."' AND n='".$n."' AND o='".$o."';";
			$r=mysql_query($up);
			mysql_close($link);
			$p=1;
			echo "Succes. <br><a href='index.php'>Add new user</a>";
			break;
		}
	}
	if($p==0){
		$s="INSERT INTO  userdata VALUES('".$f."','".$n."','".$o."','".$g."');";
		mysql_query($s);
		mysql_close($link);
		echo "Succes <br><a href='index.php'>Add new user</a>";
	}
?>
</body>
</html>
