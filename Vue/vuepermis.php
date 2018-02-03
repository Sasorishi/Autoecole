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
				</tr>";
			}
		?>
</center>
