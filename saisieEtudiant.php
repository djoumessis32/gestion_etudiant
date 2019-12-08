<?php 
	require_once("security.php"); 
	require_once("RoleScolaritre.php");	
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
				<form method="post" action="SaveEtudiant.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">Nom:</label>
						<input type="text" name="nom" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Email:</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Photo:</label>
						<input type="file" name="photo" class="form-control">
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