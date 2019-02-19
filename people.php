<?php
    include_once('/views/header.php');
?>

<section class="main-container">
	<div class="main-wrapper">
        <h2>Login</h2>
        <form class="signup-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <button class="firstButtonsSignUp" type="submit" name="submit">Login</button>
        </form>
	</div>
</section>