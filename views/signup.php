<?php
	include_once('/views/header.php');
?>

<section class="main-container">
	<div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button class="firstButtonsSignUp" type="submit" name="submit">Sign Up</button>
        </form>
	</div>
</section>