<?php

	require('includes/database.php');

	require('classes/conn.php');
	require('control.php');

	include('header.php');
	include('signup.php');

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