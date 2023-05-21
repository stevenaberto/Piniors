<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/favicon.svg">
    <title>Piniors - Actividades</title>
</head>
<style>
    @import url("/public/styles/basic.css");

    section {
        display: grid;
        place-items: center;
        background-color: var(--naranja-claro);
        height: 100vh;
        padding: 20%;
        background-image: url("/public/img/pensamiento_creativo.png");
        box-sizing: border-box;
    }

    #section-two {
        background-color: var(--verde);
        background-position: top right;
        color: white;
    }
    a{
        background-color: var(--verde-claro);
        padding: 10px 5px;
        border-radius: 5px;
        border: 2px solid #fff;
        font-weight: 700;
        font-size: 1em;
        width: 100%;
        margin-top:10px;
        display:block;
        color:white;
        text-decoration: none;
    }
    
    #section-two a{
        background-color: var(--naranja-claro);
    }

    article{
        background-color: #fff4;
        backdrop-filter: blur(4px);
        padding: 50px;
        box-shadow:4px 2px 6px #fff2;
     box-sizing: border-box;
    }
</style>

<body>
    <section>
        <article>
            <h2>Quiz</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore obcaecati suscipit debitis, voluptate
                nemo dolore doloremque. Repellendus, labore nam. Perspiciatis asperiores autem magnam rerum excepturi ex
                consequatur adipisci aliquam ullam.</p>
                <a href="/actividades">Jugar</a>
        </article>
    </section>
    <section id="section-two">
        <article>
            <h2>Retos de programacion</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore obcaecati suscipit debitis, voluptate
                nemo dolore doloremque. Repellendus, labore nam. Perspiciatis asperiores autem magnam rerum excepturi ex
                consequatur adipisci aliquam ullam.</p>
                <a href="/actividades">Jugar</a>
        </article>
    </section>
    <section>
        <article>
            <h2>Ahorcados</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore obcaecati suscipit debitis, voluptate
                nemo dolore doloremque. Repellendus, labore nam. Perspiciatis asperiores autem magnam rerum excepturi ex
                consequatur adipisci aliquam ullam.</p>
                <a href="/actividades">Jugar</a>
        </article>
    </section>
</body>

</html>