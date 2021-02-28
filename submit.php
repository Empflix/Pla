<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wynik</title>
</head>
<body>

<?php

	$wykladowcy = $_POST['wykladowca'];
	$dzien = $_POST['dzien'];
	$start = $_POST['timeStart'];
	$koniec = $_POST['timeEnd'];
	
	echo "<h2>$wykladowcy - $dzien, $start - $koniec</h2>";

?>

</body>
</html>