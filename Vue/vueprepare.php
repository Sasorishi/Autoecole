<center>
	<h2> Liste des permis prépares </h2>
	</br>
	<table border = 1>
		<tr>
		<td> Nom Candidat </td>
		<td> Prenom Candidat </td>
		<td> Libelle </td>
		<td> Annee </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["nomcandidat"]. "</td>
				<td>" .$unResultat["prenomcandidat"]. "</td>
				<td>" .$unResultat["libelle"]. "</td>
				<td>" .$unResultat["annee"]. "</td>
				<td> <a href='index.php?page=5&action=X&idpermis=".$unResultat["idpermis"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=5&action=E&idpermis=".$unResultat["idpermis"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>

	<h2> Ajout d'un permis préparé </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom candidat : </td> <td><input type= "text" name= "nom" value = "<?php if (isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
			<tr><td> Prenom candidat : </td> <td><input type= "text" name= "prenom" value = "<?php if (isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
			<tr><td> Libelle : </td> <td><input type= "text" name= "libelle" value = "<?php if (isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
			<tr><td> Annee : </td> <td><input type= "date" name= "annee" value = "<?php if (isset($resultat)) echo $resultat['annee'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idcandidat" value = "<?php if (isset($resultat)) echo $resultat['idcandidat'] ; ?>">
	</form>
</center>