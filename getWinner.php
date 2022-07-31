<?php
	include 'settings.php';

	if($_GET['hash'] && $_GET['secret'])
	{
		$exec01 = $db->query('SELECT winner FROM games WHERE `hash` = '.$db->quote($_GET['hash']));

		if($exec01->rowCount() == 0)
		{
			exit(json_encode(array('success'=> false, 'error'=>'Error: Game not found')));
		}
		else
		{
			$exec = $exec01->fetch();
			exit(json_encode(array('success'=> true, 'winner'=>$exec['winner'])));
		}
	}
?>