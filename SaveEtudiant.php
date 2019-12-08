<?php 
	require_once("security.php");
	require_once("RoleScolaritre.php"); 
?>
<?php 
	$nom  = $_POST['nom'];
	$email  = $_POST['email'];
	$nomPhote = $_FILES['photo']['name'];
	$fichiertempo = $_FILES['photo']['tmp_name'];
	move_uploaded_file($fichiertempo, './images/'.$nomPhote);
	require_once("conn.php");
	$ps = $pdo ->prepare("INSERT INTO etudiants(NOM,EMAIL,PHOTO) VALUES (?,?,?)");
	$params = array($nom,$email,$nomPhote);
	$ps->execute($params);
	header("location:etudiants.php");
 ?>