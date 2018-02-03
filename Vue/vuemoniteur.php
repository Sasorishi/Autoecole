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
				</tr>";
			}
		?>
</center>
