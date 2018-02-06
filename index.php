<!DOCTYPE html>


<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
  <?php include("include/meta.php"); ?>

  <link rel="stylesheet" href="css/bootstrap.css">

  <title class="nom">Profil Richard Peres</title>
</head>

<body>

  <!-- ===== Navbar ===== -->
  <nav class="navbar border fixed-top navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">
          <img src="ressource/icon/code.svg" class="logo" width="45" height="45" alt="Logo" id="logo">
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

  <!-- ===== Home ===== -->
  <section class="home container-fluid" id="hom">
    <h1 class="titre">Richard Peres</h1>
    <p class="soustitre">Informaticien en devenir</p>
  </section>

  <!-- ===== A propos ===== -->
  <section>
    <div class="container-fluid">
      <br/>
      <!-- ===== Image centré ===== -->
      <img src="ressource/image/moi.jpg" class="photo mx-auto d-block" alt="Richard Peres" id="apropos">

      <h2 class="sous_menus">À propos</h2>

      <!-- ===== Description ===== -->
      <p class="border border-secondary rounded description">Bonjour et bienvenue sur mon site !<br/><br/>Passionné par l'univers de l'informatique depuis que j'en connais l'existence, c'est tout naturellement que je me suis orienté vers l'informatique après mon bac scientifique en 2015.<br/><br/>Ce qui me plaît le plus dans l'informatique, c'est la logique qu'il y a derrière, la facon de penser, d'organiser et de prédire les actions que de simples lignes de codes peuvent avoir. En plus des cours, j'aime découvrir de nouvelles façons de programmer et de tester toutes les idées qui me passent par la tête.<br/><br/>Mon domaine de prédilection actuel est sans aucun doute le développement en Java. Que ce soit en "graphique" avec Swing ou simplement programmer des algorithmes complexes ou gérer des évènements, la programmation Java est vraiment l'aspect que je préfère. Mais je reste très ouvert à d'autres domaines tels que le Deep/Machine Learning, l'algorithmique génétique ou encore le Cloud Computing, domaines surlesquels je me renseigne en ce moment.        
      </p>
      <br/>
      <div class="text-center">
          <a href="https://github.com/riritueur"><img src="ressource/icon/github_logo.png" class="reso rounded" width="70" height="70" alt="Logo" id="logo"></a>
          <a href="https://linkedin.com/in/richard-peres
"><img src="ressource/icon/linkedin_logo.png" class="reso rounded" width="70" height="70" alt="Logo" id="logo"></a>
        </div>
      <br/><br/><br/>

      <!-- ===== Collapse CV ===== -->
      <button class="btn btn-dark btnCV" type="button" data-toggle="collapse" data-target="#CV" aria-expanded="false" aria-controls="CV">
        Mon CV
      </button>

      <div class="collapse" id="CV">
        <br/>
        <div class="card card-body">
          <a href="ressource/document/CV.pdf" class="dl" download="CV_PERES_Richard.pdf"><img src="ressource/icon/download.svg" class="middle text-center" width="35" height="45" alt="dl_cv" id="dl_cv" data-toggle="tooltip" data-placement="right" title="Télécharger au format PDF"><br/>Télécharger</a>
          <object class="cv" data="ressource/document/CV.pdf" type="application/pdf">
            <embed src="ressource/document/CV.pdf" type="application/pdf" />
          </object>
          <br/>
          <p class="text-center">(s'il ne s'affiche pas vous pouvez le consulter<a href="ressource/document/CV.pdf" class="dl">ici</a>, pour la version anglaise <a href="ressource/document/cv_en.pdf" class="dl">ici</a>)</p>
        </div>
      </div>

      <br/><br/><br/>
    </div>
  </section>

  <!-- ===== Compétences ===== -->
  <section class="back container-fluid" id="competences">
    <h2 class="sous_menus">Compétences</h2>
    <br/>
    <!-- ===== Tableau des compétences ===== -->
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
          <td class="text-center  table-justify">Application, GUI (Swing), UML, récursivité, <a href="https://github.com/riritueur">Github</a></td>
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
              <div class="progress-bar php progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><strong>60%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>Bash et Python</strong></td>
          <td class="text-center  table-justify">Script SH, serveur SSH, programmation sous Python 3 (<a href="https://anaconda.org/anaconda/python">Anaconda</a>)</td>
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
              <div class="progress-bar c  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"><strong>55%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>C#</strong></td>
          <td class="text-center table-justify">Scripts C#, Unity 3D</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar csharp  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 35%"><strong>35%</strong></div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center middle table-justify"><strong>Android</strong></td>
          <td class="text-center table-justify">Programmation d'application mobile (Android)</td>
          <td class="middle">
            <div class="progress">
              <div class="progress-bar android  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%"><strong>30%</strong></div>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </section>

  <!-- ===== Contact ===== -->
  <section class="container-fluid contactSection" id="contact">
    <br/><br/>
    <h2 class="sous_menus">Contact</h2>
    <div class="contact border border-secondary rounded">
      <p class="text-center preform">Si vous souhaitez me contacter, vous pouvez le faire par <strong data-toggle="tooltip" data-placement="top" title="richardperes.info@gmail.com">mail</strong> ou via ce formulaire.</p>
      <form action="include/mailing.php" method="post" id="needs-validation" novalidate>
        <div class="row">
          <div class="col">
            <label for="prenom" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Richard" pattern="[A-z-]{2,25}" required>
            <div class="invalid-feedback">
              Champ invalide
            </div>
          </div>
          <div class="col">
            <label for="nom" class="col-sm-2 col-form-label"><strong>Nom *</strong></label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Peres" pattern="[A-z-]{2,25}" required>
            <div class="invalid-feedback">
              Champ invalide
            </div>
          </div>
        </div><br/>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label"><strong>Email *</strong></label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="richardperes.info@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <div class="invalid-feedback">
              Adresse invalide
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="objet" class="col-sm-2 col-form-label"><strong>Objet *</strong></label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="objet" id="objet" placeholder="Objet du message" pattern=".{4,25}" required>
            <div class="invalid-feedback">
              Champ invalide
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="message" class="col-sm-2 col-form-label"><strong>Message *</strong></label>
          <div class="col-sm-10">
            <textarea class="form-control message" name="message" id="message" placeholder="Votre message ..." required minlength="10" maxlength="1000"></textarea>
            <div class="invalid-feedback">
              Champ invalide
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-dark btnSend" data-toggle="modal" data-target="#exampleModal">Envoyer</button>
        <?php include("js/script_alertjs.php"); ?>
      </form>
    </div>
  </section>

  <!-- ===== Footer ===== -->
  <footer class="fin">
    <blockquote class="blockquote text-center white">
      <p class="mb-0">Site réalisé exclusivement par Richard Peres.<br/>Ce site reprend des éléments de style issus de <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>.<br/><br/></p>
      <p class="blockquote-footer">© Copyright 2017 - <cite title="Source Title">Richard PERES</cite></p>
    </blockquote>
  </footer>

  <?php include("include/scripts.php") ?>
</body>

</html>
