<?php
	session_start();
?>

<!DOCTYPE html>

<head>
	<title>Camagru</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
	<nav>
		<div class = "main-wrapper">
			<ul>
				<li><a href ="index.php"><img class="clickImages" src="img/home.svg"></a></li>
			</ul>
			<div class="nav-login">
				<?PHP
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
						<button class="firstButtons" type="submit" name="submit">Logout</button>
						</form>
						<a href="profile.php">Profile</a>
						<a href="people.php">People</a>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="username" placeholder="Username, e-mail">
						<input type="password" name="password" placeholder="password">
						<button class="firstButtons" type="submit" name="submit">Login</button>
						</form>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
