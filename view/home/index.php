<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piniors</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>public/styles/home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo constant("URL") ?>public/favicon.svg" type="image/x-icon">
    <meta property="og:title" content="Piniors">
<meta property="og:type" content="page" />
<meta property="og:description" content="No seas un pino para siempre!">
<meta property="og:image" content="https://piniors.com/public/img/DarkLogoLogo.png">
<meta property="og:url" content="https://piniors.com/">
<meta name="twitter:card" content="summary_large_image">
</head>

<body>
<?php include("view/includes/header.php") ?>
    <!--portada-->
    <div class="container-cover">
        <div class="container-info-cover">
            <h2><b>No seas un pino para siempre.</b></h2>
            <p>Aprende y crea con la mejor experiencia para todos aquellos que desean aprender
                con los cursos mas avanzados y las actividades mas dinamicas para ti.
            </p>
            <a class="dclases" href="registro">Registrate</a>
        </div>
        <div class="max-container">
            <div class="container card1">
                <div class="card">
                    <div class="contenido">
                        <h3>Preguntale al sabio</h3>
                        <p>Aprende y crea con la mejor experiencia para todos aquellos que desean aprender del
                            desarrollo de software, tecnologia, comunicaciones y muchisimas cosas mas.</p>
                        <a href="servios al cliente.html">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="container card2">
                <div class="card">
                    <div class="contenido">
                        <h3>Retos de programacion</h3>
                        <p>Pensamiento logico? creativo? juegos? pues si, esto y mas en divertido juegos logicos
                            para que desarroyes tu analisis y resolucion de problema .
                        </p>
                        <a href="Como te sientes.html">Retame!!</a>
                    </div>

                </div>
            </div>
            <div class="container card3">
                <div class="card">
                    <div class="contenido">
                        <h3>Retos de programacion</h3>
                        <p>Pensamiento logico? creativo? juegos? pues si, esto y mas en divertido juegos logicos
                            para que desarroyes tu analisis y resolucion de problema .
                        </p>
                        <a href="Como te sientes.html">Retame!!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('view/includes/footer.php') ?>
</body>

</html>