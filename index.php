<!DOCTYPE html>


<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
  <?php include("include/meta.php"); ?>

  <link rel="stylesheet" href="css/bootstrap.css">

  <title class="nom">Profil Richard Peres</title>
</head>

<body>

  <!------- Navbar ------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="http://localhost/Mon_Site">
          <img src="code.svg" class="logo" width="45" height="45" alt="Logo" id="logo">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <p class="nom">Richard Peres</p><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#apropos">
            <p class="nom2">À propos</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#competences">
            <p class="nom2">Compétences</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">
            <p class="nom2">Contact</p>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!------- Home ------->
  <section class="home container-fluid" id="hom">
    <h1 class="titre">Richard Peres</h1>
    <p class="soustitre">Informaticien en devenir</p>
  </section>

  <!------- A propos ------->
  <section>
    <div class="container-fluid">
      <br/>
      <!-- Image centré -->
      <img src="Durif_8.jpg" class="photo mx-auto d-block" alt="logo" height="200px" width="200px" id="apropos">
      <!-- Hover tooltip -->
      <h2 class="sous_menus" onclick="fond()" data-toggle="tooltip" data-placement="bottom" title="Ca change aussi le fond ici">À propos</h2>
      <p class="border border-secondary rounded description">Bonjour et bienvenue sur mon site !<br/><br/>Passionné par l'univers de l'informatique depuis que j'en connais l'existence, c'est tout naturellement que je me suis orienté vers l'informatique après mon bac scientifique en 2015.<br/><br/>Ce qui me plaît le plus dans l'informatique, c'est la logique qu'il y a derrière, la facon de penser, d'organiser et de prédire les actions que de simples lignes de codes peuvent avoir. En plus des cours, j'aime découvrir de nouvelles façons de programmer et de tester toutes les idées qui me passent par la tête.<br/><br/>Mon domaine de prédilection actuel est sans aucun doute le développement en Java. Que ce soit en "graphique" avec Swing ou simplement programmer des algorithmes complexes ou gérer des évènements, la programmation Java est vraiment l'aspect que je préfère.</p>
      <br><br>

      <!-- Collapse CV -->
      <button class="btn btn-dark btnCV" type="button" data-toggle="collapse" data-target="#CV" aria-expanded="false" aria-controls="CV">
        Mon CV
      </button>

      <div class="collapse" id="CV">
        <br/>
        <div class="card card-body">
          <a href="CV.pdf" class="dl" download="CV_PERES_Richard.pdf"><img src="ressource/icon/download.svg" class="middle text-center" width="35" height="45" alt="dl_cv" id="dl_cv" data-toggle="tooltip" data-placement="right" title="Télécharger au format PDF"><br/>Télécharger</a>
          <object class="cv" data="ressource/document/CV.pdf" type="application/pdf">
            <embed src="CV.pdf" type="application/pdf" />
          </object>
        </div>
      </div>

      <br><br><br>
    </div>
  </section>

  <!------- Compétences ------->
  <section class="gris back container-fluid">
    <h2 class="sous_menus" id="competences">Compétences</h2>

    <!-- Tableau des compétences -->
    <table class="table table-hover table-light table-bordered table-justify table-responsive">
      <thead>
        <tr class="table-dark">
          <th scope="col" class="text-center">Language</th>
          <th scope="col" class="text-center">Détails</th>
          <th scope="col" class="text-center">Niveau</th>
        </tr>
      </thead>
      <tbody>
        <tr class="lel">
          <td class="text-center middle table-justify"><strong>Java</strong></td>
          <td class="text-center  table-justify">Application, GUI (Swing), UML, récursivité, Git(Hub)</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar java progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"><strong>85%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>HTML et CSS</strong></td>
          <td class="text-center  table-justify">Sites webs, référencement, style graphique (<a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>)</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"><strong>75%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>PhP et JavaScript</strong></td>
          <td class="text-center  table-justify">Cookies, connection à une base données, animation</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar php progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"><strong>55%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>Bash (Linux)</strong></td>
          <td class="text-center  table-justify">Script SH, serveur SSH, environnement Linux</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar linux progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> <strong>70%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>SQL et PLSQL</strong></td>
          <td class="text-center lel">Création et modification de bases de données, MySQL, Oracle, Postgre</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar sql progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> <strong>65%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>C</strong></td>
          <td class="text-center table-justify">Programmation basique, utilisation méthodes bash</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar c bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"><strong>55%</strong></div>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </section>

  <!------- Contact ------->
  <section class="container-fluid contactSection">
    <br/><br/>
    <h2 class="sous_menus" id="contact">Contact</h2>
    <div class="contact border border-secondary rounded">
      <p class="text-center preform">Si vous souhaitez me contacter, vous pouvez le faire par <strong data-toggle="tooltip" data-placement="top" title="richardperes.info@gmail.com">mail</strong> ou via ce formulaire.</p>
      <form action="/include/mailing.php" method="post">
        <div class="row">
          <div class="col">
            <label for="prenom" class="col-sm-2 col-form-label"><strong>Prénom</strong></label>
            <input type="text" class="form-control" name="prenom" placeholder="Richard" required>
          </div>
          <div class="col">
            <label for="nom" class="col-sm-2 col-form-label"><strong>Nom</strong></label>
            <input type="text" class="form-control" name="nom" placeholder="Peres" required>
          </div>
        </div><br/>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label"><strong>Email</strong></label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="richardperes.info@gmail.com" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="objet" class="col-sm-2 col-form-label"><strong>Objet</strong></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="objet" placeholder="Objet du message" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="message" class="col-sm-2 col-form-label"><strong>Message</strong></label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control message" name="message" placeholder="Votre message ..." required></textarea>
          </div>
        </div>
        <button type="button" class="btn btn-dark btnSend" data-toggle="modal" data-target="#exampleModal">Envoyer</button>
        <?php include("/js/script_alertjs.php"); ?>
      </form>
    </div>
  </section>

  <!------- Footer ------->
  <footer class="fin">
    <blockquote class="blockquote text-center white">
      <p class="mb-0">Site réalisé exclusivement par Richard Peres.<br/>Ce site reprend des éléments de style issus de <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>.<br/><br/></p>
      <footer class="blockquote-footer">© Copyright 2017 - <cite title="Source Title">Richard PERES</cite></footer>
    </blockquote>
  </footer>

</body>

<?php include("include/scripts.php") ?>

</html>
