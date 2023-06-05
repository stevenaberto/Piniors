<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Typing Speed Test Game | CodingNepal</title>
    <link rel="stylesheet" href="/public/styles/keyboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <?php include("view/includes/header.php") ?>
  <div class="wrapper">
    <input type="text" class="input-field">
    <div class="content-box">
      <div class="typing-text">
      <h1>Descubre tu velocidad de escritura</h1>
        <p></p>
      </div>
      <div class="content">
          <ul class="result-details">
            <li class="time">
              <p>Time Left:</p>
              <span><b>60</b>s</span>
            </li>
            <li class="mistake">
              <p>Mistakes:</p>
              <span>0</span>
            </li>
            <li class="wpm">
              <p>WPM:</p>
              <span>0</span>
            </li>
            <li class="cpm">
              <p>CPM:</p>
              <span>0</span>
            </li>
          </ul>
          <button>Try Again</button>
        </div>
      </div>
    </div>
    <?php include("view/includes/footer.php") ?>

    <script src="/public/script/Paragraphs.js"></script>
    <script src="/public/script/keyboard.js"></script>
  
  </body>
</html>