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
				</tr>";
			}
		?>
</center>
