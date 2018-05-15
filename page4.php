<?php

	include 'index.php';
	
	//requête pour afficher les personnes dont l'email contient google

		$requete = $connexion->query("SELECT * FROM TABLE1 WHERE email LIKE'%google%'");
		
		echo '<table>';
		
		//boucle pour afficher les résultats
			while($resultat = $requete->fetch()){
			
			//afficher les résultats	
			echo '<tr>';
			
				echo '<th>ID</th>';
				echo '<td>' .$resultat['id'].'</td>';
				
				echo '<th>First Name</th>';
				echo '<td>' .$resultat['first_name'].'</td>';
				
				echo '<th>Last Name</th>';
				echo '<td>' .$resultat['last_name'].'</td>';
				
				echo '<th>Email</th>';
				echo '<td>' .$resultat['email'].'</td>';
				
				echo '<th>Gender</th>';
				echo '<td>' .$resultat['gender'].'</td>';
				
				echo '<th>IP address</th>';
				echo '<td>' .$resultat['ip_address'].'</td>';
				
				echo '<th>Birth Date</th>';
				echo '<td>' .$resultat['birth_date'].'</td>';
				
				echo '<th>Zip Code</th>';
				echo '<td>' .$resultat['zip_code'].'</td>';
				
				echo '<th>Avatar URL</th>';
				echo '<td>' .$resultat['avatar_url'].'</td>';
				
				echo '<th>State Code</th>';
				echo '<td>' .$resultat['state_code'].'</td>';
				
				echo '<th>Country Code</th>';
				echo '<td>' .$resultat['country_code'].'</td>';
				
			echo '</tr>';
			}
		echo '</table>';
		
?>	