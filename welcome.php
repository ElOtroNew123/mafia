<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mafia</title>
</head>
<body>
    <?php echo "<h1>Bienvenido " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Cerrar sesión</a> 
</body>
</html>