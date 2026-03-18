<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida - Adivina el Número</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>¡Bienvenido al Adivino Web!</h1>
    <p>He pensado un número entre 1 y 100. ¿Podrás adivinarlo?</p>
    
    <form action="juego.php" method="post">
        <h3>Selecciona tu dificultad:</h3>
        <div class="contenedor-circulos">
            <label class="opcion-circulo">
                <input type="radio" name="dificultad" value="10" checked>
                <span class="circulo verde">10</span>
                <p>Fácil</p>
            </label>
            <label class="opcion-circulo">
                <input type="radio" name="dificultad" value="5">
                <span class="circulo amarillo">5</span>
                <p>Normal</p>
            </label>
            <label class="opcion-circulo">
                <input type="radio" name="dificultad" value="3">
                <span class="circulo rojo">3</span>
                <p>Difícil</p>
            </label>
        </div>
        <input type="submit" value="¡Empezar Juego!" class="boton-juego">
    </form>
</body>
</html>