<?php
    include('header.php');
    session_start();
?>

<section class="main-container">
	<div class="main-wrapper">
        <h2>echo "$_SESSION['u_username']"</h2>
        <form class="signup-form" action="includes/profile.inc.php" method="POST">
            <form action="upload-manager.php" method="post" enctype="multipart/form-data">
                <h2>Upload File</h2>
                <label for="fileSelect">Filename:</label>
                <input type="file" name="photo" id="fileSelect">
                <input type="submit" name="submit" value="Upload">
                <p>
                    <strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.
                </p>
            </form>
            <input type="text" name="first" readonly placeholder="<?php
                if(isset($_SESSION['u_first'])){echo $_SESSION['u_first'];}?>">
            <input type="text" name="last" readonly placeholder="<?php
                if(isset($_SESSION['u_last'])){echo $_SESSION['u_last'];}?>">
            <input type="text" name="email" readonly placeholder="<?php
                if(isset($_SESSION['u_email'])){echo $_SESSION['u_email'];}?>">
            <input type="text" name="username" placeholder="<?php
                if(isset($_SESSION['u_username'])){echo $_SESSION['u_username'];}?>">
            <input type="password" name="oldpassword" placeholder="Old Password">
            <input type="password" name="newpassword" placeholder="New Password">
            <div class="profile-button">
                <button type="submit" name="submit">Update</button>
                <button type="submit" name="delete">Delete</button>
            </div>
        </form>
	</div>
</section>
