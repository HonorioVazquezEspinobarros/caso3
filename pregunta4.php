<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 4 - Encuesta de Seguridad</title>
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
                    4. ¿Cuál cree usted que deben ser las medidas que las autoridades deben aplicar para combatir estas incidencias?
                </th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label><input type="radio" name="preg4" value="Mayor números de policías" required> Mayor número de policías</label><br>
                    <label><input type="radio" name="preg4" value="Mayor profesionalismo de las autoridades"> Mayor profesionalismo de las autoridades</label><br>
                    <label><input type="radio" name="preg4" value="Aumentar las penas y que sean ejecutadas"> Aumentar las penas y que sean ejecutadas</label><br>
                    <label><input type="radio" name="preg4" value="Nada"> Nada</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" formaction="pregunta3.php" class="btn">&lt; Anterior</button>
                    <button type="submit" formaction="pregunta5.php" class="btn">Siguiente &gt;</button>
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
