<?php

	session_start();
	
	if (isset($_SESSION['session_id']))
		session_unset($_SESSION['session_id']);
	if (isset($_SESSION['logged']))
		session_unset($_SESSION['logged']);
	session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>XML CRUD APP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<script src="js/jquery-2.1.0.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/custom.js"></script>


</head>
<body>
	<br /><br /><br />
	<div class="container">
		<div class="col-sm-offset-3 col-sm-5 alert alert-success" role="alert">You have been successfully disconnected. <a href="index.php" class="alert-link">Sign in again</a></div>
    </div>


</body>
</html>







