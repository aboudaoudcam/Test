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

  	if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['numero']) AND isset($_POST['mail'])) {
  	$requete = $basedonne -> prepare('INSERT INTO listepresence(Nom, Prenom, Telephone, Email ) VALUES(:nom, :prenom, :numero, :mail)') ;
  	$requete->execute([
  	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'numero' => $_POST['numero'],
	'mail' => $_POST['mail'] ]);
	 ?>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="bootstrap.css">

	<div class="container">
		
		<div class="alert alert-success"><h4 class="alert-heading"> votre Enregistrement a été réussi</div>
		
		
			<a class="btn" href="index.php">Enregitrer</a>
			<a class="btn" href="liste.php">liste</a>
		
	</div>

	<?php }  else{ 
	  header("Location:index.php") ; }  ?>