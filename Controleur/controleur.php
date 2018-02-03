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
?>
