<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Formulario</title>
</head>
<body>
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

       
        if (empty($nombres) || empty($apellidos) || empty($edad) || empty($sexo) || empty($telefono) || empty($direccion)) {
            echo "<p>Por favor, complete todos los campos.</p>";
        } else {
            
            echo "<h2>Bienvenido, $nombres $apellidos</h2>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Sexo: $sexo</p>";
            echo "<p>Teléfono: $telefono</p>";
            echo "<p>Dirección: $direccion</p>";
        }
    } else {
        
        echo "<p>Error: No se han enviado datos del formulario.</p>";
    }
    ?>
</body>
</html>
