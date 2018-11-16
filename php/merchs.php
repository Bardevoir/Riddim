<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/nav.css" />
    <script src="../js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark primary-color" id="navigation">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav" id="ulnav">
      <li class="nav-item active">
        <a class="nav-link" href="#" id="accueil">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="soirees.php" id ="soiree">Soirées</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prevention.php" id="prev">Prévention</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="actualites.php" id="actu">Actualités</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="playlist.php" id="playlist">Playlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="merchs.php" id="merchs">Merchs</a>
      </li>
      <li class="nav-item" id="deco">
        <a class="nav-link deco" href="logout.php">Déconnexion</a>
      </li>
    </ul>
  </div>
</nav>


    <div class="container">
        <img src="../img/2FOOTER.png" alt="" class="img-fluid">
    </div>
</body>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2018 Copyright: HUARD, TARRAL, BOUDRAA, LIN <br>
        <a href="contact.php" style= "text-decoration: none" class="Fcontact"> Contact</a>
    </div>
</footer>
</html>