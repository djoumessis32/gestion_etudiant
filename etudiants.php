<?php require_once("security.php");
	 require_once("RoleScolaritre.php");		
 ?>
<?php 
	require_once("conn.php");
	$req = "SELECT * FROM etudiants";
	$ps = $pdo ->prepare($req);
	$ps -> execute();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
 	<meta charset="utf-8">
 </head>
 <body>
	<?php require_once("entete.php"); ?>
 	<div class="col-md-12 col-xs-12">
 		<div class="panel panel-info space">
 			<div class="panel-heading">liste des etudiants</div>
 			<div class="panel-body">
 				<table class="table table-striped">
		 		<thead>
		 			<tr>
		 				<th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th>
		 			</tr>
		 		</thead>
		 		<tbody>
		 			<?php while ($et=$ps -> fetch()){ ?>
	 				<tr>
	 					<td><?php echo ($et['CODE']); ?></td>
	 					<td><?php echo ($et['NOM']); ?></td>
	 					<td><?php echo ($et['EMAIL']); ?></td>
	 					<td><img src="images/<?php echo ($et['PHOTO']); ?>" wide="80" height="80" ></td>
	 					<td><a href="EditEtudiant.php?code=<?php echo ($et['CODE']); ?>">Edit</a></td>
	 					<td><a onclick="return confirm('ête vous sure de ........')"href="SupprimeEtudiant.php?code=<?php echo ($et['CODE']); ?>">Supprimer</a></td>
	 				</tr>
		 			<?php } ?>
		 		</tbody>
		 		</table>
 			</div>
 		</div>	
 	</div>
 </body>
 </html>