<?php

include_once("conexao.php");

$codigo_loja=$_POST['txtId'];

try
{
    $sql = $conn->query(
        "select * from loja where codigo_loja=".$codigo_loja
    );
    
    //$sql->execute();

    if($sql->rowCount() == 1)
    {
        foreach($sql as $linha)
        {
            echo "<p id='idLoja'>".$linha[0]."</p>";
			echo "<p id='dataLoja'>".$linha[17]."</p>";
            echo "<p id='nomeLoja'>".$linha[2]."</p>";
            echo "<p id='AtvLoja'>".$linha[1]."</p>";
            echo "<p id='telefone1Loja'>".$linha[3]."</p>";
            echo "<p id='telefone2Loja'>".$linha[4]."</p>";
            echo "<p id='statusLoja'>".$linha[16]."</p>";
            echo "<p id='emailLoja'>".$linha[5]."</p>";
			echo "<p id='senhaLoja'>".$linha[6]."</p>";
            echo "<p id='endLoja'>".$linha[7]."</p>";
            echo "<p id='cepLoja'>".$linha[9]."</p>";
            echo "<p id='bairroLoja'>".$linha[8]."</p>";
            echo "<p id='cidadeLoja'>".$linha[10]."</p>";
			echo "<p id='estadoLoja'>".$linha[11]."</p>";
            echo "<p id='diretorLoja'>".$linha[12]."</p>";
            echo "<p id='cpfLoja'>".$linha[13]."</p>";
            echo "<p id='emailRLoja'>".$linha[15]."</p>";
        	echo "<p id='telefoneRloja'>".$linha[14]."</p>";
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