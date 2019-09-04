//Traite les données
<?php
	include("modele/modele.php");

	function selectAllC($table)
	{
		if($table == "moniteur" || $table == "candidat" || $table =="cours" || $table== "preparer" || $table == "permis")
		{
			$resultats = selectAllM ($table);
			return $resultats;
		}
		else
		{
			return null;
		}
	}

	function selectAllCours()
	{
		$resultats = selectAllCoursModele();
		return $resultats;
	}

	function selectAllPrepare()
	{
		$resultats = selectAllPrepareModele();
		return $resultats;
	}

	//Fonction Candidat
	function insertCandidatC($tab)
	{
		//Vérification des données
		insertCandidatModele($tab);
	}

	function deleteCandidatC($idcandidat)
	{
		//Vérification de l'ID
		deleteCandidatModele($idcandidat);
	}

	function selectWhereIdCandidatC($idcandidat)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdCandidatModele($idcandidat);
		return $resultat;
	}

	function updateCandidatC($tab)
	{
		//Vérification des données
		updateCandidatModele($tab);
	}

	//Fonction Moniteur
	function insertMoniteurC($tab)
	{
		//Vérification des données
		insertMoniteurModele($tab);
	}

	function updateMoniteurC($tab)
	{
		//Vérification des données
		updateMoniteurModele($tab);
	}

	function deleteMoniteurC($idmoniteur)
	{
		//Vérification de l'ID
		deleteMoniteurModele($idmoniteur);
	}

	function selectWhereIdMoniteurC($idmoniteur)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdMoniteurModele($idmoniteur);
		return $resultat;
	}

	//Fonction Permis
	function insertPermisC($tab)
	{
		//Vérification des données
		insertPermisModele($tab);
	}

	function updatePermisC($tab)
	{
		//Vérification des données
		updatePermisModele($tab);
	}

	function deletePermisC($idpermis)
	{
		//Vérification de l'ID
		deletePermisModele($idpermis);
	}

	function selectWhereIdPermisC($idpermis)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdPermisModele($idpermis);
		return $resultat;
	}

	//Fonction Cours
	function insertCoursC($tab)
	{
		//Vérification des données
		insertCoursModele($tab);
	}

	function updateCoursC($tab)
	{
		//Vérification des données
		updateCoursModele($tab);
	}

	function deleteCoursC($idcours)
	{
		//Vérification de l'ID
		deleteCoursModele($idcours);
	}

	function selectWhereIdCoursC($idcours)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdCoursModele($idcours);
		return $resultat;
	}

	//Fonction Preparer
	function insertPreparerC($tab)
	{
		//Vérification des données
		insertPreparerModele($tab);
	}

	function updatePreparerC($tab)
	{
		//Vérification des données
		updatePreparerModele($tab);
	}

	function deletePreparerC($idpreparer)
	{
		//Vérification de l'ID
		deletePreparerModele($idcours);
	}

	function selectWhereIdPreparerC($idpreparer)
	{
		//Vérification de l'ID
		$resultat = selectWhereIdPreparerModele($idpreparer);
		return $resultat;
	}
?>