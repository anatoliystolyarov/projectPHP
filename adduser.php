<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LogPage</title>


</head>
<body>
<center>
<?php
	$f=$_POST['firstname'];
	$n=$_POST['secondname'];
	$o=$_POST['date'];
	$g=$_POST['invnumber'];
try{
    $link = new PDO('mysql:host=mysql; dbname=projectphp; charset=UTF8', 'root', 'pass', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch (PDOException $e){
    echo'ERROR: '.$e->getMessage();
}
	$Query = $link->query("SELECT * FROM userdata");
	$p=0;
	while($q=$Query->fetch()){
		if($q[0]==$f and $q[1]==$n and $q[2]==$o){
			$up="UPDATE userdata SET g=".$g." WHERE f='".$f."' AND n='".$n."' AND o='".$o."';";
			$Query=$link->query($up);
			$link=null;
			$p=1;
			echo "Succes. <br><a href='index.php'>Add new user</a>";
			break;
		}
	}
	if($p==0){
		$s="INSERT INTO  userdata VALUES('".$f."','".$n."','".$o."','".$g."');";
		$Query= $link->query($s);
		$link=null;
		echo "Succes <br><a href='index.php'>Add new user</a>";
	}
?>
</center>
</body>
</html>
