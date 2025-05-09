<?php
session_start();
$_SESSION['Pregunta1'] = $_POST['preg1'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 2 - Encuesta</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>

<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form method="POST">
        <table class="form-table" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <th colspan="2">
                    2. ¿Qué tipo de delito cree usted que es el más común en su zona de residencia?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label><input type="radio" name="preg2" value="Hurto" required> Hurto</label><br>
                    <label><input type="radio" name="preg2" value="Robo por descuido"> Robo por descuido</label><br>
                    <label><input type="radio" name="preg2" value="Robo de vehículo"> Robo de vehículo</label><br>
                    <label><input type="radio" name="preg2" value="Intento de hurto"> Intento de hurto</label><br>
                    <label><input type="radio" name="preg2" value="Estafa"> Estafa</label><br>
                    <label><input type="radio" name="preg2" value="Asesinato"> Asesinato</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" formaction="pregunta1.php" class="btn">&lt; Anterior</button>
                    <button type="submit" formaction="pregunta3.php" class="btn">Siguiente &gt;</button>
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
