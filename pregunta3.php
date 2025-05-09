<?php
session_start();
$_SESSION['Pregunta2'] = $_POST['preg2'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 3 - Encuesta</title>
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
                <th colspan="2">3. ¿Generalmente qué día cree usted que ocurre más incidencias?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label><input type="radio" name="preg3" value="Cualquier día" required> Cualquier día</label><br>
                    <label><input type="radio" name="preg3" value="Fin de semana"> Fin de semana</label><br>
                    <label><input type="radio" name="preg3" value="Fin de mes"> Fin de mes</label><br>
                    <label><input type="radio" name="preg3" value="Fechas de pago"> Fechas de pago</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" formaction="pregunta2.php" class="btn">&lt; Anterior</button>
                    <button type="submit" formaction="pregunta4.php" class="btn">Siguiente &gt;</button>
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
