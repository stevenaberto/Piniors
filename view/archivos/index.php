<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/styles/archivos.css">
  <title>Subida de articulos - Piniors</title>
</head>

<body>
  <?php include("view/includes/header.php") ?>

  <form action="/blog/uploadArticle" method="POST" enctype="multipart/form-data">
    <h1>Ingresa tu articulo en Markdown</h1>
    <input placeholder="Ingresa el titulo de tu articulo" type="text" name="title" id="title">
    <textarea placeholder="Ingresa la descripcion del articulo" name="descripcion" id="descripcion"
      maxlength="170"></textarea>
    <label for="images" class="drop-container">
      <span class="drop-title">Suelta tu portada aqui</span>
      or
      <input type="file" id="images" accept=".jpg,.png,.webp,.jpeg" name="archivo" required>
    </label>
    <label for="images" class="drop-container">
      <span class="drop-title">Suelta tu articulo aqui</span>
      or
      <input type="file" id="archivo" accept=".md" name="archivo" required>
    </label>
    <button id="submit" type="submit">Subir articulo</button>
  </form>
  <?php include("view/includes/footer.php") ?>
  </body>
</html>