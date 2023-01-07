<?php

session_start();


if ($_SESSION['Administrator']<> "1"){
	header("Location: /index.php");
	
	exit;

}

?>