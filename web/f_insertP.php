<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="form">

        <table><tr><td>

        <form action="insert.php" method="get">


        Fecha</td><td><input type="date" name="fecha" id="name"></td></tr>
        <tr><td>Hora</td><td><input type="time" name="time" id="time"></td></tr>
        <tr><td>Presión S</td><td><input type="text" name="presion_s" id="presion_s"></td></tr>
        <tr><td>Presión D</td><td><input type="text" name="presion_d" id="presion_d"></td></tr>
        <tr><td>Frecuencia C</td><td><input type="text" name="frc" id="frc"></td></tr>
        <tr><td>Medicamento</td><td><input type="text" name="pastas" id="pastas"></td></tr>
        <tr><td><input type="submit" name="enviar" id="enviar" value="Enviar!"></td></tr>


        </table>
        <?php include("validacion.php");   ?>

        </form>
    </div>

    
</body>
</html>