<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro de Pessoas/Palestras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"> 
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=nova-pessoa">Cadastro Pessoas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=nova-palestra">Cadastro Palestras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar-pessoa">Listar Pessoas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar-palestra">Listar Palestras</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php 
        include("conexao.php");       
        include("pessoa.php");
        include("palestra.php"); 

        $plt = new Palestra();
        $psa = new Pessoa();

        match(@$_REQUEST['page']){
            'nova-palestra' => include('nova-palestra.php'),
            'nova-pessoa' => include('nova-pessoa.php'),
            'editar-palestra' => include('editar-palestra.php'),
            'editar-pessoa' => include('editar-pessoa.php'),
            'salvar-palestra' => include('salvar-palestra.php'),
            'salvar-pessoa' => include('salvar-pessoa.php'),
            'listar-palestra' => $plt->listar(),
            'listar-pessoa' => $psa ->listar(),
            default => print('Bem Vindo!')

        }
        ?>
        </div>
    </div>
</div>





</body>
</html>