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

<div>
	<?php if(isset($_SESSION['u_id'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
		</div>
	<?php endforeach; ?>
</div>