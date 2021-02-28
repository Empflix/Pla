<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wynik</title>
</head>
<body>

<?php
    
    $trueLogin = "!admin";
    $truePassw = "admin";
    
	$login = $_POST['login'];
	$haslo = $_POST['passw'];
    
    if($login == $trueLogin && $haslo == $truePassw) {
        header('location:menu.php');
    } 
    else {
        header('location:index.php');
    }
?>

</body>
</html>