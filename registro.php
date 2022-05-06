<?php
	//conectamos Con el servidor
	//conectamos Con el servidor
	$conectar=@mysqli_connect('localhost','root','','inventario');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}
	
    //recuperar las variables
    $nombre=$_POST['nombre'];
    $contacto=$_POST['contacto'];
    $sucursal=$_POST['sucursal'];
    $mpls=$_POST['mpls'];
    $enlace1=$_POST['enlace1'];
    $enlace2=$_POST['enlace2'];
    $ipmpls=$_POST['ipmpls'];
    $ipenlace1=$_POST['ipenlace1'];
    $ipenlace2=$_POST['ipenlace2'];
    $fw=$_POST['fw'];
    $fws=$_POST['fws'];
    $ipfw=$_POST['ipfw'];
    $sw=$_POST['sw'];
    $sws=$_POST['sws'];
    $ipsw=$_POST['ipsw'];
    $ap=$_POST['ap'];
    $aps=$_POST['aps'];
    $ipap=$_POST['ipap'];

    //hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre', '$contacto', '$sucursal', '$mpls', '$enlace1', '$enlace2', '$ipmpls', '$ipenlace1', '$ipenlace2', ' $fw', ' $fws', ' $ipfw', ' $sw', ' $sws', ' $ipsw', ' $ap', ' $aps', ' $ipap')";

    //ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conectar,$sql);
	//verificamos la ejecucion
    if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><br>";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargado</title>
</head>
<body>
<a href="index.html"><button type="button" class="btn btn-primary" style="font-size: 2rem; margin: 20px;padding: 20px;"> Volver</button></a>
</body>
</html>