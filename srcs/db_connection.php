<?php
session_start();

function launchquery($request, $types, $vars, $fetch)
{
	$db = mysqli_connect("192.168.99.100", "root", "root", "rush00", 3306);
 // 	$db = mysqli_connect("localhost", "root", "42mamp", "rush00", 3306);
	$ret = NULL;
	$stmt = mysqli_prepare($db, $request);
	if ($stmt)
	{
		if ($types && $vars)
			mysqli_stmt_bind_param($stmt, $types, ...$vars);
		if (mysqli_stmt_execute($stmt) && $fetch === true)
		{
			$ret = array();
			$result = mysqli_stmt_get_result($stmt);
			while ($oneret = mysqli_fetch_assoc($result))
				array_push($ret, $oneret);
		}
		mysqli_stmt_close($stmt);
	}
	else
	{
		mysqli_close($db);
		header("Location: ?msg=Dababase error! Please retry later");
		exit();
	}
	mysqli_close($db);
	return $ret;
}
?>
