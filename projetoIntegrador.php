<?php

$produtos = [
  ["camiseta"=>"Camisa A","descricao"=>"loren","preco"=>99,99],
  ["camiseta"=>"camisa B","descricao"=>"loren","preco"=>99,99],
  ["camiseta"=>"camiseta C","descricao"=>"loreeeenn","preco"=>99,99]

];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Projeto Integrador</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?= require_once "head.php" ?>

<section class= "container">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/carrossel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/carrossel3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagens/carrossel12.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>
  </section>
  
  <section class="container ">
  <?php foreach($produtos as $produto){?>
    <div class="container">
  
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="Imagens/carrossel1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $produto['camiseta']?></h5>
            <p class="card-text"><?= $produto['descricao'] ?></p>
            <a href="#" class="btn btn-primary"><?= $produto['preco']?></a>
          </div>
        </div>
      
      </div>
     

  </section>
  <?}?>
  <br>
 
  <!-- Footer -->
  <?= require_once "footer.php"?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>