
<?php 
    const DB_SERVER = 'localhost'; 
    const DB_USER = 'id19863531_camara';
    const DB_PASS = 'Camara22@';
    const DB_NAME = 'id19863531_base';
 


 	try {
 		$basedonne = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS) ;
 		
 	} catch (Exception $e) {
 	die('Erreur : '. $e->getMessage()) ;
 	}
	$requete = $basedonne->prepare('SELECT * FROM listepresence ORDER By Date DESC ') ;
	$requete->execute();
	$liste = $requete->fetchAll() ;
	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	
		<div class="container">
			
    	<h1>Liste des participants</h1>
    
			<a class="btn" href="index.php">Enregitrer</a>
		
			
			<table class="table">
				<thead>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Numéro de téléphone </th>
					<th>Adresse Email</th>

				</thead>
				<tbody>
					<?php 
					foreach ($liste as $ligne) {
					 	?>
					 	<tr>
					 		<td><?php echo $ligne['Nom']; ?></td>
					 		<td><?php echo $ligne['Prenom']; ?></td>
					 		<td><?php echo $ligne['Telephone']; ?></td>
					 		<td><?php echo $ligne['Email']; ?></td>
					 	</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</body>
</html>