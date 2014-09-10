<?php
	session_start();
	
	if( isset($_POST['email']) && !empty($_SESSION['email']) ){
		//Honey Pot : This field must not be set or filled
		header("Location:login.php");
	}
	else if( !isset($_POST['login']) || empty($_SESSION['login']) || !isset($_POST['pwd']) || empty($_SESSION['pwd']) ) {
		//login empty or not set
		header("Location:login.php");
	}
	
	$loginInput = $passInput = null;
	
	if (isset($_POST['login']))
		$loginInput = $_POST['login'];
	if (isset($_POST['pwd']))
		$passInput = md5($_POST['pwd']);
		
	$users = simplexml_load_file("data/users.xml");
	foreach ($users as $user){
		$validated = ($user->pseudo == $loginInput && $user->pwd == $passInput);
	}
	
	if ($validated){
		session_regenerate_id();
		$_SESSION['session_id'] = session_id();
		$_SESSION['logged'] = true;
		$_SESSION['login'] = $loginInput;
		$_SESSION['pwd'] = $passInput;
	}
	else if (!$validated || !( isset($_SESSION['session_id']) && !empty($_SESSION['session_id']) && isset($_SESSION['logged']) && $_SESSION['logged'])){
		header("Location:login.php");
	}
	
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

	<div class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Nav</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Crud Xml Fork</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="process.php?list">List all users</a></li>
					<li><a href="process.php?add">Add user</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search" method="POST" action="process.php?filter">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="pers">
					</div>
					<button type="submit" class="btn btn-default">Filtrer</button>
				</form>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
	<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') : ?>
		<a href="process.php?list" class="btn btn-default btn-lg" role="button">List all users</a>
		<a href="process.php?add" class="btn btn-default btn-lg" role="button">Add user</a>
	<?php endif; ?>
	</div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>You are about to delete a record, this procedure is irreversible. Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="#" class="btn btn-danger danger">Delete</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>







