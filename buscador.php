<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>
    
<div class="left">
            <form name="form" action="" method="get">
                <div class="container">
                    <div class="row">
                        <h3>Buscar Sucursal</h3>
                            <div class="col">
                            </div>
                            <div class="col">
                                Sucursal<br>
                                <input type="text" class="name form-control" name="busqueda">                                
                                <input type="submit" class="btn btn-success" name="enviar" value="Buscar">
                            </div>
                                <div class="col">
                                </div>
                            </div>
                    </div>
                    
    <a href="buscador.php"><button type="button" class="btn btn-danger" style="font-size: 2rem; margin: 10px;padding: 10px;"> Borrar</button></a>
    <a href="index.html"><button type="button" class="btn btn-primary" style="font-size: 2rem; margin: 10px;padding: 10px;"> Volver</button></a>
                </div>
            </form>
        </div>
        <br><br><br>
        <?php
        if(isset($_GET['enviar'])){
        $busqueda = $_GET['busqueda'];

        $consulta = $conectar->query("SELECT * FROM datos WHERE sucursal LIKE '%$busqueda%'");

        while($row = $consulta->fetch_array()){
            	
        echo '<b>Nombre:</b>&nbsp&nbsp', $row['nombre'].'<br>';
        echo '<b>Contacto:</b>&nbsp&nbsp', $row['contacto'].'<br>';
        echo '<b>Sucursal:</b>&nbsp&nbsp', $row['sucursal'].'<br><br>';
        echo '<b>MPLS:</b>&nbsp&nbsp', $row['mpls'].'<br>';
        echo '<b>IP MPLS:</b>&nbsp&nbsp', $row['ipmpls'].'<br><br>';
        echo '<b>Enlace 1:</b>&nbsp&nbsp', $row['enlace1'].'<br>';
        echo '<b>IP Enlace 1:</b>&nbsp&nbsp', $row['ipenlace1'].'<br><br>';
        echo '<b>Enlace 2:</b>&nbsp&nbsp', $row['enlace2'].'<br>';
        echo '<b>IP Enlace 2:</b>&nbsp&nbsp', $row['ipenlace2'].'<br><br>';
        echo '<b>Firewall:</b>&nbsp&nbsp', $row['fw'].'<br>';
        echo '<b>Firewall Serial:</b>&nbsp&nbsp', $row['fws'].'<br>';
        echo '<b>IP Firewall:</b>&nbsp&nbsp', $row['ipfw'].'<br><br>';
        echo '<b>Switch:</b>&nbsp&nbsp', $row['sw'].'<br>';
        echo '<b>Switch Serial:</b>&nbsp&nbsp', $row['sws'].'<br>';
        echo '<b>IP Switch:</b>&nbsp&nbsp', $row['ipsw'].'<br><br>';
        echo '<b>Access Point:</b>&nbsp&nbsp', $row['ap'].'<br>';
        echo '<b>Access Point Serial:</b>&nbsp&nbsp', $row['aps'].'<br>';
        echo '<b>IP Access Point:</b>&nbsp&nbsp', $row['ipap'].'<br><br><hr><br><br>';
        }
    }
        ?>

    
</body>
</html>