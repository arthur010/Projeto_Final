<?php include './header.php' ?>
<link rel="stylesheet" type="text/css" href="Início.css">

           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
 <div class="carousel-item active">
  <img src="https://pngimage.net/wp-content/uploads/2018/06/pizza-doce-png-8.png" alt="Pizzas">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza de confetes</h5>
   
	
  </div>
</div>
   <div class="carousel-item">
   <img src="http://varejaodafartura.com/upload/produtos/2017/12/pizza-prestigio.png" alt="Pizza">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza Chocolate com prestígio</h5>
   <?php
    $lista = array(
     array(
                    "id" => 1,
                    "nome" => "Pizza Chocolate com Prestígio",
                    "quantidade"=> "1 un.",
                    "preco" => 10.90,
                    "tamanho" => "pequena"
                ),
     array(
                  "id" => 2,
                  "nome" => "Pizza Chocolate com Prestígio",
                  "quantidade"=> "1 un.",
                  "preco" => 10.90,
                  "tamanho" => "pequena"
              ),
  ?>
                
  </div>
</div>
    <div class="carousel-item">
  <img src="https://app.menudino.com/Content/images/cardapios/1599/64.jpg" alt="Pizzas">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza de milho com frango </h5>
   
	
  </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span style="font-size: 1em; color: yellow; ">
    Escolha o Tamanho de sua pizza
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <span style="font-size: 1em; color: yellow;">
    <a class="dropdown-item" href="Compras.php">Pequena:R$15,00</a>
    <a class="dropdown-item" href="Compras.php">Media:R$18,00</a>
    <a class="dropdown-item" href="Compras.php">Grande:R$21,50</a>
  </div>
</div>
        </div>



        <?php include './footer.php' ?>