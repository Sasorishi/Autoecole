<center>
	<h2> Liste des moniteurs enrengistrer </h2>
	</br>
	<table border = 1>
		<tr>
		<td> Id Moniteur </td>
		<td> Nom </td>
		<td> Prenom </td>
		<td> Qualification </td>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idmoniteur"]. "</td>
				<td>" .$unResultat["nom"]. "</td>
				<td>" .$unResultat["prenom"]. "</td>
				<td>" .$unResultat["qualification"]. "</td>
				<td> <a href='index.php?page=2&action=X&idmoniteur=".$unResultat["idmoniteur"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='index.php?page=2&action=E&idmoniteur=".$unResultat["idmoniteur"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>

	<h2> Ajout d'un moniteur </h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Nom moniteur : </td> <td><input type= "text" name= "nom" value = "<?php if (isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
			<tr><td> Prenom moniteur : </td> <td><input type= "text" name= "prenom" value = "<?php if (isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
			<tr><td> Qualification : </td> <td><input type= "text" name= "qualification" value = "<?php if (isset($resultat)) echo $resultat['qualification'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idmoniteur" value = "<?php if (isset($resultat)) echo $resultat['idmoniteur'] ; ?>">
	</form>
</center>