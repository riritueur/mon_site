
<!DOCTYPE html>


<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title class="nom">Profil Richard Peres</title>
  </head>
  <body>
      
        
        
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
              <a class="nav-link" href="#"><p class="nom">Richard Peres</p><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#apropos"><p class="nom2">À propos</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#competence"><p class="nom2">Compétences</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><p class="nom2">Contact</p></a>
            </li>
          </ul>
        </div>
      </nav>
      
    
    <section class="home" id="hom">
        <div class="container-fluid">
          <h1 class="titre">Wesh la famille</h1>
          <p class="soustitre">Bienvenue sur mon profil.</p>
        </div>
    </section>
    
    
    <section>
        <div class="container-fluid">
         <br/>
         <!-- Image centré -->
          <img src="./code.svg" class="rounded mx-auto d-block" alt="logo" height="200px" width="200px">
          <!-- Hover tooltip -->
          <h2 class="text-center" onclick="fond()" data-toggle="tooltip" data-placement="bottom" title="Ca change aussi le fond ici" id="apropos">À propos :</h2>
          <p class="nom2">Petite description de ma vie</p>
        </div>
        <p><abbr title="jsp mdr">definition ?</abbr></p>
      <br><br><br><br><br>
    </section>
    
    
    <section class="home" id="hom2">
        <div class="container-fluid">
          
          <h1 class="titre" id="competence">Compétences</h1>
          
          <p class="soustitre">Bientôt dispo les potos.</p>
        </div>
    </section>
    
    <section class="gris">
      <br><br>
      
     <table class="table table-bordered table-hover table-light table-responsive-sm">
        <thead>
          <tr  class="table-dark">
            <th scope="col">Domaine</th>
            <th scope="col">Niveau</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Java</td>
            <td><div class="progress">
                  <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                 </div>
              </td>
          </tr>
          <tr>
            <td>YEAH YEAH</td>
            <td><div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                 </div>
              </td>
          </tr>
          <tr>
            <td>You make the sunshine brighter<br/>than joris day's</td>
            <td><div class="progress">
                  <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                 </div>
              </td>
          </tr>
          <tr>
            <td>Boom boom boomboom</td>
            <td><div class="progress">
                  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                 </div>
              </td>
          </tr>
          <tr>
            <!-- <td colspan="2">Larry the Bird</td> -->
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      
      <br><br><br>
      <br><br><br><br><br>
    </section>
    
    
    <section class="home" id="hom3">
      <div class="container-fluid">
          <h1 class="titre" id="contact">Contact</h1>
          <p class="soustitre">Email et coordonnées</p>
      </div>
      <br><br><br><br><br>
      <!-- Change le fond -->
      <button type="button" class="btn btn-outline-dark" onclick="fond()">Change le fond !</button>
      
      <!-- Button alert JS -->
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Bouton alert JS</button>
      <br><br><br><br><br>
    </section>
    <?php include("alertjs.php"); ?>
    
    <!------------------------------------- SCRIPTS ------------------------------------------------------->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Lettering js -->
    <script src="js/jquery.lettering.js"></script>
    <!-- Textillate js -->
    <script src="js/jquery.textillate.js"></script>
    <!-- Mon js-->
    <!-- <script src="script.js"></script> -->
    <!-- Textillate du titre-->  
    <script type="text/javascript">
      $(function () {
        $('.titre').textillate({in: { effect: 'fadeInLeftBig', delay:50}});
        $('.soustitre').textillate({ 
            in: { effect: 'rollIn', delay:10},
            out: {effect: 'rollOut',initialDelay: 50, delay:20},
            loop: true});
        $('[data-toggle="tooltip"]').tooltip()
      }) 
    </script>
    <!-- Animation scrolling-->
    <script type="text/javascript">
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 1500);
        });
    </script>
    <!-- Changement de fond-->
    <script type="text/javascript">
       function fond() {
          var fond1 = document.getElementById("hom");
          var fond2 = document.getElementById("hom2");
          var fond3 = document.getElementById("hom3");
          var logo = document.getElementById("logo");
         

          if(fond1.className == "home"){
            fond1.className = "home2";
            fond2.className = "home2";
            fond3.className = "home2";
            logo.src = "laptop.svg";
          }
          else {
            fond1.className = "home";
            fond2.className = "home";
            fond3.className = "home";
            logo.src = "code.svg";
          }
        }
    </script>
    
  </body>
</html>