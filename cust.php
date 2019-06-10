<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O.o</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<script>
    function recebePrint(ev) {
        ev.preventDefault();
    }

    function inserePrint(ev) {
        ev.dataTransfer.setData("Text", ev.target.id);

    }


    function drop(ev) {
        console.log(ev);
        let custom = ev.dataTransfer.getElement("Text");
        ev.target.appendChild(document.getElementById(custom))
        ev.preventDefault();
        console.log("");
    }
</script>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
        <a class="navbar-brand" href="projetoIntegrador.php">GlubGlub</a>

        <img width="2%" src="Imagens/dynamic-style.png" class="rounded-circle">
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

    <section id="custom" class="container d-flex menu col-lg-12">
        <!-- container para customizar as camisetas -->
        <section class="col-lg-6">
            <div class="flex-column text-center" ondrop="drop(event)" ondragover="recebePrint(event)">
                <h1>Your Shirt GlubGlub</h1>
                <figure class="figure">
                    <img src="imagens/camiseta-teste.jpg" class="figure-img img-fluid rounded"
                        alt="Imagem de um quadrado genérico com bordas arredondadas, em uma figure.">
                    <figcaption class="figure-caption">Uma legenda para a imagem acima.</figcaption>
                </figure>

            </div>
        </section>
        </div><br>
        <!-- container para mudar as cores -->
        <section id="menu2">
            <div>
                <h3>Change Color</h3>
                <div class="camisetas">

                    <img class="c1"src="imagens/camisa-teste2.jpg" alt="">
                    <img class="c2"src="imagens/camisa-teste3.jpg" alt="">
                    <img class="c3"src="imagens/camisa-teste4.jpg" alt="">
                    <img class="c4"src="imagens/camisa-teste.jpg" alt="">
                </div>
            </div>
            <div id="collor" name="collor" draggable="true" ondragstart="inserePrint(event)">
                <!-- container para mudar as estampas -->
                <!-- <div id=cores> -->
                <h3>menu of Prints</h3>
                <div class="camisetas">
                    <img src="imagens/cor1.jpg" alt="">
                    <img src="imagens/cor2.jpg" alt="">
                    <img src="imagens/cor3.jpg" alt="">
                    <img src="imagens/cor4.jpg" alt="">
                    <img src="imagens/cor5.jpg" alt="">

                </div>
            </div>

            </div><br>
        </section>
    </section>
</body>

</html>