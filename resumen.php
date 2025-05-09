<?php
 session_start();
 $_SESSION['Pregunta5'] = $_POST['preg5'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Encuesta</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>

<header>
    <?php include 'encabezado.php'; ?>
    <h3>INFORME DE ENCUESTA</h3>
</header>

<?php
    $nombres = $_SESSION['nombres'];
    $dni = $_SESSION['dni'];
    $pregunta1 = $_SESSION['Pregunta1'];
    $pregunta2 = $_SESSION['Pregunta2'];
    $pregunta3 = $_SESSION['Pregunta3'];
    $pregunta4 = $_SESSION['Pregunta4'];
    $pregunta5 = $_SESSION['Pregunta5'];
?>

<section>
    <div class="form-container">
        <form method="POST" action="resumen.php">
            <div class="form-row">
                <label for="nombres">Nombre del ciudadano:</label>
                <span id="nombres"><?php echo $nombres; ?></span>
            </div>
            
            <div class="form-row">
                <label for="dni">DNI:</label>
                <span id="dni"><?php echo $dni; ?></span>
            </div>

            <div class="form-row">
                <label for="preg1">¿Cómo se siente a nivel de seguridad en la ciudad de Lima?</label>
                <span id="preg1"><?php echo $pregunta1; ?></span>
            </div>

            <div class="form-row">
                <label for="preg2">¿Qué tipo de delito cree usted que es el más común en su zona de residencia?</label>
                <span id="preg2"><?php echo $pregunta2; ?></span>
            </div>

            <div class="form-row">
                <label for="preg3">¿Generalmente que día cree usted que ocurre más incidencias?</label>
                <span id="preg3"><?php echo $pregunta3; ?></span>
            </div>

            <div class="form-row">
                <label for="preg4">¿Qué medidas deben aplicar las autoridades para combatir estas incidencias?</label>
                <span id="preg4"><?php echo $pregunta4; ?></span>
            </div>

            <div class="form-row">
                <label for="preg5">¿Usted conoce las medidas que implementa la policía del Perú para disminuir la delincuencia?</label>
                <span id="preg5"><?php echo $pregunta5; ?></span>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-back" onclick="this.form.action='pregunta5.php'"> < Anterior </button>
                <button type="submit" class="btn-reset" onclick="this.form.action='index.php'">Volver a encuestar</button>
            </div>
        </form>
    </div>
</section>

<footer>
    <?php include 'pie.php';?>
</footer>

</body>
</html>
