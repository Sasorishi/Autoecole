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
				</tr>";
			}
		?>
</center>