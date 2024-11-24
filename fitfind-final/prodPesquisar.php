<?php
$codigo_produto='';	
$codigo_loja='';
$nome_produto='';
$desc_produto='';
$valor_produto='';
$categoria_produto='';
$tamanho_produto='';
$status_produto='';	
$tipo_produto='';
$obs_produto='';
$img_produto='';		


include_once("conexao.php");

if($_POST)
{
    $id = $_POST['txtID'];

    try
    {
        $sql = $conn->query("select * from produto where codigo_produto = ".$id);
         
		if($sql->rowCount() == 1)
		{
         foreach($sql as $linha)
         {
            
			$codigo_produto=$linha['codigo_produto'];
			$codigo_loja=$linha['codigo_loja'];
			$nome_produto=$linha['nome_produto'];
			$desc_produto=$linha['desc_produto'];
			$valor_produto=$linha['valor_produto'];
			$categoria_produto=$linha['categoria_produto'];
			$tamanho_produto=$linha['tamanho_produto'];
			$status_produto=$linha['status_produto'];
			$tipo_produto=$linha['tipo_produto'];
			$obs_produto=$linha['obs_produto'];
			$img_produto=$linha['img_produto'];
         }
		}
	
		else
		{
			 echo "Produto não existe";
		}
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
}

?>
