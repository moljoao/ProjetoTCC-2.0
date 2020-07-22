<?php 

    include "Banco/conexao.php";
    $sql = $conn->prepare("SELECT * FROM Comanda");
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        echo "
        <div class='col-sm-3 col-md-4'>
                        <div class='card cor2 my-2' id='card'>
                            
                            <div class='card-body'>
                                <h4 class='card-title text-center'>Comanda</h4>
                                <div>
                                    <hr class='hr1'>
                                <button class='btn btn-outline-primary ml-4 col-sm-10 ' type='submit' value='CadastrarComanda' name='cadastrocomanda' id='CadastrarComanda'> Fechar Comanda</button>
                                <hr class='hr1'>    
                                </div>
                                <div class='row'>
                <div class='col-sm-7'>
                      <h5>".$linha['Descricao']."</h5>
                </div>
                <div class='my-1'>
                <h5>R$: ".$linha['TotalComanda']."</h5>
        </div>
                                </div>
                            </div>
                           </div>
                    </div>
        
        ";
    }
?>