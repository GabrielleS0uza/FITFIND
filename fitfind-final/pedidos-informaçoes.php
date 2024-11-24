<?php
	
	include_once("conexao.php");

	try
	{
		$sql = $conn->query("select count(codigo_item) from item where (status_item='Aberto') and codigo_loja =".$lojaLogadoID);

		if($sql->rowCount() == 1)
		{
		   foreach($sql as $linha)
			{
				$quantItensLoja=$linha[0];
			} 
		}
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
?>