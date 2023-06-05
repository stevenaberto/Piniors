<?php


//Si el usuario no esta logeado lo enviamos al login
if (!$_SESSION['usuarioLogeado']) {
    header("Location:/login");
}

include("funciones.php");


//Se presióno el botón Nuevo Tema
if(isset($_POST['nuevoTema'])){
    //tomamos los datos que vienen del formulario
    $tema = $_POST['nombreTema'];
    $mensaje = agregarNuevoTema($tema);
    header("Location: /admin/nuevapregunta");
}
/******************************************************* */
//GUARDAMOS LA PREGUNTA
if (isset($_POST['guardar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del fosrmulario
    // elimina texto con formato de etiqueta html
    $pregunta = htmlspecialchars($_POST['pregunta']);
    $opcion_a = htmlspecialchars($_POST['opcion_a']);
    $opcion_b = htmlspecialchars($_POST['opcion_b']);
    $opcion_c = htmlspecialchars($_POST['opcion_c']);
    $id_tema = $_POST['tema'];
    $correcta = $_POST['correcta'];

    //Armamos el query para insertar en la tabla preguntas
    $query = "INSERT INTO preguntas (id, tema, pregunta, opcion_a, opcion_b, opcion_c, correcta)
    VALUES (NULL, '$id_tema','$pregunta', '$opcion_a','$opcion_b','$opcion_c','$correcta')";

    //insertamos en la tabla preguntas
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        $mensaje = "La pregunta se inserto correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}

//Obtengo todos los temas de la bd
$resltado_temas = obetenerTodosLosTemas();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/public/styles/estilo.css">

    <title>Quiz Game</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <h1>QUIZ GAME</h1>
        </header>
        <div class="contenedor-info">
            <?php include("nav.php") ?>
            <div class="panel">
                <h2>Complete la Pregunta</h2>
                <hr>
                <section id="nuevaPregunta">
                    <form action="/admin/nuevapregunta" method="POST">
                        <div class="fila">
                            <label for="">Tema: </label>
                            <select name="tema" id="tema">
                                <?php while ($row = mysqli_fetch_assoc($resltado_temas)) : ?>
                                    <option value="<?php echo $row['id'] ?>">
                                        <?php echo $row['nombre'] ?>
                                    </option>
                                <?php endwhile ?>
                            </select>
                            <span class="agregarTema" onclick="agregarTema()">
                            <i class="fa-solid fa-circle-plus"></i></span>
                        </div>
                        <div class="fila">
                            <label for="">Pregunta:</label>
                            <textarea name="pregunta" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="opciones">
                            <div class="opcion">
                                <label for="">Opcion A</label>
                                <input type="text" name="opcion_a" id="" required>
                            </div>
                            <div class="opcion">
                                <label for="">Opcion B</label>
                                <input type="text" name="opcion_b" required>
                            </div>
                            <div class="opcion">
                                <label for="">Opcion C</label>
                                <input type="text" name="opcion_c" required>
                            </div>
                        </div>
                        <div class="opcion">
                            <label for="">Correcta</label>
                            <select name="correcta" id="" class="correcta">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <hr>
                        <input type="submit" value="Guardar Pregunta" name="guardar" class="btn-guardar">
                    </form>

                    <?php if (isset($_GET['guardar'])) : ?>
                        <span> <?php echo $mensaje ?></span>
                    <?php endif ?>
                </section>
            </div>
        </div>
    </div>



    <!-- Ventana Modal para nuevo Tema -->
    <div id="modalTema" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="cerrarTema()">&times;</span>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="">Agregar Nuevo Tema</label>
                <input type="text"   name="nombreTema" required>
                <input type="submit" name="nuevoTema" value="Guardar Tema" class="btn">
            </form>
        </div>
    </div>

    <script src="/public/script/admin.js"></script>
    <script>paginaActiva(1);</script>
</body>
</html>