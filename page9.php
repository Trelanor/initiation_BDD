<?php
	
	include 'index.php';

	$requete = $connexion->query("SELECT * FROM students s, departement d WHERE s.id_dpt = d.id");
	
	echo '<table>';
		
		//boucle pour afficher les résultats
			while($resultat = $requete->fetch()){
			
			//afficher les résultats	
			echo '<tr>';
			
				echo '<th>Prenom</th>';
				echo '<td>' .$resultat['first_name'].'</td>';
				
				echo '<th>Nom</th>';
				echo '<td>' .$resultat['last_name'].'</td>';
				
				echo '<th>Département</th>';
				echo '<td>' .$resultat['departement'].'</td>';
				
				echo '<th>numéro de département</th>';
				echo '<td>' .$resultat['nb_dpt'].'</td>';
				
				
				
			echo '</tr>';
			}
		echo '</table>';

?>