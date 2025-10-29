<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba datos</title>
</head>
<body>
    <?php
        use Valery\Pc\Datos\DatosComponentes;
        require_once '../src/data/DatosComponentes.php'; 
        echo "<pre>";
        print_r(DatosComponentes::obtenerDatos("ram"));
        echo "</pre>";
        echo "<pre>";
        print_r(DatosComponentes::obtenerDatos("cpu"));
        echo "</pre>";
        echo "<pre>";
        print_r(DatosComponentes::obtenerDatos("placa"));
        echo "</pre>";
        echo "<pre>";
        print_r(DatosComponentes::obtenerDatos("kk"));
    ?>
</body>
</html>