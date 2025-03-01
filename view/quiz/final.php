<?php



//Si el usuario no esta logeado lo enviamos al index
if (!$_SESSION['usuario']) {
    header("Location:/quiz");
}
//Aumentamos la estadistica
include("admin/funciones.php");
aumentarCompletados();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/public/styles/quiz.css">
    <title>Piniors - QUIZ GAME</title>
</head>
<body>
<?php include("view/includes/header.php") ?>
    <div class="container-final" id="container-final">
        <div class="info">
            <h2>RESULTADO FINAL</h2>
            <div class="estadistica">
                <div class="acierto">
                    <span class="correctas numero"> <?php echo $_SESSION['correctas'] ?></span>
                    CORRECTAS
                </div>
                <div class="acierto">
                    <span class="incorrectas numero"> <?php echo $_SESSION['incorrectas'] ?></span>
                    INCORRECTAS
                </div>
            </div>
            <div class="score">
                <div class="box">
                    <div class="chart" data-percent="<?php echo $_SESSION['score'] ?>">
                       <?php echo $_SESSION['score'] ?>%
                    </div>
                    <h2>SCORE</h2>
                </div>
            </div>

            <a href="/quiz">Ir al Menú</a>
            <span hidden id="score-php"><?php echo $_SESSION['score'] ?></span>
        </div>
    </div>
    <script src="juego.js"></script>
    <script>
        let score =document.getElementById("score-php").textContent
        let body = new FormData()
        body.append("score", score)
        fetch('/login/updateScore',{
            method: "POST",
            body
        })
    </script>
</body>
</html>