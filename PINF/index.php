<?php
session_start();
include_once "libs/maLibUtils.php";
	
	$view = valider("view"); 
	if (!$view) 
		$view = "accueil";
	
		include("templates/header.html");
	
		$msg_feedback = valider("msg_feedback"); 
	
	if ($msg_feedback) {
		include("templates/feedback.php");
	}
	
	switch($view)
	{		
		default :
			if (file_exists("templates/$view.html"))
				include("templates/$view.html");
	}
	include("templates/footer.html");
	
?>
