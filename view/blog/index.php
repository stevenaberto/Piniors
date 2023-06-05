<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="/public/styles/blog.css">
  <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">   
</head>
<body>
  <?php include("view/includes/header.php") ?>
  <header class="hero">
    <h1 class="hero-title">Bienvenido a Piniors Blog</h1>
    <p class="hero-subtitle">Explora nuestras últimas publicaciones y encuentra inspiración para seguir desarrollando.</p>
  </header>

  <main>
    <section class="featured-posts">
      <h2 class="section-title">Artículos destacados</h2>

      <div class="post">
        <img src="/public/img/bg-dahboard.jpg" alt="Post 1" class="post-image">
        <h3 class="post-title">Mejorando el posicionamiento web: Guía de SEO para desarrolladores web</h3>
        <p class="post-excerpt">Aquí encontrarás algunos consejos y buenas prácticas para que tus proyectos web sean más amigables para los motores de búsqueda y obtengan una mejor visibilidad en línea.</p>
        <a href="/blog/posts/seo" class="post-link">Leer más</a>
      </div>

      <div class="post">
        <img src="/public/img/roadmap.jpg" alt="Post 2" class="post-image">
        <h3 class="post-title">¿Como comenzar en el mundo de programacion?</h3>
        <p class="post-excerpt">Si lo que deseas es iniciar aqui esta un paso a paso para comenzar, pero recuerda que estos temas son solo una guía inicial y que hay muchos otros aspectos y tecnologías por explorar en el desarrollo de software. </p>
        <a href="/blog/posts/ruta" class="post-link">Leer más</a>
      </div>
    </section>

    <section class="recent-posts">
      <h2 class="section-title">Artículos recientes</h2>

      <div class="post">
        <img src="https://www.oberlo.com/media/1603954182-seo-article-header.png?fit=max&fm=webp&w=1824" alt="Post 1" class="post-image">
        <h3 class="post-title">Mejorando el posicionamiento web: Guía de SEO para desarrolladores web</h3>
        <p class="post-excerpt">Aquí encontrarás algunos consejos y buenas prácticas para que tus proyectos web sean más amigables para los motores de búsqueda y obtengan una mejor visibilidad en línea.</p>
        <a href="/blog/posts/seo" class="post-link">Leer más</a>
      </div>

      <div class="post">
        <img src="/public/img/roadmap.jpg" alt="Post 2" class="post-image">
        <h3 class="post-title">¿Como comenzar en el mundo de programacion?</h3>
        <p class="post-excerpt">Si lo que deseas es iniciar aqui esta un paso a paso para comenzar, pero recuerda que estos temas son solo una guía inicial y que hay muchos otros aspectos y tecnologías por explorar en el desarrollo de software. </p>
        <a href="/blog/posts/ruta" class="post-link">Leer más</a>
      </div>
    </section>
  </main>

  <?php include('view/includes/footer.php') ?>


  <script src="/public/script/admin.js"></script>
</body>
</html>
