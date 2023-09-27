<!DOCTYPE html>
<html lang="fr">
    <head>
		
        <meta charset="utf-8" />
        <title>Simplon</title>
				<link rel="stylesheet" href="bootstrap.css">
		
    </head>
	
    <body>

		<div class="container">
			
			<form method="post" action="ajout.php">
			<h1>Formulaire: </h1>
				<div class="form-groupe">
					<label for="Nom">Nom: </label><input type="text" class="form-control" name="nom" id="nom" required />
				</div>
				<div class="form-groupe">
					<label for="Prenom">Prénom: </label><input type="text" class="form-control" name="prenom" id="prenom" required />
				</div>
				<div class="form-group">
					<label for="numero">Numéro de téléphone: </label><input type="text" class="form-control" name="numero" id="numero"required />
				</div>
				<div class="form-group">
					<label for="mail">Adresse email: </label><input type="text" name="mail" class="form-control" id="mail" required />
				</div>
				<input type="submit" class="btn btn-primary">
		
		</form>
		
		<div class="row justify-content-end">
			<a class="btn" href="liste.php">Voir la liste des participants</a>
		</div>
	
		</div>
		
		<script>

		
    </body>
</html>