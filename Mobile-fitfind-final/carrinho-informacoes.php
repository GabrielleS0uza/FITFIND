<?php	
	
	include_once("conexao.php");

	$cep_cliente = '';
	$rua_cliente = '';
	$bairro_cliente = '';
	$cidade_cliente = '';
	$estado_cliente = '';

	$valorTotal = 0;

	
	try
    {	
		$sql = $conn->query("select * from item inner join cliente on item.codigo_cliente = cliente.codigo_cliente where codigo_item=".$linha['codigo_item']);

		if($sql->rowCount() == 1)
		{
		   foreach($sql as $linha)
			{
				$cep_cliente=$linha['cep_cliente'];
				$rua_cliente=$linha['rua_cliente'];
				$bairro_cliente=$linha['bairro_cliente'];
				$cidade_cliente=$linha['cidade_cliente'];
				$estado_cliente=$linha['estado_cliente'];
			} 
		}  
		
		$sql2 =  $conn->query("select sum(valortotal_item) from item where (status_item='Andamento') and codigo_cliente = ".$clienteLogadoID);
		
		if($sql2->rowCount() == 1)
		{
		   foreach($sql2 as $linha)
			{
				$valorTotal=$linha[0];
			} 
		} 
		
		$sql3 =  $conn->query("select count(codigo_item) from item where (status_item='Andamento') and codigo_cliente = ".$clienteLogadoID);
		
		if($sql3->rowCount() == 1)
		{
		   foreach($sql3 as $linha)
			{
			   	$quantItens=$linha[0];
			} 
		} 
		$sql4 =  $conn->query("select sum(qtd_item) from item where (status_item='Andamento') and codigo_cliente = ".$clienteLogadoID);
		
		if($sql4->rowCount() == 1)
		{
		   foreach($sql4 as $linha)
			{
			   	$quantProduto=$linha[0];
			} 
		} 
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
					
	?>