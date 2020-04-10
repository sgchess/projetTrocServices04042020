<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>création client</title>
</head>
<body>
	<form action="index.php" method="get">
		<input type="hidden" name="action" value="created">
		<input type="hidden" name="controller" value="client">
		<p>
			<label for="nomClient">nom client</label>
			<input type="text" name="nomClient">
		</p>
		<p>
			<label for="prenomClient">prénom client</label>
			<input type="text" name="prenomClient">
		</p>
		<p>
			<label for="emailClient">email client</label>
			<input type="email" name="emailClient">
		</p>
		<p>
			<label for="mdpClient">mdp client</label>
			<input type="text" name="mdpClient">
		</p>
		<p>
			<label for="dateInsClient">date inscription client</label>
			<input type="date" name="dateInsClient">
		</p>
		<p>
			<input type="submit" name="OK" value="envoyer">
		</p>
	</form>
</body>
</html>