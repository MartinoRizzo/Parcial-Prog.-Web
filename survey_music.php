<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['music'] = $_POST['music'];
    header('Location: survey_sports.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Gustos Musicales</title>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h2>Gustos Musicales</h2>
    <form method="post">
        <div class="form-group">
            <label>Selecciona tus gustos musicales</label>
            <input type="checkbox" name="music[]" value="Rock"> Rock<br>
            <input type="checkbox" name="music[]" value="Pop"> Pop<br>
            <input type="checkbox" name="music[]" value="Electrónica"> Electrónica<br>
            <input type="checkbox" name="music[]" value="Jazz"> Jazz<br>
            <input type="checkbox" name="music[]" value="Tango"> Tango<br>
        </div>
        <button type="submit">Siguiente</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
