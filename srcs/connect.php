<?php
include ("db_connection.php");

if (isset($_GET["connect"]))
{
	$get_users = $db->prepare("SELECT * FROM users WHERE name = ?");
	$get_users->execute(array($_POST["username"]));
	while ($data = $get_users->fetch())
	{
		if (hash("sha256", $_POST["userpasswd"]) == $data["password"] && 
			$data["status"] == "actif")
		{
			session_start();
			$_SESSION["user"] = (object) [
				"username" => $data["name"],
				"password" => $data["password"],
				"class" => $data["class"],
			];
			header("Location: ../page/article.php?user=connect");
			exit();
		}
		else
		{
			header("Location: ../page/connect.php?user=not_found&&msg=connection failed");
			exit();
		}
	}
	header("Location: ../page/connect.php?user=not_found&&msg=connection failed");
	exit();
}
