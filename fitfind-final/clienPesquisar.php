<?php
$codigo_cliente='';
$nome_cliente='';
$cpf_cliente='';	
$genero_cliente='';
$nascimento_cliente='';
$rua_cliente='';
$bairro_cliente='';
$cidade_cliente='';
$estado_cliente='';
$cep_cliente='';
$datacadastro_cliente='';
$obs_cliente='';
$status_cliente='';		
$email_cliente='';
$telefone_cliente='';	



include_once("conexao.php");

if($_POST)
{
    $id = $_POST['txtID'];

    try
    {
        $sql = $conn->query("select * from cliente where codigo_cliente = ".$id);

        foreach($sql as $linha)
        {
            $codigo_cliente=$linha['codigo_cliente'];
			$nome_cliente=$linha['nome_cliente'];
			$cpf_cliente=$linha['cpf_cliente'];
			$genero_cliente=$linha['genero_cliente'];
			$nascimento_cliente=$linha['nascimento_cliente'];
			$rua_cliente=$linha['rua_cliente'];
			$bairro_cliente=$linha['bairro_cliente'];
			$cidade_cliente=$linha['cidade_cliente'];
			$estado_cliente=$linha['estado_cliente'];
			$cep_cliente=$linha['cep_cliente'];
			$datacadastro_cliente=$linha['datacadastro_cliente'];
			$datacadastro_cliente= substr($datacadastro_cliente,0,10);
			$obs_cliente=$linha['obs_cliente'];
			$status_cliente=$linha['status_cliente'];
			$email_cliente=$linha['email_cliente'];
			$telefone_cliente=$linha['telefone_cliente'];
		
        }    
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
}

?>






