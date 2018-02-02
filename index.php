<?php
	include("controleur/controleur.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Auto Ecole </title>
</head>
<body>
	<center>
		<h1> Gestion de l'auto-Ecole </h1>
	</center>
	</br>
	<a href="index.php?page=1"> Liste des candidats </a></br>
	<a href="index.php?page=2">	Liste des moniteurs </a></br>
	<a href="index.php?page=3"> Liste des permis </a></br>
	<a href="index.php?page=4"> Planning des cours </a></br>
	<a href="index.php?page=5"> Liste des permis prépares </a></br>
	<?php
		if (isset($_GET["page"]))
		{
			$page = $_GET["page"];
		}
		else
		{
			$page = 0;
		}
		switch ($page) 
		{
			case 1:
				$resultats = selectAllC("candidat");
				include ("vue/vuecandidat.php");
			break;

			case 2:
				$resultats = selectAllC("moniteur");
				include ("vue/vuemoniteur.php");
			break;

			case 3:
				$resultats = selectAllC("permis");
				include ("vue/vuepermis.php");
			break;

			case 4:
				$resultats = selectAllCours("cours");
				include ("vue/vuecours.php");
			break;

			case 5:
				$resultats = selectAllPrepare("prepare");
				include ("vue/vueprepare.php");
			break;
		}
	?>
</body>
</html>