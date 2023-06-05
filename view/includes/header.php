<header class="header-basic">
    <div class="header-content">
        <div class="logo">
            <img src="/public/favicon.svg" width="40px">
            <div class="conteiner">
                <h1><b>Piniors</b></h1>
            </div>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/actividades">Actividades</a></li>
                    <?php
                    if (!isset($_SESSION["username"])) {
                        ?>
                        <li><a href="/login">Inicia sesion</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="/dashboard">Panel</a></li>
                        <li><a href="/login/logout">Cerrar sesion</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
</header>