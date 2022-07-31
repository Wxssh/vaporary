<?php
include 'settings.php';


if($_GET['steamid'])
{
	if($user['rank'] == 69)
	{
		$db->exec('UPDATE users SET rank = ' . filter_var($_GET['rank'], FILTER_SANITIZE_STRING) . ' WHERE steamid = ' . filter_var($_GET['steamid'], FILTER_SANITIZE_STRING));
		header('Location: adminpanel.php');
	}
	else
	{
		header('Location: adminpanel.php');
	}
}
else
{
	header('Location: adminpanel.php');
}