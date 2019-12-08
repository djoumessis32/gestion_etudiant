<?php 
	require_once("security.php");
	require_once("RoleScolaritre.php"); 
?>
<?php 
	$code  = $_POST['code'];
	$nom  = $_POST['nom'];
	$email  = $_POST['email'];
	$nomPhote = $_FILES['photo']['name'];
	require_once("conn.php");
	if ($nomPhote=="") {
		$ps = $pdo ->prepare("UPDATE  etudiants SET NOM=?, EMAIL=? WHERE CODE=?");
		$params = array($nom,$email,$code);
		$ps->execute($params);
	}else{
		$fichiertempo = $_FILES['photo']['tmp_name'];
		move_uploaded_file($fichiertempo, './images/'.$nomPhote);
		$ps = $pdo ->prepare("UPDATE  etudiants SET NOM=?, EMAIL=?, PHOTO=? WHERE CODE=?");
		$params = array($nom,$email,$nomPhote,$code);
		$ps->execute($params);
	}
	
	header("location:etudiants.php");
 ?>