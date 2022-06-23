<?php
include 'conlogin.php';

$E=$_POST['Email'];
$P=$_POST['Password'];



if($c==$c1)
{
	$sql = "SELECT * FROM usuario WHERE Email='$E' AND Password='$P'";

            if (mysqli_query($conn, $sql)) {
              
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
}
else
{
	echo "Verificar la contrase&ntilde;a";
	echo "<a href='Registro.html'>Regresar</a>";
}

            $conn->close();
?>
