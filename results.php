<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$personal = $_SESSION['personal'];
$music = isset($_SESSION['music']) ? implode(", ", $_SESSION['music']) : 'Ninguno';
$sports = isset($_SESSION['sports']) ? implode(", ", $_SESSION['sports']) : 'Ninguno';
$education = $_SESSION['education'];

session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Resultados</title>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h2>Resultados</h2>
    <p>Ud. es <strong><?php echo "{$personal['nombre']} {$personal['apellido']}"; ?></strong>, sus gustos musicales son: <strong><?php echo $music; ?></strong>, el deporte que practica es: <strong><?php echo $sports; ?></strong>, y sus estudios son: <strong><?php echo $education; ?></strong>.</p>
    <p>Gracias por responder la encuesta, sus datos serán procesados en los próximos días.</p>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
