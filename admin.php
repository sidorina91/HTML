<?php 
include("../srcs/db_connection.php");
if ($_SESSION["user"]->class != "admin")
{
	header("Location: ../page/article.php?msg=Access Denied");
	exit();
}
;?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("../includes/header.php");?>
	</head>
	<body>
		<?php include("../includes/admin_nav.php");?>
		<?php include("../includes/notification.php");?>
		<div id="users" class="admin_container"> Users :
			<form action="../srcs/create_user.php?add" method="POST">
				<p>Create user = login:</p>
				<input class="textbox" name="username" type="text" 
										   placeholder="Login here" value="">
				<br>
				<p>Create user = Password :</p>
				<input class="textbox" name="userpasswd" type="password" 
											 placeholder="Password here" value="">
				<br>
				<input class="submit" type="submit" value="Create user">
			</form>

			<form action="../srcs/change_user.php?change" method="POST">
				<p>Change user = Select:</p>
				<input class="textbox" name="select" type="text" 
										 placeholder="User who will be changed" value="">
				<br>
				<p>Change user = Login:</p>
				<input class="textbox" name="username" type="text" 
										   placeholder="new Login here" value="">
				<br>
				<p>Change user = Password :</p>
				<input class="textbox" name="userpasswd" type="password" 
											 placeholder="new Password here" value="">
				<br>
				<p>Change user = class :</p>
				<input class="textbox" name="userclass" type="text" 
											placeholder="new Class here" value="">
				<br>
				<input class="submit" type="submit" value="Change user">
			</form>

			<form  action="../srcs/delete_user.php?delete" method="POST">
				<p>Delete user = Select:</p>
				<input class="textbox" name="del_us" type="text" 
										 placeholder="User who will be changed" value="">
				<br>
				<p>Delete user = Confirm:</p>
				<input class="textbox" name="confirm" type="password" 
											 placeholder="enter admin password here" value="">
				<br>
				<input class="submit" type="submit" value="Delete user">
			</form>
		</div>

		<div id="article" class="admin_container"> Article:
		</div>

		<div id="categories" class="admin_container"> categories:
		</div>
	</body>
		<?php include("../includes/script.php");?>
</html>
