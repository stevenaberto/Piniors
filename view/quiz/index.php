
<?php

// session_destroy();

include("admin/funciones.php");

aumentarVisita();

$categorias =  obtenerCategorias();

if(isset($_POST['idCategoria'])){

    $_SESSION['usuario'] = "usuario";
    $_SESSION['idCategoria'] = $_POST['idCategoria'];
    header("Location: /quiz/jugar");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/public/styles/quiz.css">
    <title>QUIZ GAME</title>
</head>
<body>
<?php include("view/includes/header.php") ?>
    <div class="container" id="cantainer">
        <div class="left">
            <div class="logo">
                QUIZ GAME
            </div>
            <h2>PON A PRUEBA TUS CONOCIMIENTOS!!</h2>
            <div class="categoria">
            <a id="back" href="/dashboard">Regresar</a>
            </div>
        </div>
        <div class="right">
            <h3>Elige una categoría</h3>
            <div class="categorias">
                <?php while ($cat = mysqli_fetch_assoc($categorias)):?>
                <div class="categoria">
                    <form action="/quiz/home/<?php echo $cat['tema'] ?>" id="<?php echo $cat['tema']?>" method="POST">
                        <input type="hidden" name="idCategoria" value="<?php echo $cat['tema']?>">
                        <a href="javascript:{}" onclick="document.getElementById(<?php echo $cat['tema']?>).submit(); return false;">
                            <?php echo obtenerNombreTema($cat['tema'])?>
                        </a>
                    </form>
                </div>
                <?php endwhile?>
            </div>
        </div>
        <footer>
            <a href="/login">Piniors  <i class="fa-brands fa-youtube"></i> </a>
        </footer>
    </div>
</body>
</html>