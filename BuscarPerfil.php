<?php

include_once 'Banco/conexao.php';

// todas as informaçoes 'usuario ou email e senha' precisam ser verdadeiras.

$sql = $conn->prepare("SELECT * FROM Funcionario (userName, email, senha, cpf, telCelular, endereço) VALUES (?,?,?,?,?,?)");
$sql -> bind_param("ssssss", $userName, $email, $senha, $cpf, $telCelular, $endereço);
$sql -> execute();

$sql -> close();
$conn -> close();

$resultado = $sql->get_result();
$linha = $resultado->fetch_assoc();

if(empty($linha)){
    echo "FalhaLogin";
    die();
}
else {

    $_SESSION['login'] = true;
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['userName'] = $linha['userName'];
    $_SESSION['email'] = $linha['email'];
    $_SESSION['senha'] = $linha['senha'];
    $_SESSION['cpf'] = $linha['cpf'];
    $_SESSION['telCelular'] = $linha['telCelular'];
    $_SESSION['endereço'] = $linha['endereço'];

}
?>