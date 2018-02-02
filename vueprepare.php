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
				</tr>";
			}
		?>
</center>