<?php
include 'settings.php';
include 'openid.php';
try
{
	$openid = new LightOpenID('http://'.$_SERVER['SERVER_NAME'].'/');
	if (!$openid->mode) {
		$openid->identity = 'http://steamcommunity.com/openid';
		header('Location: '.$openid->authUrl());
	} elseif ($openid->mode == 'cancel') {
		echo '';
	} else {
		if ($openid->validate()) {

			$id = $openid->identity;
			$ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
			preg_match($ptn, $id, $matches);

			$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=CFFC94B1241701E3F19742E1F9129411&steamids=$matches[1]";
			$json_object = file_get_contents($url);
			$json_decoded = json_decode($json_object);
			foreach ($json_decoded->response->players as $player) {
				$steamid = $player->steamid;
				$name = $player->personaname;
				
				$name = str_replace("script", "*", $name);
				$name = str_replace("/", "*", $name);
				$name = str_replace("<", "*", $name);
				$name = str_replace(">", "*", $name);
				$name = str_replace("body", "*", $name);
				$name = str_replace("onload", "*", $name);
				$name = str_replace("alert", "*", $name);
				$name = str_replace(")", "*", $name);
				$name = str_replace("(", "*", $name);
				$name = str_replace("'", "*", $name);
				
				$avatar = $player->avatarfull;
			}

			$hash = md5($steamid . time() . rand(1, 50));
			$sql = $db->query("SELECT * FROM `users` WHERE `steamid` = '" . $steamid . "'");
			$row = $sql->fetchAll(PDO::FETCH_ASSOC);
			if (count($row) == 0) {
										
				$name = str_replace("script", "*", $name);
				$name = str_replace("/", "*", $name);
				$name = str_replace("<", "*", $name);
				$name = str_replace(">", "*", $name);
				$name = str_replace("body", "*", $name);
				$name = str_replace("onload", "*", $name);
				$name = str_replace("alert", "*", $name);
				$name = str_replace(")", "*", $name);
				$name = str_replace("(", "*", $name);
				$name = str_replace("'", "*", $name);
				
				
				
				
				$db->exec("INSERT INTO `users` (`hash`, `steamid`, `name`, `avatar`) VALUES ('" . $hash . "', '" . $steamid . "', " . $db->quote($name) . ", '" . $avatar . "')");
			} else {

				$name = str_replace("script", "*", $name);
				$name = str_replace("/", "*", $name);
				$name = str_replace("<", "*", $name);
				$name = str_replace(">", "*", $name);
				$name = str_replace("body", "*", $name);
				$name = str_replace("onload", "*", $name);
				$name = str_replace("alert", "*", $name);
				$name = str_replace(")", "*", $name);
				$name = str_replace("(", "*", $name);
				$name = str_replace("'", "*", $name);

				
				$db->exec("UPDATE `users` SET `hash` = '" . $hash . "', `name` = " . $db->quote($name) . ", `avatar` = '" . $avatar . "' WHERE `steamid` = '" . $steamid . "'");
			}
			setcookie('hash', $hash, time() + 3600 * 24 * 7, '/');
			header('Location: sets.php?id=' . $hash);
		}
	}
} catch (ErrorException $e) {
	exit($e->getMessage());
}
?>