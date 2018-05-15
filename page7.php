<?php

	include 'index.php';
	
		
		$requete = $connexion->query("SELECT gender,COUNT(gender) FROM TABLE1 GROUP BY gender ORDER BY COUNT(gender) ASC");
		
		echo '<table>';
		
		while($resultat = $requete->fetch()){
			
			//afficher les résultats	
			echo '<tr>';
			
				echo '<th></th>';
				echo '<td>' .$resultat['gender'].'</td><br>';
				
				echo '<th>number of registrants</th>';
				echo '<td>' .$resultat['COUNT(gender)'].'</td><br>';
							
			echo '</tr>';
			}
		echo '</table>';

?>