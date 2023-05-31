<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/article.css">
    <title>Post</title>
</head>
<body>
  <? include("view/includes/header.php") ?>
    <div class="app">
        <? 
             echo $Parsedown->text($text);
        ?>
    </div>
    <? include('view/includes/footer.php') ?>
</body>
</html>