<?php	
	
	include_once("conexao.php");

	$codigo_contrato = '';
	$plano_contrato = '';
	$datamensalidade_contrato = '';
	$valor_contrato = '';
	$datacontratacao_contrato = '';
	$datavencimento_contrato = '';
	$status_contrato = '';
	$datacadastro_contrato = '';
	$obs_contrato = '';
		
	try
    {
        if(isset($_GET['idContrato'])){
	
			$sql = $conn->query("select * from contrato where codigo_contrato=".$_GET['idContrato']);

			if($sql->rowCount() == 1)
			{
			   foreach($sql as $linha)
				{
					$codigo_contrato=$linha['codigo_contrato'];

					$datacadastro_contrato = substr($linha['datacadastro_contrato'],0,10);

					$plano_contrato=$linha['plano_contrato'];
					$valor_contrato=$linha['valor_contrato'];
					$status_contrato=$linha['status_contrato'];
					$datacontratacao_contrato=$linha['datacontratacao_contrato'];
					$datavencimento_contrato=$linha['datavencimento_contrato'];
					$datamensalidade_contrato=$linha['datamensalidade_contrato'];
					$obs_contrato=$linha['obs_contrato'];
				} 
			}
		}
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
					
	?>