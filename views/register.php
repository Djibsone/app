<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

	<div class="container">
		<h1>Formulaire d'inscription</h1>
		<form>
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" placeholder="votre nom" required>

			<label for="email">Email :</label>
			<input type="email" id="email" name="email" placeholder="name@gmail.com" required>

			<label for="mot_de_passe">Mot de passe :</label>
			<input type="password" id="mot_de_passe" name="mot_de_passe" required>

			<label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
			<input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>

			<button type="submit">S'inscrire</button>
            <a href="../">Connectez-vous</a>
		</form>
	</div>

</body>
</html>
