<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


<?php
	//conectamos Con el servidor
	//conectamos Con el servidor
	$conectar=@mysqli_connect('localhost','root','','inventario');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}

	//Se Hace la sentencia sql:
	$sql="SELECT * FROM datos"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysqli_query($conectar,$sql);
	//traenos todos los valores en un array:
	$datos=mysqli_fetch_array($ejecutar);
	//imprimimos los datos de manera dinamica
	echo "<table>";
	echo"<tr>";
	echo "<th><b>Nombre</th>";
    echo "<th><b>Contacto</th>";
    echo "<th><b>Sucursal</th>";
    echo "<th><b>MPLS</th>";	
    echo "<th><b>IP MPLS</th>";
    echo "<th><b>Enlace 1</th>";
	echo "<th><b>IP Enlace 1</th>";
    echo "<th><b>Enlace 2</th>";
    echo "<th><b>IP Enlace 2</th>";
    echo "<th><b>Firewall</th>";
    echo "<th><b>Firewall Serial</th>";
    echo "<th><b>IP Firewall</th>";
    echo "<th><b>Switch</th>";
    echo "<th><b>Switch Serial</th>";
    echo "<th><b>IP Switch</th>";
    echo "<th><b>Access Point</th>";
    echo "<th><b>Access Point Serial</th>";
    echo "<th><b>IP Access Point</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr><td>$datos[0]</td>";
		echo"<td>$datos[1]</td>";
		echo"<td>$datos[2]</td>";
		echo"<td>$datos[3]</td>";
		echo"<td>$datos[6]</td>";
		echo"<td>$datos[4]</td>";
		echo"<td>$datos[7]</td>";
		echo"<td>$datos[5]</td>";
		echo"<td>$datos[8]</td>";
		echo"<td>$datos[9]</td>";
		echo"<td>$datos[10]</td>";
		echo"<td>$datos[11]</td>";
		echo"<td>$datos[12]</td>";
		echo"<td>$datos[13]</td>";
		echo"<td>$datos[14]</td>";
		echo"<td>$datos[15]</td>";
		echo"<td>$datos[16]</td>";
		echo"<td>$datos[17]</td>";
		echo"</tr>";
		$datos=mysqli_fetch_array($ejecutar);
	}
	echo"</table>";
?>


<a href="index.html"><button type="button" class="btn btn-primary" style="font-size: 2rem; margin: 20px;padding: 20px;"> Volver</button></a>

	</body>
</html>