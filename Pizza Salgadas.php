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
  <img src="https://www.redelevepizza.com.br/assets/imagens/pizzas/small/calabresa.png" alt="Pizzas">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza Calabresa</h5>
    
	
  </div>
</div>
   <div class="carousel-item">
  <img src="https://www.redelevepizza.com.br/assets/imagens/pizzas/small/mussarela.png" alt="Pizzas">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza Mussarela</h5>
  

  </div>
</div>
    <div class="carousel-item">
  <img src="https://www.redelevepizza.com.br/assets/imagens/pizzas/small/premiatta.png" alt="Pizzas">
  <div class="carousel-caption d-none d-md-block">
    <h5>Pizza Premmiata</h5>
	

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
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span style="font-size: 1em; color: yellow;">
    Escolha o Tamanho de sua pizza
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <span style="font-size: 1em; color: yellow;">
    <a class="dropdown-item" href="Compras.php">Pequena:R$16,00</a>
    <a class="dropdown-item" href="Compras.php">Media:R$19,50</a>
    <a class="dropdown-item" href="Compras.php">Grande:R$23,00</a>
  </div>
</div>
        </div>



    
        <?php include './footer.php' ?>