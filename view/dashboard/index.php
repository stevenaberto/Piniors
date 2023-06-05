<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piniors</title>
    <link rel="stylesheet" href="/public/styles/dashboard.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">   


</head>

<body>
    <div class="container">
        <aside class="panel cont">
            <ul>
                <li class="btn-nav active" data-page="perfil">Perfil</li>
                <li class="btn-nav"><a class="btn-nav" href="/blog">Blog</a></li>
                <li class="btn-nav"><a class="btn-nav" href="/actividades">Actividades</a></li>
                <li class="btn-nav"><a class="btn-nav" href="/archivo">Subir articulos</a></li>
                <div class="last-btn">
                    <a class="btn-nav close-account" href="/login/logout">Cerrar cuenta</a>
                </div>
            </ul>
        </aside>
        <div class="container-data cont" id="dash-perfil">
            <form action="/login/updatedata" method="post" enctype="multipart/form-data" id="account-data" class="data">
                <label for="photo"><img src="<?php echo $_SESSION["data"]["img_profile"] ?>" width="250px"
                        height="250px" alt="Foto de perfil"></label>
                        <input type="file" name="photo" id="photo" hidden accept="image/*">
                <h2>
                    <?php echo $_SESSION["data"]["name"] . " °" . $_SESSION["data"]["score"] ?>
                </h2>
                <div class="box-inp username">
                    <label for="name">Nombre de pila</label>
                    <input type="text" id="name" name="name" value="<?php echo ($_SESSION["data"]["name"]) ?>">
                </div>
                <div class="box-inp username">
                    <label for="name">Nombre de usuario</label>
                    <input type="text" id="username" name="username" value="<?php echo ($_SESSION["data"]["username"]) ?>">
                </div>
                <div class="box-inp username">
                    <label for="name">Correo electronico</label>
                    <input type="email" id="email" name="email" value="<?php echo ($_SESSION["data"]["email"]) ?>">
                </div>
                <button class="btn update-data" type="submit">Actualizar datos</button>
            </form>
        </div>
        <div class="container-data cont" id="dash-cursos">
            <div id="account-data" class="data">
                <h2>Blog</h2>
            </div>
        </div>
    </div>
    <script src="/public/script/dashboard.js"></script>
</body>

</html>