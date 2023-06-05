<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/favicon.svg">
    <title>Piniors - Actividades</title>
    <link rel="stylesheet" href="/public/styles/actividades.css">
    <script defer src="/public/script/change-button.js"></script>
</head>


<body>
<?php include("view/includes/header.php") ?>
    <section id="quiz">
        <article>
            <h3>Quiz de programacion</h3>
                        <p>Responde ante algunas preguntas de nivel facil a mediano que te haran pensar por un buen rato.</p>
                        <a href="/quiz">Ver mas</a>
        </article>
    </section>
    <section id="retos">
        <article>
            <h2>Editor de codigo</h2>
                        <p>Nuestra mayor herramienta para que puedas almacenar y ver tu codigo en tiempo real para que crees e innoves de forma online.
                        </p>
                        <a href="/challenges">Probar ahora mismo</a>
        </article>
    </section>
    <section id="memoria">
        <article>
            <h2>Memoria</h2>
                        <p>Juega el tipico juego de memoria, una y otra vez hasta conseguir recordar con mucha más facilidad todo tipo de cosas.
                        </p>
                        <a href="/memoria">Ver más</a>
        </article>
    </section>
    <a id="nav-btn" href="#retos">Siguiente</a>
</body>

</html>