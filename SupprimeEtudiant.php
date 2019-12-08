<?php 
	require_once("security.php");
	require_once("RoleScolaritre.php"); 
?>
<?php 
$code = $_GET['code'];
require_once("conn.php");
$ps = $pdo ->prepare("DELETE FROM etudiants WHERE CODE=?");
$params = array($code);
$ps-> execute($params);
header("location:etudiants.php");
 ?>