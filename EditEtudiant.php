<?php 
	require_once("security.php"); 
	require_once("RoleScolaritre.php");
?>
<?php 
	$code = $_GET['code'];
	require_once("conn.php");
	$ps = $pdo -> prepare("SELECT * FROM etudiants WHERE CODE=?");
	$params = array($code);
	$ps -> execute($params);
	$etudiant = $ps -> fetch();


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
</head>
<body>
	<?php require_once("entete.php"); ?>
	<div class="container space col-md-6 col-xs-12 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">Saisie des Etudiant</div>
			<div class="panel-body">
				<form method="post" action="UpdateEtudiant.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">CODE:<?php echo ($etudiant['CODE']); ?></label>
						<input type="hidden" name="code" value="<?php echo ($etudiant['CODE']); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Nom:</label>
						<input type="text" name="nom" value="<?php echo ($etudiant['NOM']); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Email:</label>
						<input type="text" name="email" value="<?php echo ($etudiant['EMAIL']); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Photo:</label>
						<input type="file" name="photo" value="" class="form-control">
						<img src="images/<?php echo($etudiant['PHOTO'])?>" wide='100' height='100'>
					</div>
					<div>
						<button type="submit">save</button>
					</div>
				</form>
			</div>
		</div>	
	</div>

</body>
</html>