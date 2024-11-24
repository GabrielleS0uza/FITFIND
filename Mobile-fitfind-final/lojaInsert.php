<?php
	
		include_once("conexao.php");
		$id_loja=0;
		
			$nome = $_POST["txtNome"];
			$atividade = $_POST["txtAtv"];
			$tel01 = $_POST["txtTelefone1"];
			$tel02 = $_POST["txtTelefone2"];
			$status = $_POST["txtStatus"];
			$email = $_POST["txtEmail"];
			$senha = $_POST["txtSenha"];
			$end = $_POST["txtEnd"];
			$cep = $_POST["txtCep"];
			$bairro = $_POST["txtBairro"];
			$cidade = $_POST["txtCidade"];
			$estado = $_POST["txtEstado"];
			$diretor = $_POST["txtDiretor"];
			$cpf = $_POST["txtCPF"];
			$emailR = $_POST["txtEmailR"];
			$telefoneR = $_POST["txtTelefoneR"];
			
			
try
{
	

	$sql = $conn->prepare("insert into loja 
	(
		atividade_loja, nome_loja, telefone01_loja, telefone02_loja, email_loja, senha_loja, endereco_loja, bairro_loja, cep_loja, cidade_loja, estado_loja, diretor_loja, cpfRepresentante_loja, telefoneRepresentante_loja, emailRepresentante_loja, status_loja
	)
	values
	(
		:atividade_loja, :nome_loja, :telefone01_loja, :telefone02_loja, :email_loja, :senha_loja, :endereco_loja, :bairro_loja, :cep_loja, :cidade_loja, :estado_loja, :diretor_loja, :cpfRepresentante_loja, :telefoneRepresentante_loja, :emailRepresentante_loja, :status_loja
	)");
		
		$sql->execute(array(
			':atividade_loja'=>$atividade, 
			':nome_loja'=>$nome, 
			':telefone01_loja'=>$tel01, 
			':telefone02_loja'=>$tel02, 
			':email_loja'=>$email, 
			':senha_loja'=>$senha, 
			':endereco_loja'=>$end, 
			':bairro_loja'=>$bairro, 
			':cep_loja'=>$cep, 
			':cidade_loja'=>$cidade, 
			':estado_loja'=>$estado, 
			':diretor_loja'=>$diretor, 
			':cpfRepresentante_loja'=>$cpf, 
			':telefoneRepresentante_loja'=>$telefoneR, 
			':emailRepresentante_loja'=>$emailR, 
			':status_loja'=>$status
		));
	
		 if($sql->rowCount() == 1)
    {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p id='IDGerado'>".$conn->lastInsertId()."</p>";
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
	
	