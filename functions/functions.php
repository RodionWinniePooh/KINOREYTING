<?php
	require_once "connect.php";

	
	function getFilm ($limit,$id)
	{
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE	`id` = ".$id;

		$result = $mysqli->query("SELECT * FROM `film` $where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

	function resultToArray ($result) {
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}

	function getSerial($limitSerial,$idSerial)
	{
				global $mysqli;
		connectDB();
		if($idSerial)
			$where = "WHERE	`id` = ".$idSerial;

		$result = $mysqli->query("SELECT * FROM `serials` $where ORDER BY `id` DESC LIMIT $limitSerial");
		closeDB();
		if(!$idSerial)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

		function getCartoon($limitCartoon,$idCartoon)
	{
				global $mysqli;
		connectDB();
		if($idCartoon)
			$where = "WHERE	`id` = ".$idCartoon;

		$result = $mysqli->query("SELECT * FROM `cartoons` $where ORDER BY `id` DESC LIMIT $limitCartoon");
		closeDB();
		if(!$idCartoon)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

	function isAdmin($user_username)
	{

		global $mysqli;
		$mysqli = new mysqli("localhost", "root","","kinoreyting");
		$mysqli->query("SET NAMES 'utf-8'");

		$result_set = $mysqli->query("SELECT * FROM `signup` WHERE `username` = '$user_username'");
		$row = $result_set->fetch_assoc();

		global $mysqli;
		$mysqli->close();

		return $row["admin"];
	}






?>
