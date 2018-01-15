<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio-jeanin-moussa-développeur-intégrateur-web</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>

    <!-- localscroll -->
    <script src="js/localscroll/jquery.scrollTo-min.js"></script>
    <script src="js/localscroll/jquery.localScroll.min.js"></script>
    <script src="js/lancement/lancement.js"></script>
  </head>

  <body>
    <header>
      <nav id="navigation">
        <a href="#index"><i class="fa fa-home fa-2x" aria-hidden="true"></i>Home</a>
        <a href="#talk"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>About me</a>
        <a href="#work"><i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>Work</a>
        <a href="#contact"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>Contact</a>
        <a href="cv.html"><i class="fa fa-file-text fa-2x" aria-hidden="true"></i>CV</a>
      </nav>
    </header>
    <main>

        <div id="index" class="titre">


          <h1> INTÉGRATEUR ET DÉVELOPPEUR D'APPLICATION WEB JUNIOR</h1>
          <p>Bienvenue chez Jeanin MOUSSA</p>


        </div>


    <section id="talk" class="a-propos">
                                                                  <h2>ABOUT ME</h2>
          <article class="text">
            <div>
                                          <h3>Qui suis-je</h3>
              <p>Je m'appelle Jeanin MOUSSA, je suis un intégrateur et développeur d'application web junior.
                 Suite à une réorientation professionnelle dans le numérique j'ai pu apprendre et découvrir de nouvelles choses
               en intégrant la 3W Académy pour débuter dans le codage et connaitre les différents langages. </p>
            </div>
            <div>
                  <h3>Parcours professionnel</h3>
                  <ul>
                    <li>Formation en java (3 mois)</li>
                    <li>Développeur Intégrateur Web</li>
                    <li>BTS MI (Maintenance Indsutrielle)</li>
                  </ul>
            </div>
            <div>
                  <h3>Compétences en cours d'acquisition</h3>

                  <ul>
                    <li>Symfony</li>
                    <li>Boostrap</li>
                    <li>Playframework</li>
                    <li>JAVA</li>
                  </ul>
            </div>
        </article>
                                                          <h3>Compétences</h3>
          <aside class="competences">
            <img class="html" src="image/HTML-5.png" alt="photo">
            <img class="css" src="image/css-3.png" alt="photo">
            <img class="js" src="image/JS-1.png" alt="photo">
            <img class="php" src="image/PHP-1.png" alt="photo">
            <img class="mysql" src="image/Mysql-1.png" alt="photo">
          </aside>
    </section>

    <section id="work" class="maquette">
                                                                  <h2>WORK</h2>

            <canvas id="canvas" width="1500" height="800">Votre navigateur n'accepte pas Canvas !</canvas>




    </section>
<footer>
  <section id="contact" class="contact">
                                                                <h2>CONTACT</h2>

      <form id="formulaire" action="index.php" method="post">

          <div class="fieldset">
            <input type="text" name="Nom" id="Nom" placeholder="Nom">
            <input type="text" name="Prenom" id="Prenom" placeholder="Prénom">
            <input type="email" name="Email" id="Email" placeholder="Email">
            <textarea name="Messages" rows="8" cols="80" id="Messages" placeholder="Messages"></textarea>
            <button type="submit" name="button">Envoyer</button>
          </div>
      </form>
      <div class="site">
        <a href="https://www.linkedin.com/in/jeanin-moussa/"><i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i></a>
      <a href="https://github.com/Chow-boy"><i class="fa fa-github-square fa-4x" aria-hidden="true"></i></a>
      </div>
    </section>
      <?php include 'base.php'; ?>

</footer>

    </main>

  </body>

</html>
