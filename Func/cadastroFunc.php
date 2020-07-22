<?php 
    include "../Banco/conexao.php";

    $sql = $conn->prepare("INSERT INTO Funcionario (imagem, nome, userName, email, senha, cpf, telFixo, telCelular, telCelular2, tipoUsuario, endereço, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql -> bind_param("ssssssssssssss", $imagem, $nomefunc, $usernamefunc, $emailfunc, $senhafunc, $cpffunc, $telfixofunc, $telfunc, $telfunc2, $tipousuario, $enderecofunc, $cidadefunc, $estadofunc, $cepfunc);
    $sql -> execute();

    echo "Cadastro realizado com sucesso";

    $sql -> close();
    $conn -> close();

?>