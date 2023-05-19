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
    <script defer src="/public/script/change-cont.js"></script>
    <link rel="shortcut icon" href="<?php echo constant("URL") ?>public/favicon.svg" type="image/x-icon">

</head>

<body>
    <div class="container">
        <aside class="panel cont">
            <ul>
                <li class="btn-nav active" data-page="perfil">Perfil</li>
                <li class="btn-nav" data-page="cursos">Cursos</li>
                <li class="btn-nav" data-page="password">Cambiar contraseña</li>
                <li class="btn-nav" data-page="actividades">Actividades</li>
                <div class="last-btn">
                    <a class="btn-nav close-account" href="/login/logout">Cerrar cuenta</a>
                </div>
            </ul>
        </aside>
        <div class="container-data cont" id="dash-main">
            <div id="account-data" class="data">
                <img src="/public/img/bowl.jpg" width="250px" height="250px" alt="Foto de perfil">
                <h2>Main</h2>
            </div>
        </div>
        <div class="container-data cont" id="dash-perfil">
            <div id="account-data" class="data">
                <img src="/public/img/bowl.jpg" width="250px" height="250px" alt="Foto de perfil">
                <h2>John Dow</h2>
                <div class="box-inp username">
                    <label for="name">Nombre de pila</label>
                    <input type="text" id="name">
                </div>
                <div class="box-inp username">
                    <label for="name">Nombre de usuario</label>
                    <input type="text" id="username">
                </div>
                <div class="box-inp username">
                    <label for="name">Correo electronico</label>
                    <input type="email" id="email">
                </div>
            </div>
        </div>
        <div class="container-data cont" id="dash-cursos">
            <div id="account-data" class="data">
                <img src="/public/img/bowl.jpg" width="250px" height="250px" alt="Foto de perfil">
                <h2>Cursos</h2>
            </div>
        </div>
        <div class="container-data cont" id="dash-password">
            <div id="account-data" class="data">
                <img src="/public/img/bowl.jpg" width="250px" height="250px" alt="Foto de perfil">
                <h2>Cambiar contraseña</h2>
            </div>
        </div>
        <div class="container-data cont" id="dash-actividades">
            <div id="account-data" class="data">
                <img src="/public/img/bowl.jpg" width="250px" height="250px" alt="Foto de perfil">
                <h2>Cambiar contraseña</h2>
            </div>
        </div>
    </div>
</body>

</html>