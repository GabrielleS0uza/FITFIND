<?php

include_once("conexao.php");

$codigo_loja=$_POST['txtId'];
$atividade_loja=$_POST['txtAtv'];
$nome_loja=$_POST['txtNome'];
$telefone01_loja=$_POST['txtTelefone1'];
$telefone02_loja=$_POST['txtTelefone2'];
$email_loja=$_POST['txtEmail'];
$senha_loja=$_POST['txtSenha'];
$endereco_loja=$_POST['txtEnd'];
$bairro_loja=$_POST['txtBairro'];
$cep_loja=$_POST['txtCep'];
$cidade_loja=$_POST['txtCidade'];
$estado_loja=$_POST['txtEstado'];
$diretor_loja=$_POST['txtDiretor'];
$cpfRepresentante_loja=$_POST['txtCPF'];
$telefoneRepresentante_loja=$_POST['txtTelefoneR'];
$emailRepresentante_loja=$_POST['txtEmailR'];
$status_loja=$_POST['txtStatus'];


try
{
    $sql = $conn->prepare(
        "update loja set
            atividade_loja=:atividade_loja,
            nome_loja=:nome_loja,
            telefone01_loja=:telefone01_loja,
            telefone02_loja=:telefone02_loja,
            email_loja=:email_loja,
			senha_loja=:senha_loja,
            endereco_loja=:endereco_loja,
            bairro_loja=:bairro_loja,
			cep_loja=:cep_loja,
            cidade_loja=:cidade_loja,
            estado_loja=:estado_loja,
			diretor_loja=:diretor_loja,
            cpfRepresentante_loja=:cpfRepresentante_loja,
            telefoneRepresentante_loja=:telefoneRepresentante_loja,
			emailRepresentante_loja=:emailRepresentante_loja,
            status_loja=:status_loja
        where
            codigo_loja=:codigo_loja"
    );
    
    $sql->execute(array(
        ':codigo_loja' => $codigo_loja,
        ':atividade_loja' => $atividade_loja,
		':nome_loja' => $nome_loja,
        ':telefone01_loja' => $telefone01_loja,
        ':telefone02_loja' => $telefone02_loja,
        ':email_loja' => $email_loja,
        ':senha_loja' => $senha_loja,
		':endereco_loja' => $endereco_loja,
		':bairro_loja' => $bairro_loja,
        ':cep_loja' => $cep_loja,
		':cidade_loja' => $cidade_loja,
        ':estado_loja' => $estado_loja,
		':diretor_loja' => $diretor_loja,
        ':cpfRepresentante_loja' => $cpfRepresentante_loja,
		':telefoneRepresentante_loja' => $telefoneRepresentante_loja,
        ':emailRepresentante_loja' => $emailRepresentante_loja,
		':status_loja' => $status_loja
    ));

    if($sql->rowCount() == 1)
    {
        echo "<p>Dados alterados com sucesso</p>";
        echo "<p id='IDGerado'>".$codigo_loja."</p>";
    }
    else
    {
        echo "<p>Erro ao realizar a alteração</p>";
    }
}
catch (PDOException $ex)
{
    echo $ex->getMessage();
}


?>