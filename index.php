<?php
	
	//variable pour les informations de connexion
	$host = 'localhost'; // adresse du serveur
	$login = 'root'; // Login
	$pass = 'root'; // mot de passe
	$base = 'Initiation_DB'; // base de données à utiliser
	
	try{
		
		//connection à la base de données
		$connexion = new PDO("mysql:host=$host;dbname=$base", $login, $pass);
	}
	
	catch(PDOException $e){
		echo 'echec de la connection :' .$e->getMessage();
	}
	
	$connexion
	->query("SET NAMES UTF8");//Solution encodage UTF8
?>

<!DOCTYPE html>
    <html lang="fr">
	    <head>
		    <meta charset="utf-8">
			<title>requête SQL</title>
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		</head>
		
		<body>
		
			<h1>Base de données</h1>
			<ul>
				<li><a href="index.php">Acceuil</a></li>
				<br>
				<li><a href="page1.php">Liste des Palmer</a></li>
				<li><a href="page2.php">Liste des personnes du genre féminin</a></li>
				<li><a href="page3.php">Liste des personnes dont le code-pays commence par N</a></li>
				<li><a href="page4.php">Liste des personnes dont l'email contient google</a></li>
				<li><a href="page5.php">Liste répartie par état et nombre d'enregistrement</a></li>
				<li><a href="page7.php">Affichage du nombre d'hommes et de femmes</a></li>
				<li><a href="page8.php">Moyenne d'age suivant le genre</a></li>
				<li><a href="page9.php">Liste des aprenants ACS</a></li>
			</ul>
		
		    <script src="script.js"></script>
		</body>
	</html>