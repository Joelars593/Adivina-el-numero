<?php
session_start();

if (!isset($_POST['adivinanza'])) {
    header("Location: juego.php");
    exit();
}

$adivinanza = (int)$_POST['adivinanza'];
$secreto = $_SESSION['numero_secreto'];
$_SESSION['intentos_restantes']--;

if ($adivinanza == $secreto) {
    $mensaje = "<h1>¡FELICIDADES! 🎉</h1><p>Adivinaste el número $secreto.</p>";
    $clase = "ganaste";
    session_destroy(); 
} elseif ($_SESSION['intentos_restantes'] <= 0) {
    $mensaje = "<h1>¡GAME OVER! 💀</h1><p> El número era $secreto.</p>";
    $clase = "perdiste";
    session_destroy();
} else {
    if ($adivinanza < $secreto) {
        $_SESSION['pista'] = "El número secreto es MAYOR que $adivinanza.";
    } else {
        $_SESSION['pista'] = "El número secreto es MENOR que $adivinanza.";
    }
    header("Location: juego.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="<?php echo $clase; ?>">
    <div class="resultado-caja">
        <?php echo $mensaje; ?>
        <a href="index.php" class="boton-juego">Jugar de nuevo</a>
    </div>
</body>
</html>