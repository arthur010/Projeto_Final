<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <script src="https://kit.fontawesome.com/d5d9f00300.js"></script>
    <title>Pizza-Hut</title>
     
      
    <style>
        .navbar-inverse, .dropdown-menu{
            background-color: Red !important;   
        }
      

        .navbar-inverse a{
            color: yellow !important;
        }
        
       
        
     
        
        
        
      
    </style>
      
      
      
  </head>
  <body>
<main class="container-fluid"> 
        
    <nav class="navbar navbar-expand-md navbar-inverse bg-dark">
        <a class="navbar-brand" href="Pizza Hut.php"> <span style="font-size: 1em; color: yellow;"><i class="far fa-play-circle"></i></span> Pizza-Hut</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
          <a class="nav-link" href="Início.php"><span style="font-size: 1em; color: yellow;"><i class="fas fa-home"></i></span> Início</a> 
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="Promoções.php"><span style="font-size: 1em; color:yellow;"><i class="far fa-newspaper"></i></span> Promoções <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span style="font-size: 1em; color: yellow;"><i class="fa fa-cutlery" aria-hidden="true" ></i></span> Cardapio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Pizza Doce.php"><span style="font-size: 1em; color: yellow;"><i class="fas fa-utensils"></i></span> Pizzas Doces</a>
            <a class="dropdown-item" href="Pizza Salgadas.php">   <span style="font-size: 1em; color: yellow;"><i class="fas fa-pizza-slice"></i></i></span> Pizzas Salgadas</a>
        </div>
      </li>
       <li class="nav-item active">
          <a class="nav-link" href="Criar Login.php"><span style="font-size: 1em; color:yellow;"><i class="far fa-newspaper"></i></span>Criar Login<span class="sr-only">(página atual)</span></a>
      </li>
       
      
        
    </ul>
   <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Nome</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nome">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Usuário</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
        </div>
        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Senha">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Lembrar de mim
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </div>
  </div>
</form>
  </div>
</nav>