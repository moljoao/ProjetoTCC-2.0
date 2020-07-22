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
    <title>Planeta Acai - Perfil</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Perfil.css">
    
   
</head>
<body>
    <!-- NavBar esta sendo puxada da pasta 'BASES' -->
<?php
include "Bases/navBar.php"
?>
<p class="mb-5 my-5">texto</p>
    <div class="container">
    <div class="card bg-light my-5">
  <div class="card-header ">
       <div class="col-sm-4 my-5">
             
                <hr>
                
                <h1 class="display-9 text-center center list-group-item"><?php echo "<a>  <b>".$nome[0]."</b></a>"; ?></h1>
            
                <hr>    
            </div>


      
  </div>

  <center>
  <div class="card w-75 bg-transparent ">

    <li class="list-group-item border-dark bg-transparent "> <a> <?php echo "<a> UserName: <b>". $_SESSION['UserNameFunc']."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-transparent  "><a> <?php echo "<a> Email: <b>". $emailfunc['EmailFunc']."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-transparent "><a> <?php echo "<a> Senha: <b>". $senhafunc['SenhaFunc']."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-transparent "><a> <?php echo "<a> Cpf: <b>".  $cpffunc['CPFFUNC']."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-transparent "><a> <?php echo "<a> Telefone: <b>". $telfixofunc['TelFixoFunc']."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-transparent "><a> <?php echo "<a> Endereco: <b>".  $enderecofunc['End']."</b></a>"; ?>  </a></li>
    
  </div>
  <br><br><br><br><br><br>
</div>
</div>
</center>
</div>
</div>
<br><br>




<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php
include "Bases/rodape.php"
?>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>