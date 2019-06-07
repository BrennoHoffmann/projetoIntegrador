<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T style.css" crossorigin="anonymous" >
    

</head>
<body>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb gta">
    <li class="breadcrumb-item"><a href="projetoIntegrador.php">Home</a></li>
    <li class="breadcrumb-item"><a href="projetoIntegrador.php">Mensagens</a></li>
    <li class="breadcrumb-item"><a href="new.php">News Products</a></li>
    <li class="breadcrumb-item"><a href="graficos.php">Grafics</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lojinha dos Leke</li>
  </ol>
</nav>
<div class= 'd-flex'>
<canvas class="line-chart col-md-6"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script class= 'container col-md-10'>
var ctx = document.getElementsByClassName('line-chart');

var chartGraphic = new Chart (ctx, {
    type: 'line',
    data:{
      labels: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
      datasets:[{
        label: "Vendas 2019",
        data:[5,10,5,10,15,20,25,8],
        borderwidth: 6,
        borderColor: 'rgba(77,166,253,0.85)',
        backgroundColor: 'transparent',

      }]
    }

});


</script>
<!-- <img class= "container" src="imagens/layoutteste.png" class="img-fluid" alt="Responsive image"><br><br> -->

<table class="container table col-md-6">


  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Camisetas</th>
      <th scope="col">Regatas</th>
      <th scope="col">Jogos de Camisa</th>
    </tr>
  </thead>
  <tbody class= "">
    <tr>
      <th scope="row">Vendas</th>
      <td>#</td>
      <td>#</td>
      <td>#</td>
    </tr>
    <tr>
      <th scope="row">Qnt. Estoque</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>
      
        
    
    <!-- <section id="grafico">
        <div class="acm">

        </div>
    </section>
    <section id=Estoque>
        <div>

        </div>
    </section> -->

  
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</body>
</html>