<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\public\styles\challege.css">
    <title>Retos de programacion</title>
</head>
<body>
<?php include("view/includes/header.php") ?>
    <main>
        <aside>
            <h1>Escribe tus propios programas desde la web</h1>
            <p>Deja de preocuparte por todas esos editos y comienza a desarrollar tu propio codigo desde tu navegador con Piniors. Compartelo y guardalo para siempre. </p>
            <button data-href="" id="btn-share">Compartir</button>
        </aside>
        <div class="container">
            <textarea id="html" placeholder="HTML5"></textarea>
            <textarea id="js" placeholder="Javascript"></textarea>
            <textarea id="css" placeholder="CSS"></textarea>
            <iframe srcdoc="" id="preview"></iframe>
        </div>
    </main>
    <script defer src="/public/script/challenge.js"></script>
</body>
</html>
