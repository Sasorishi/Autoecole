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
				if (isset($_GET["action"]) && isset($_GET["idcandidat"]))
				{
					$action = $_GET["action"];
					$idcandidat = $_GET["idcandidat"];
					if ($action == "X")
					{
						deleteCandidatC($idcandidat);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdCandidatC($idcandidat);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateCandidatC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertCandidatC ($_POST);
				}
				$resultats = selectAllC("candidat");
				include ("vue/vuecandidat.php");
			break;

			case 2:
				if (isset($_GET["action"]) && isset($_GET["idmoniteur"]))
				{
					$action = $_GET["action"];
					$idmoniteur = $_GET["idmoniteur"];
					if ($action == "X")
					{
						deleteMoniteurC($idmoniteur);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdMoniteurC($idmoniteur);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateMoniteurC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertMoniteurC ($_POST);
				}
				$resultats = selectAllC("moniteur");
				include ("vue/vuemoniteur.php");
			break;

			case 3:
				if (isset($_GET["action"]) && isset($_GET["idpermis"]))
				{
					$action = $_GET["action"];
					$idpermis = $_GET["idpermis"];
					if ($action == "X")
					{
						deletePermisC($idpermis);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdPermisC($idpermis);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updatePermisC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertPermisC ($_POST);
				}
				$resultats = selectAllC("permis");
				include ("vue/vuepermis.php");
			break;

			case 4:
				if (isset($_GET["action"]) && isset($_GET["idcours"]))
				{
					$action = $_GET["action"];
					$idcours = $_GET["idcours"];
					if ($action == "X")
					{
						deleteCoursC($idcours);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdCoursC($idcours);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updateCoursC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertCoursC ($_POST);
				}
				$resultats = selectAllCours("cours");
				include ("vue/vuecours.php");
			break;

			case 5:
				if (isset($_GET["action"]) && isset($_GET["idpermis"]))
				{
					$action = $_GET["action"];
					$idpermis = $_GET["idpermis"];
					if ($action == "X")
					{
						deletePreparerC($idpermis);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdPreparerC($idpermis);

					}
				}
				if (isset($_POST["Modifier"]))
				{
					updatePreparerC($_POST);
					$resultat = null;
				}
				if (isset($_POST["Enregistrer"]))
				{
					//Appel de la fonction insert du controleur avec envoi du tableau POST
					insertPreparerC ($_POST);
				}
				$resultats = selectAllPrepare("prepare");
				include ("vue/vueprepare.php");
			break;
		}
	?>
</body>
</html>