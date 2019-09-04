<center>
	<h2> Liste des permis enrengistrer </h2>
	</br>
	<table border = 1>
		<tr>
		<td> Id Permis </td>
		<td> Libelle </td>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idpermis"]. "</td>
				<td>" .$unResultat["libelle"]. "</td>
				<td> <a href='index.php?page=3&action=X&idpermis=".$unResultat["idpermis"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=3&action=E&idpermis=".$unResultat["idpermis"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>

	<h2> Ajout d'un permis </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Libelle : </td> <td><input type= "text" name= "libelle" value = "<?php if (isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idpermis" value = "<?php if (isset($resultat)) echo $resultat['idpermis'] ; ?>">
	</form>
</center>