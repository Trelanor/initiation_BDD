<?php

	include 'index.php';
	
		//selection country_code que l'on compte sur la table et que l'on regroupe avec le country_code
		$requete = $connexion->query("SELECT country_code,COUNT(country_code) FROM TABLE1 GROUP BY country_code ORDER BY COUNT(country_code) ASC");
		
		echo '<table>';
		
		//boucle pour afficher les résultats
			while($resultat = $requete->fetch()){
			
			//afficher les résultats	
			echo '<tr>';
			
				echo '<th>Country</th>';
				echo '<td>' .$resultat['country_code'].'</td>';
				
				echo '<th>number of registrants</th>';
				echo '<td>' .$resultat['COUNT(country_code)'].'</td>';
				
				
				
			echo '</tr>';
			}
		echo '</table>';
		
?>	