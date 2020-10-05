<?php include("../srcs/db_connection.php");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("../includes/header.php");?>
		<link rel="stylesheet" href="../css/article.css">
	</head>
	<body>
		<?php include("../includes/nav.php");?>
		<?php include("../includes/notification.php");?>
		<div id="article_container">
			<?php include("../includes/article_template.php");?>
<?php
$i = 0;
while ($i < 10)
{
	include("../includes/article_template.php");
	$i++;
}
?>
		</div>
	</body>
	<?php include("../includes/script.php");?>
</html>
