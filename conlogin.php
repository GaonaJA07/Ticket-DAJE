<?php
$servidor = "localhost";
$usuario = "root";
$password = "GaonaJose54321";
$bdd = "TicketDaje";
// Create connection
$conn = new mysqli($servidor, $usuario, $password, $bdd);
// Check connection
if ($conn->connect_error) {
 die("La conexi&oacute;n ha fallado: " . $conn->connect_error);
}
else
{

	echo "Conexi&oacute;n establecida";
}

?>