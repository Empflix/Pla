<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Coś</title>
</head>
<body>

	<h1>Godziny pracy wykładowców</h1>
	<form action="submit.php" method="post">
		Wybierz wykładowce
		<select id="wykladowca" name="wykladowca" required>
			<option value="prof1">Prof 1</option>
			<option value="prof2">Prof 2</option>
			<option value="prof3">Prof 3</option>
			<option value="prof4">Prof 4</option>
		</select>
			<br /><br />
		Wybierz dzień
		<select id="dzien" name="dzien" required>
			<option value="Poniedzialek">Poniedzialek</option>
			<option value="Wtorek">Wtorek</option>
			<option value="Sroda">Sroda</option>
			<option value="Czwartek">Czwartek</option>
			<option value="Piatek">Piatek</option>
		</select>
			<br /><br />
		Podaj godziny pracy:
		<input type="time" name="timeStart" required />
		:
		<input type="time" name="timeEnd" required />
			<br /><br />
		<input type="submit" value="Zatwierdź" />
		<input type="reset" value="Reset" />
	</form>
	<a href="menu.php"><button style="margin-top:4px">Wróć</button></a>
</body>
</html>