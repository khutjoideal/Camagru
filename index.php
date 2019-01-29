<?php
	require('database.php');
	require('classes/bootstrap.php');
	include('header.php');
	include('signup.php');

	$bootstrap = new Bootstrap($_GET);
	$controller = $bootstrap->createController;
?>
<html>
	<section class="main-container">
		<div class="main-wrapper">
				<?php				
					if (isset($_SESSION['u_id']) && $_SESSION['u_pwdchange'] == false) {
						header("Location: /products.php");
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