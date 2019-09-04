<center>
	<h2> Planning des cours </h2>
	</br>
	<table border = 1>
		<tr>
		<td> Numero cours </td>
		<td> Nom Candidat </td>
		<td> Prenom Candidat </td>
		<td> Nom Moniteur </td>
		<td> Prenom Moniteur </td>
		<td> Date Cours </td>
		<td> Heure Debut </td>
		<td> Heure Fin </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idcours"]. "</td>
				<td>" .$unResultat["nomcandidat"]. "</td>
				<td>" .$unResultat["prenomcandidat"]. "</td>
				<td>" .$unResultat["nommoniteur"]. "</td>
				<td>" .$unResultat["prenommoniteur"]. "</td>
				<td>" .$unResultat["datecours"]. "</td>
				<td>" .$unResultat["heuredebut"]. "</td>
				<td>" .$unResultat["heurefin"]. "</td>
				<td> <a href='index.php?page=4&action=X&idcours=".$unResultat["idcours"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=4&action=E&idcours=".$unResultat["idcours"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>

	<h2> Ajout d'un cours </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom candidat : </td> <td><input type= "text" name= "nomcandidat" value = "<?php if (isset($resultat)) echo $resultat['nomcandidat'] ; ?>"></td></tr>
			<tr><td> Prenom candidat : </td> <td><input type= "text" name= "prenomcandidat" value = "<?php if (isset($resultat)) echo $resultat['prenomcandidat'] ; ?>"></td></tr>
			<tr><td> Nom moniteur : </td> <td><input type= "text" name= "nommoniteur" value = "<?php if (isset($resultat)) echo $resultat['nommoniteur'] ; ?>"></td></tr>
			<tr><td> Prenom moniteur : </td> <td><input type= "text" name= "prenommoniteur" value = "<?php if (isset($resultat)) echo $resultat['prenommoniteur'] ; ?>"></td></tr>
			<tr><td> Date de cours : </td> <td><input type= "date" name= "datecours" value = "<?php if (isset($resultat)) echo $resultat['datecours'] ; ?>"></td></tr>
			<tr><td> Heure de debut : </td> <td><input type= "time" name= "heuredebut" value = "<?php if (isset($resultat)) echo $resultat['heuredebut'] ; ?>"></td></tr>
			<tr><td> Heure de fin : </td> <td><input type= "time" name= "heurefin" value = "<?php if (isset($resultat)) echo $resultat['heurefin'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idcours" value = "<?php if (isset($resultat)) echo $resultat['idcours'] ; ?>">
	</form>
</center>