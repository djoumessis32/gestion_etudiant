<?php 

	try {
		$connection = 'mysql:host=localhost;dbname=scolarite';
		$pdo = new PDO($connection,'root','');
	} catch (Exception $e) {
		$msg = 'ERREUR PDO dans' . $e->getMessage();
		die($msg);
	}
 ?>