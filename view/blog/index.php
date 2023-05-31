<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="/public/styles/blog.css">
  <link rel="shortcut icon" href="/public/favicon.svg" type="image/x-icon">   
</head>
<body>
  <? include("view/includes/header.php") ?>
  <header class="hero">
    <h1 class="hero-title">Bienvenido a Piniors Blog</h1>
    <p class="hero-subtitle">Explora nuestras últimas publicaciones y encuentra inspiración para seguir desarrollando.</p>
  </header>

  <main>
    <section class="featured-posts">
      <h2 class="section-title">Artículos destacados</h2>

      <div class="post">
        <img src="https://www.oberlo.com/media/1603954182-seo-article-header.png?fit=max&fm=webp&w=1824" alt="Post 1" class="post-image">
        <h3 class="post-title">Mejorando el posicionamiento web: Guía de SEO para desarrolladores web</h3>
        <p class="post-excerpt">Aquí encontrarás algunos consejos y buenas prácticas para que tus proyectos web sean más amigables para los motores de búsqueda y obtengan una mejor visibilidad en línea.</p>
        <a href="/blog/posts/seo" class="post-link">Leer más</a>
      </div>

      <div class="post">
        <img src="post2.jpg" alt="Post 2" class="post-image">
        <h3 class="post-title">Título del artículo destacado</h3>
        <p class="post-excerpt">Breve descripción del artículo destacado. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="post-link">Leer más</a>
      </div>
    </section>

    <section class="recent-posts">
      <h2 class="section-title">Artículos recientes</h2>

      <div class="post">
        <img src="post3.jpg" alt="Post 3" class="post-image">
        <h3 class="post-title">Título del artículo reciente</h3>
        <p class="post-excerpt">Breve descripción del artículo reciente. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="post-link">Leer más</a>
      </div>

      <div class="post">
        <img src="post4.jpg" alt="Post 4" class="post-image">
        <h3 class="post-title">Título del artículo reciente</h3>
        <p class="post-excerpt">Breve descripción del artículo reciente. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="post-link">Leer más</a>
      </div>
    </section>
  </main>

  <? include('view/includes/footer.php') ?>


  <script src="script.js"></script>
</body>
</html>
