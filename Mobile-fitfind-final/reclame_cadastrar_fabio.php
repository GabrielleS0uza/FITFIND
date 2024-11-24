<?php

	include_once("conexao.php");

	if($_POST)
	{
		$idLoja = $_POST["txtIdLoja"];
		$tipo = $_POST["txtTipo"];
		$tela = $_POST["txtTela"];
		$mensagem = $_POST["txtMeng"];

		$sql = $conn->prepare("insert into reclamacaoloja
		(
			codigo_loja, tipo_reclame, tela_reclame, mensagem_reclame
		)
		values
		(
			:codigo_loja, :tipo_reclame, :tela_reclame, :mensagem_reclame
		)");

		$sql->execute(array(
			':codigo_loja'=>$idLoja,
			':tipo_reclame'=>$tipo, 
			':tela_reclame'=>$tela, 
			':mensagem_reclame'=>$mensagem
		));

		if($sql->rowCount()==1)
		{
			echo("<p>Dados cadastrados com sucesso</p>");
			echo("<p>ID Gerado - ".$conn->lastInsertId()."</p>");
		}
	}
	else
	{
		header("localhost:frm_reclame.php");		
	}

?>