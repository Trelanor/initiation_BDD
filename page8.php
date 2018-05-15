<?php

	include 'index.php';
	
	$requete = $connexion->query('SELECT gender, YEAR(NOW())-AVG(YEAR(birth_date)) AS moy_age FROM TABLE1 where birth_date not in ("0000-00-00") GROUP BY gender ');
	
	echo '<table>';
	
		while ($resultat = $requete->fetch())
		{
			echo '<tr><td>'.$resultat['gender'].'</td>
			<td>'.ROUND($resultat['moy_age']).'Ans</td></tr><br>';
		}
	
	echo '</table>';
?>