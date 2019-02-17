<?php

	require('config/database.php');

	require('classes/conn.php');
	require('classes/control.php');
	require('classes/model.php');

	require('controllers/home.php');
	require('controllers/users.php');
	require('controllers/shares.php');

	require('models/home.php');
	require('models/users.php');
	require('models/shares.php');

	include('views/header.php');
	require('config/signup.php');

	$bootstrap = new Bootstrap($_GET);
	$controller = $bootstrap->createController();
	if($controller){
		$controller->executeAction();
	}
?>
<html>
	<section class="main-container">
		<div class="main-wrapper">
				<?php				
					if (isset($_SESSION['u_id']) && $_SESSION['u_pwdchange'] == false) {
						header("Location: /people.php");
						exit();
					}
					if ($_SESSION['u_pwdchange'] == true) {
						echo "You're password has successfully been changed!";
						$_SESSION['u_pwdchange'] == false;
					}
				?>

		</div>
	</section>
</html> 