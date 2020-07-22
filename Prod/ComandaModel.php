<?php 
$nomeProduto = 1;
if (empty($nomeProduto))
{
    echo "<h5 class='text-center'>Não tem Pedidos</h5>";     
    exit();
}
else {
    include "Banco/conexao.php";
    $sql = $conn->prepare("SELECT * FROM itemcomanda");
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        echo " 
        <div class='' id='Comandaitem'>
                <h5 class='form-control'>".$linha['nome']."</h5><h5>R$: ".$linha['preco'].",00</h5>
                </div>   ";   
    }
}
   
?>