<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css">

    <title>Cadastros e Consultas</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastros e Consultas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Cadastro de Pessoa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Lista de Cadastros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="novo-protocolo.php">Cadastro de Protocolo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="lista-protocolos.php">Lista de Protocolos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
        <?php 
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
              include("novo-cadastro.php");
            break;
            case "listar":
              include("lista-cadastros.php");
            break;
            case "salvar":
              include("salvar-cadastro.php");
              break;
              case "editar":
                include("editar-cadastro.php");
                break;
            default:
            print "<h1>Bem Vindo!</h1>";
        }
      ?>
        </div>

      </div>
    </div>
      
        <script src="js/bootstrap.bundle.min.js" ></script>

    </body>
    </html>
