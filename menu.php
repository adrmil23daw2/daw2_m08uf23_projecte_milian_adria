<?php
    session_start();
    if(isset($_SESSION["novasessio"])){
        echo "<b style='color:green;'>Has iniciat sessió correctament</b><br><br>";
    }else{
        header("location: https://zend-admimo.fjeclot.net/projectefinal/login.php");
    }
?>

<html>
	<head>
		<title>
			PÀGINA WEB DEL MENÚ PRINCIPAL DE L'APLICACIÓ D'ACCÉS A BASES DE DADES LDAP
		</title>
	</head>
	<body>
		<h2> MENÚ PRINCIPAL DE L'APLICACIÓ D'ACCÉS A BASES DE DADES LDAP</h2>
		<h3><a href="/projectefinal/visualitzar.php">Visualitzar un usuari</a></h3>
		<h3><a href="/projectefinal/afegir.php">Afegir un usuari</a></h3>
		<h3><a href="/projectefinal/borrar.php">Esborrar un usuari</a></h3>
		<h3><a href="/projectefinal/modificar.php">Modificar un usuari</a></h3>
		<a href="/projectefinal/index.php">Tanca la sessió</a>
	</body>
</html>
