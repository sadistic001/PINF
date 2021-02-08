<?php
session_start();

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibSQL.pdo.php";
	include_once "libs/maLibSecurisation.php"; 
	include_once "libs/modele.php";

	$addArgs = "";
	
	if($action = valider("action"))
	{
		ob_start();
		echo "Action = '$action' <br />";
		switch($action)
		{
			case '':
				break;
		}
	}
	
	$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
	header("Location:" . $urlBase . $addArgs);
	ob_end_flush();
?>

