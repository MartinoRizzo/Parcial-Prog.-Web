<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['education'] = $_POST['education'];
    header('Location: results.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Estudios Cursados</title>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h2>Estudios Cursados</h2>
    <form method="post">
        <div class="form-group">
            <label for="education">Selecciona tu nivel de estudios</label>
            <select id="education" name="education" required>
                <option value="Primario">Primario</option>
                <option value="Secundario">Secundario</option>
                <option value="Terciario">Terciario</option>
                <option value="Universitario">Universitario</option>
            </select>
        </div>
        <button type="submit">Siguiente</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
