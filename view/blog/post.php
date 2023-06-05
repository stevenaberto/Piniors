<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/article.css">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">   
    <title>Post - Piniors</title>
</head>
<body>
  <?php include("view/includes/header.php") ?>
    <div class="app">
        <?php 
             echo $Parsedown->text($text);
        ?>
    </div>
    <?php include('view/includes/footer.php') ?>
</body>
</html>