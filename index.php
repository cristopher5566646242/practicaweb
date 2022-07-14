<?php include 'include/Acciones.php';  
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Problema 1 analisis del problema</title>
</head>
<body>
<h2 class="text-center mt-4 text-primary">Prueba 1</h2>
<div class="container">
    <p>Mayor de edad / Menor de edad / identificar si es Hombre o Mujer / utilizar libreria para las acciones </p>
</div>
<div class="row container">
    <div class="container mt-3">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="number" name="Edad" placeholder="Edad" class="form-control" required>
            <select name="Genero" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
            <input type="submit" value="Accion" name="Accion" class="btn btn-success">
        </form>
        <?php echo $alerta; ?>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
