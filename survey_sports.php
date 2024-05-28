<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['sports'] = $_POST['sports'];
    header('Location: survey_education.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Actividades Físicas</title>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h2>Actividades Físicas</h2>
    <form method="post">
        <div class="form-group">
            <label>Selecciona tus actividades físicas</label>
            <input type="checkbox" name="sports[]" value="Atletismo"> Atletismo<br>
            <input type="checkbox" name="sports[]" value="Tenis"> Tenis<br>
            <input type="checkbox" name="sports[]" value="Futbol"> Futbol<br>
            <input type="checkbox" name="sports[]" value="Rugby"> Rugby<br>
            <input type="checkbox" name="sports[]" value="Danza aeróbica"> Danza aeróbica<br>
        </div>
        <button type="submit">Siguiente</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
