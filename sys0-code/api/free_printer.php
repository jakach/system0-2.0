<?php
	include "../config/config.php"
	$apikey=htmlspecialchars($_GET["apikey"]);
	$apikey_fromdb="";
	$sql="select apikey from api where id=1";
	$stmt = mysqli_prepare($link, $sql);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	mysqli_stmt_bind_result($stmt, $apikey_fromdb);
	mysqli_stmt_fetch($stmt);
	if($apikey!=$apikey_fromdb)
	{
		echo("wrong apikey");
		exit;
	}

	else
	{
		$id=htmlspecialchars($_GET["id"]);
		$sql="update printer set free=1,printing=0,cancel=0 ,used_by_userid=0 where id=$id";
		$stmt = mysqli_prepare($link, $sql);
		mysqli_stmt_execute($stmt);
	}

?>
