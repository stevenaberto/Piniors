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
                            if(isset($_SESSION["username"])) {
                                echo `<li><a href="/login">Inicia sesion</a></li>`;
                            }else{
                                echo `<li><a href="/dashboard">Dashboard</a></li>`;
                            }
                        ?>
                    </ul>
                </nav>
            </div>
    </header>