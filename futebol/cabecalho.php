<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    .tabs .tab a {
      color: #fff;
      border-right: solid 1px grey;
    }

    #fot {

      background: linear-gradient(45deg, #212121 24%, rgba(255, 255, 255, 1) 24%);
    }

    .tabs .tab a:hover {
      background-color: #eee;
      color: black;
    }

    .tabs .tab a.active {
      color: #000;
    }

    .tabs .indicator {
      background-color: #000;
    }

    footer {

      padding: 20px;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  </style>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>IF GeoLab</title>
</head>

<body>

  <header class="#1b5e20 blue">
    <div class="container">
      <div class="col s12 center-align">
        <a href="index.php">
          <img class="responsive-img" src="img/yourHair.png" alt="Logo do site" height="200" width="200">
        </a>
      </div>
    </div>
    </div>
    <nav class="black" role="navigation">
      <div class="nav-wrapper">
        <a href="#" data-target="telefone-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down" style="margin-left: 40px;">
          <li><a class="white-text" href="cadastrar.php">Cadastrar Produto</a></li>
        </ul>
      </div>
    </nav>
    <!-- topbar para tela pequena  !-->
    <ul class="sidenav white-text #212121 grey darken-4 " style="width: 350px;" id="telefone-nav">
      <li><a class="sidenav-close white-text" href="#!"><i class="material-icons white-text">clear</i>Menu lateral</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="white-text" href="cadAnimal.php">Metamórficas</a></li>
      <li><a class="white-text" href="igneas.php">Ígneas</a></li>
      <li><a class="white-text" href="collapsible.html">Sedimentares</a></li>
      <hr>
      <ul>
        <li><a class="waves-effect waves-light btn #212121 grey darken-4 white-text" href="login.php">Login</a></li>
        <li><a class="waves-effect waves-light btn #212121 grey darken-4 white-text" href="cadUsuario.php">Cadastrar</a></li>
      </ul>
      <hr>
      <div class="row">
        <div class="center-align ">
          <img class="responsive-img" src="img/geolab-branco.png" alt="Logo do Jornal UPGD-IFFar">
        </div>
      </div>
    </ul>
  </header>