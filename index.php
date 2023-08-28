<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" media="screen" title="no title"
      charset="utf-8" />
    <!-- CSS -->
    <link rel="stylesheet" href="./webroot/app.css" />
    <!-- Nav tab's icon -->
    <link rel="shortcut icon" href="webroot/assets/img/logoV1.ico" type="image/x-icon">
    <!-- Kit Font Awesome -->
    <script src="https://kit.fontawesome.com/23c1a897ea.js" crossorigin="anonymous"></script>
    <!-- JS, React et Babel -->
    <script src="app.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/react@17/umd/react.development.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/babel-standalone@6.26.0/babel.min.js"></script>
    <script type="text/babel" src="src/index.js"></script> -->

    <title>Portfolio - MMorisset</title>
    <meta name="author" content="MMORISSET"/>
    <meta name="description" content="Portfolio de Madeline MORISSET, apprenante en Développement Web et Web Mobile"/>
  </head>

  <body class="siteBody">
    <?php include("webroot/assets/includes/siteHeader.php"); ?>

    <main class="content">
      <!-- Intoduction to my background -->
      <section class="content-intro">
        <section class="content-intro--text">
          <p class="content-intro--medium">
            Après avoir terminé mes études secondaires en 2013, j'ai commencé à m'intéresser au développement web alors que je cherchais ma voie.
          </p>
          <p class="content-intro--medium">
            J'ai cherché une formation diplômante dans ce domaine, mais j'ai dû mettre mes plans en suspens en raison de l'aggravation de mon handicap. <br>
            Par la suite, j'ai poursuivi ma formation en autodidacte chaque fois que cela était possible.
          </p>
          <p class="content-intro--medium">
            En 2022, après une intervention chirurgicale qui a changé ma vie, j'ai pu reprendre ce projet et me consacrer pleinement à ma formation. <br>
            Trois ans plus tard, j'ai intégré la formation en développement web et web mobile de l'École Atypique à Chasseneuil-du-Poitou (86).
          </p>
          <!-- Link to Emil Frey's internship report -->
          <p class="content-intro--italic">
            Pour plus de détails sur mes expériences, je vous invite à consulter mon <a href="" class="content-intro--link">rapport de stage</a> sur mes immersions au siège d'Emil Frey.
          </p>
        </section>
      </section>

      <section class="content-cards">
        <!-- My Web Development card -->
        <article class="card card-dev">
          <section class="card-logo--redCircleBG"><i class="fa-solid fa-code fa-2x" style="color: #ffffff;"></i></section> <!-- Addition red ($primary) circle in background -->
          <h3 class="card-title--semiBold">Développement</h3>
          <p class="card-subtitle--medium">Après la formation Développement Web et Web Mobile, j’apprend le Back end et le Front end, mais j’ai une forte appétence pour le Front.</p>
          <section class="card-learnLove">
            <h4 class="card-learnLove--semiBold">Ce que j’apprends :</h4>
            <p class="card-learnLove--medium">HTML, CSS, PHP, SQL, JS</p>
          </section>
          <section class="card-tools">
            <h4 class="card-tools--semiBold">Outils de développement :</h4>
            <p class="card-tools--medium">VSCode<br>Bitbucket<br>Github<br>Terminal</p>
          </section>        
        </article>

        <!-- My Design card -->
        <article class="card card-design">
          <section class="card-logo--redCircleBG"><i class="fa-solid fa-bezier-curve fa-2x" style="color: #ffffff;"></i></section> <!-- Addition red ($primary) circle in background -->
          <h3 class="card-title--semiBold">Design</h3>
          <p class="card-subtitle--medium">J’apprends le Design sur mon temps libre, par envie d’apprendre, mais également pour faciliter et améliorer mes projets personnels.</p>
          <section class="card-learnLove">
            <h4 class="card-learnLove--semiBold">Ce que j’apprends :</h4>
            <p class="card-learnLove--medium">UX, UI, Web, Logos</p>
          </section>
          <section class="card-tools">
            <h4 class="card-tools--semiBold">Outils de conception :</h4>
            <p class="card-tools--medium">Figma<br>Adobe Illustrator<br>Adobe XD</p>
          </section>
        </article>

        <!-- My hobbies card -->
        <article class="card card-hobbies">
          <section class="card-logo--redCircleBG"><i class="fa-solid fa-icons fa-2x" style="color: #ffffff;"></i></section> <!-- Addition red ($primary) circle in background -->
          <h3 class="card-title--semiBold">Centres d’intérêt</h3>
          <p class="card-subtitle--medium">J’aime aussi bien les travaux manuels que l’informatique.</p>
          <section class="card-learnLove">
            <h4 class="card-learnLove--semiBold">Ce que j’aime :</h4>
            <p class="card-learnLove--medium">Écouter de la musique<br>Lire<br>Cuisiner<br>Coudre<br>Bricoler<br>Réparer</p>
          </section>
        </article>
      </section>

      <!-- My past projects -->
      <section class="content-projects">
        <h2 class="content-projects--semiBold">Mes projets</h2>
        <section class="project">
          <a href="https://madelinemorisset.github.io/2016_2DProd_V.2/index.html">
            <img src="webroot/assets/img/mockup2DProd.png" alt="2D Prod sandbox site" title="2D Prod" class="project-img">
          </a>
          <a href="https://madelinemorisset.github.io/MadelineMorisset_P2_20042021/">
            <img src="webroot/assets/img/mockupReservia.png" alt="Reservia, OpenClassrooms Project" title="Reservia" class="project-img">
          </a>
          <a href="">
            <img src="webroot/assets/img/mockupPortfolio.png" alt="My portfolio" title="Portfolio 2023" class="project-img">
          </a>
        </section>
      </section>
    </main>

    <?php include("webroot/assets/includes/siteFooter.php"); ?>
  </body>
</html>