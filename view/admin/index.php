<?php


//Si el usuario no esta logeado lo enviamos al login
if (!$_SESSION['username']) {
    header("Location:/login");
}

include("funciones.php");

$totalPreguntas = obtenerTotalPreguntas();
$categorias =  obtenerCategorias();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/public/styles/estilo.css">
    <title>QUIZ GAME</title>
</head>

<body>
    <div class="contenedor">
        <header>
            <h1>QUIZ GAME</h1>
        </header>
        <div class="contenedor-info">
            <?php include("nav.php") ?>
            <div class="panel">
                <h2>Dashboard</h2>
                <hr>
                <div id="dashboard">
                    <div class="card gradiente3">
                        <span class="tema">Total</span>
                        <span class="cantidad"><?php echo $totalPreguntas?></span>
                        <span> Preguntas</span>
                    </div>

                    <?php while ($cat = mysqli_fetch_assoc($categorias)):?>
                    <div class="card gradiente1">
                        <span id="<?php echo obtenerIDTema($cat['tema']);?>" class="tema"><?php echo obtenerNombreTema($cat['tema']);?></span>
                        <span class="cantidad"> <?php echo totalPreguntasPorCategoria($cat['tema']);?></span>
                        <span> Preguntas</span>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/script/admin.js"></script>
    <script>paginaActiva(0);</script>   
    <script>
        document.getElementById("dashboard")
        .addEventListener("dblclick", (e)=>{
            if (e.target.classList == "tema" && e.target.textContent != "Total") {
                e.target.contentEditable = true
                e.target.focus()
            
            }
        })
        document.getElementById("dashboard")
        .addEventListener("focusout", (e)=>{
            if (e.target.classList == "tema") {
                let nombre = e.target.textContent.trim()
                nombre = nombre.charAt(0).toUpperCase() + nombre.slice(1);
                let id = e.target.id
                let body = new FormData()
                body.append("nombre", nombre)
                body.append("id", id)
                fetch("/admin/cambiarNombreTema", {
                    method: "POST",
                    body
                })
            
            }
        })
    </script>
</body>
</html>