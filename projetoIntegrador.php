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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
    <a class="navbar-brand" href="#"></a>

    <img width="10%" src="Imagens/logopi.png" class="rounded-circle">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="projetoIntegrador.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cust.php">Custons your Shirt</a>
        </li>

        <div class="form-inline my-8 my-lg-8 d-flex justify-content-end">
          <input class="form-control mr-sm-2" type="search" placeholder="Login" aria-label="Login">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Seu Nome</button>
        </div>


      </ul>
    </div>
  </nav> <br>
<!-- primeiro carrosel -->
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

  <section class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="Imagens/carrossel1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto A</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-primary">R$99,99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="Imagens/carrossel12.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto B</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-primary">R$99,99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="Imagens/carrossel3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Produto C</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="btn btn-primary">R$99,99</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>


 <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://google.com"> Google.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


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