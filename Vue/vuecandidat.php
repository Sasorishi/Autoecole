<center>
	<h2> Liste des candidats enrengistrer </h2>
	</br>
	<table border = 1>
		<tr>
			<td> Id Candidat </td>
			<td> Nom </td>
			<td> Prenom </td>
			<td> Adresse </td>
			<td> Date de naissance </td>
			<td> Montant de paye </td>
			<td> Actions </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idcandidat"]. "</td>
				<td>" .$unResultat["nom"]. "</td>
				<td>" .$unResultat["prenom"]. "</td>
				<td>" .$unResultat["adresse"]. "</td>
				<td>" .$unResultat["datenaissance"]. "</td>
				<td>" .$unResultat["montant"]. "</td>
				<td> <a href='index.php?page=1&action=X&idcandidat=".$unResultat["idcandidat"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=1&action=E&idcandidat=".$unResultat["idcandidat"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2> Ajout d'un candidat </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom candidat : </td> <td><input type= "text" name= "nom" value = "<?php if (isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
			<tr><td> Prenom candidat : </td> <td><input type= "text" name= "prenom" value = "<?php if (isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
			<tr><td> Adresse candidat : </td> <td><input type= "text" name= "adresse" value = "<?php if (isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
			<tr><td> Date de naissance candidat : </td> <td><input type= "date" name= "date" value = "<?php if (isset($resultat)) echo $resultat['datenaissance'] ; ?>"></td></tr>
			<tr><td> Montant paye candidat : </td> <td><input type= "number" name= "montant" value = "<?php if (isset($resultat)) echo $resultat['montant'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idcandidat" value = "<?php if (isset($resultat)) echo $resultat['idcandidat'] ; ?>">
	</form>
</center>