<?php
session_start();
$_SESSION['Pregunta4'] = $_POST['preg4'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 5 - Encuesta</title>
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
                    5. ¿Usted conoce las medidas que implementa la policía del Perú para disminuir la delincuencia?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label>
                        <input type="radio" name="preg5" value="Si" required /> Sí
                    </label><br>
                    <label>
                        <input type="radio" name="preg5" value="No" /> No
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" formaction="pregunta4.php" class="btn">&lt; Anterior</button>
                    <button type="submit" formaction="resumen.php "class="btn">Siguiente &gt;</button>
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
