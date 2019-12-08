<div class="navbar navbar-inverse navbar-fixed-top ">
	<ul class="nav navbar-nav">
		<li><a href="Etudiants.php">Etudiants</a></li>
		<li><a href="SaisieEtudiant.php">Saisie</a></li>
		<li><a href="LogOut.php">
LogOut[<?php if(isset($_SESSION['PROFILE'])){echo($_SESSION['PROFILE']['LOGIN']);}else{echo "";}; ?>]</a></li>
	</ul>
</div>