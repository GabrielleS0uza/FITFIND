<?php

$codigo_loja='';
$atividade_loja='';
$nome_loja='';
$telefone01_loja='';
$telefone02_loja='';
$email_loja='';
$senha_loja='';
$endereco_loja='';
$bairro_loja='';
$cep_loja='';
$cidade_loja='';
$estado_loja='';
$diretor_loja='';
$cpfRepresentante_loja='';
$telefoneRepresentante_loja='';
$emailRepresentante_loja='';
$status_loja='';



include_once("conexao.php");


    try
    {
        $sql = $conn->query("select * from loja where codigo_loja = ".$lojaLogadoID);
        
        if($sql->rowCount() == 1)
        {
           foreach($sql as $linha)
            {
			   	$codigo_loja=$linha['codigo_loja'];
				$atividade_loja=$linha['atividade_loja'];
				$nome_loja=$linha['nome_loja'];
				$telefone01_loja=$linha['telefone01_loja'];
				$telefone02_loja=$linha['telefone02_loja'];
				$email_loja=$linha['email_loja'];
				$senha_loja=$linha['senha_loja'];
				$endereco_loja=$linha['endereco_loja'];
				$bairro_loja=$linha['bairro_loja'];
				$cep_loja=$linha['cep_loja'];
				$cidade_loja=$linha['cidade_loja'];
				$estado_loja=$linha['estado_loja'];
				$diretor_loja=$linha['diretor_loja'];
				$cpfRepresentante_loja=$linha['cpfRepresentante_loja'];
				$telefoneRepresentante_loja=$linha['telefoneRepresentante_loja'];
				$emailRepresentante_loja=$linha['emailRepresentante_loja'];
				$status_loja=$linha['status_loja'];
			   
			   $datacadastro_loja = substr($linha['datacadastro_loja'],0,10);
                echo("<p id='datacadastro_loja'>".$datacadastro_loja."</p>");
                //echo $cadastro_usuario;

            } 
        }
        else
        {
            echo "erro";
        }
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }


?>
