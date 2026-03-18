<?php
session_start();

if (isset($_POST['dificultad'])) {
    $_SESSION['numero_secreto'] = random_int(1, 100);
    $_SESSION['intentos_restantes'] = (int)$_POST['dificultad'];
    $_SESSION['intentos_totales'] = (int)$_POST['dificultad'];
    $_SESSION['historial'] = []; 
}

if (!isset($_SESSION['numero_secreto'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivinando...</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor-juego">
        <h2>Tienes <?php echo $_SESSION['intentos_restantes']; ?> intentos restantes</h2>
        
        <form action="resultado.php" method="post">
            <label>Introduce un número (1-100):</label><br><br>
            <input type="number" name="adivinanza" min="1" max="100" required autofocus>
            <br><br>
            <input type="submit" value="Adivinar" class="boton-juego">
        </form>

        <?php if (!empty($_SESSION['pista'])): ?>
            <div class="pista">💡 Pista: <?php echo $_SESSION['pista']; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>