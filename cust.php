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
    // função executada quando pega a imagem
    function recebePrint(ev) {
        ev.preventDefault();
    }
    function drop(ev) {
        let custom = event.dataTransfer.getData("Text/plain");
        var div = document.querySelector('#logoDaCamisa');
        let img =  document.createElement('img')
        img.setAttribute('src',custom);
        img.style.width = "100px";
        div.appendChild(img)
        console.log("");
    }
</script>

<body>
<?= require_once "head.php"?>

    <section id="custom" class="container d-flex menu col-lg-12">
        <!-- container para customizar as camisetas -->
        <section class="col-lg-6" id="CorDaCamiseta">
            <div class="flex-column text-center">
                <h1>Your Shirt GlubGlub</h1>
                <div id="logoDaCamisa" class="camiseta" ondrop="drop(event)" ondragover="recebePrint(event)">



                </div>

            </div>
        </section>

        <!-- container para mudar as cores -->
        <section id="menu2">
            <div>
                <h3>Change Color your GlubGlub</h3>
                <div class="camisetas">
                    <input id="still" type="color" value="">
                    <script>
                        let camisetas = document.querySelector('#still');
                        camisetas.addEventListener("change", tunning);

                        function tunning(ev) {
                            let camiseta = document.querySelector('.camiseta');
                            camiseta.style.backgroundColor = ev.target.value;


                        }
                    </script>
                </div>
            </div>
            <div id="collor" name="collor" draggable="true" ondragstart="inserePrint(')">
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

            <div>                
                <!-- fazer um JS onde só podemos enviar quando estiver confirmado o style da camiseta -->
               <a href="confirmarCompra.php"><input class="envio" type="submit"></a> 
                       
            </div>
        </section>
    </section>
   
    <?= require_once "footer.php"?>
</body>


</html>