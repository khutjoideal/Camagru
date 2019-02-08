<?php
<<<<<<< HEAD:views/index.php

	require('config/database.php');

	require('classes/conn.php');
	require('classes/control.php');

	require('controllers/home.php');
	require('controllers/users.php');
	require('controllers/shares.php');

=======
	require('includes/database.php');

	require('classes/conn.php');
	require('classes/control.php');
>>>>>>> 52a3bd66797de63121b662038addc41c23c85100:index.php
	include('header.php');
	require('signup.php');

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