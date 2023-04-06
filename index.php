<!DOCTYPE html>
<html lang="en">
<head>
<title>Formulaire de connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/style.css">
</head>
<body>

	<div class="container">
		<h1>Formulaire de connexion</h1>
		<form>
			<label for="email">Email :</label>
			<input type="email" id="email" name="email" placeholder="name@gmail.com" required>

			<label for="mot_de_passe">Mot de passe :</label>
			<input type="password" id="mot_de_passe" name="mot_de_passe" required>

			<button type="submit">Se connecter</button>
            <a href="./views/register.php">Avez-vous un compte ?</a>
		</form>
	</div>

</body>
</html>