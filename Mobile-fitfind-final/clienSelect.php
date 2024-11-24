<?php

include_once("conexao.php");

$codigo_loja=$_POST['txtId'];

try
{
    $sql = $conn->query(
        "select * from cliente where codigo_cliente=".$codigo_cliente
    );
    
    //$sql->execute();

    if($sql->rowCount() == 1)
    {
        foreach($sql as $linha)
        {
            echo "<p id='idCliente'>".$linha[0]."</p>";
			echo "<p id='nomeCliente'>".$linha[1]."</p>";
            echo "<p id='cpfCliente'>".$linha[2]."</p>";
            echo "<p id='generoCliente'>".$linha[3]."</p>";
            echo "<p id='nascimentoCliente'>".$linha[4]."</p>";
            echo "<p id='enderecoCliente'>".$linha[5]."</p>";
            echo "<p id='bairroCliente'>".$linha[6]."</p>";
            echo "<p id='cidadeCliente'>".$linha[7]."</p>";
			echo "<p id='ufCliente'>".$linha[8]."</p>";
            echo "<p id='cepCliente'>".$linha[9]."</p>";
            echo "<p id='cepLoja'>".$linha[10]."</p>";
            echo "<p id='emailCliente'>".$linha[11]."</p>";
            echo "<p id='telefoneCliente'>".$linha[12]."</p>";
			echo "<p id='obsCliente'>".$linha[13]."</p>";
            echo "<p id='statusCliente'>".$linha[14]."</p>";
            echo "<p id='senhaCliente'>".$linha[15]."</p>";
          
			
			
			
        }
    }
    else
    {
        echo "<p>Erro ao realizar o cadastro</p>";
    }
}
catch (PDOException $ex)
{
    echo $ex->getMessage();
}


?>