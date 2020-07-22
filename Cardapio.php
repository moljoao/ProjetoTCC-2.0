<?php

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
  header("Location: Projeto.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeta Acai - Cardapio</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/car.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home2.css">
    <!-- efeito de pagina do conteudo do cardapio -->
    <?php include "js/paginacao.php" ?>
</head>
<body>
    <!-- NavBar esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/navBar.php" ?>

<p class="mb-5 my-5 zero">texto</p>
<div class="container-fluid2 back">
<div class="row">
<div class="col-sm-12 text-center">
<img width="200px" height="200px" src="img/logo9.png">
</div>
    <div class="col-sm-12">
     <hr>
    </div>
    <div class="col-sm-12 cor4 text-center">
    <h1><i> Cardapio </i></h1>
</div>
    <div class="col-sm-2">
    <div class="btn-group-vertical ml-5">
  <button onclick="crepe()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Crepe Francês</button>
  <button onclick="pastel()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Pastel</button>
  <button onclick="churros()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Churros</button>
  <button onclick="porcao()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Porção</button>
  <button onclick="caldos()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Caldos</button>
  <button onclick="bebidas()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Bebidas</button>
  <button onclick="Outros()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Outros</button>
</div>
    </div>
    <!-- conteudo do cardapio -->
<div class="shadow-lg scrol p-3 bg-white rounded container2 my-2 col-sm-6">
<div class="d-block" id="crepe">
<?php $produto = "1"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="pastel">
<?php $produto = "2"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="churros">
<?php $produto = "3"; include "Prod/produtoModel.php"; ?></div>

<div class="d-none" id="porcao">
<?php $produto = "4"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="caldos">
<?php $produto = "5"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="bebidas">
<?php $produto = "6"; include "Prod/produtoModel.php"?></div>

</div>
    <div class="col-sm-3  col-md-4">
                        <div class="card cor2 my-2" id="card">
                            
                            <div class="card-body">
                                <h4 class="card-title text-center">Comanda</h4>
                                <div class="row">
                                <div class="col-sm-2 center">
                            <select name="tipo" class="">
                                <option selected>Mesa</option>
                                <option value="1"> Mesa 1</option>
                                <option value="2"> Mesa 2</option>
                                <option value="3"> Mesa 3</option>
                                <option value="4"> Mesa 4</option>
                                <option value="5"> Mesa 5</option>
                                <option value="6"> Mesa 6</option>
                                <option value="7"> Mesa 7</option>
                                <option value="8"> Mesa 8</option>
                                <option value="9"> Mesa 9</option>
                            </select>
                        </div>
                        </div>
                                <div>
                                <hr class="hr1">    
                                </div>
                                <div class="container scrol">
                                <?php include "Prod/ComandaModel.php" ?>
                                </div>
                                <hr class="hr1">
                                <button class="btn btn-outline-primary ml-4 col-sm-10 "> Fechar Comanda</button>
                            </div>
                           </div>
                    </div>
</div>
</div>
<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/rodape.php" ?>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>