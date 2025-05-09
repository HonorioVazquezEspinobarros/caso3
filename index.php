<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta de inseguridad</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>

<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form method="POST" action="pregunta1.php">
        <table class="form-table" width="700" cellspacing="10" cellpadding="0">
            
    
            <tr>
                <td><label for="txtNombres">Nombres y Apellidos:</label></td>
                <td>
                    <input type="text" id="txtNombres" name="txtNombres" size="50" required placeholder="Ingrese su nombre completo" />
                </td>
            </tr>
            <tr>
                <td><label for="txtDNI">Número de DNI:</label></td>
                <td>
                    <input type="text" id="txtDNI" name="txtDNI" size="30" maxlength="8" required pattern="[0-9]{8}" title="Debe contener 8 dígitos numéricos" placeholder="12345678" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn">Comenzar Encuesta</button>
                </td>
            </tr>
        </table>
    </form>
</section>

<footer>
    <?php include 'pie.php'; ?>
</footer>

</body>
</html>
