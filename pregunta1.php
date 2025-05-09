<?php
session_start();
$_SESSION['nombres'] = $_POST['txtNombres'] ?? '';
$_SESSION['dni'] = $_POST['txtDNI'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 1 - Encuesta</title>
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
                    1. ¿Cómo siente usted el nivel de seguridad en la ciudad de Lima?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label><input type="radio" name="preg1" value="Muy inseguro" required /> Muy inseguro</label><br>
                    <label><input type="radio" name="preg1" value="Algo inseguro" /> Algo inseguro</label><br>
                    <label><input type="radio" name="preg1" value="Algo seguro" /> Algo seguro</label><br>
                    <label><input type="radio" name="preg1" value="Muy seguro" /> Muy seguro</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" formaction="index.php" class="btn">&lt; Anterior</button>
                    <button type="submit" formaction="pregunta2.php" class="btn">Siguiente &gt;</button>
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
