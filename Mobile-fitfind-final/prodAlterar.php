<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php 
	include_once("conexao.php");
	
	if($_POST)
	{   
	
		$id = $_POST['txtID'];
		$idLoja = $_POST['txtIDloja'];
		$nome = $_POST['txtNome'];
		$descricao = $_POST['txtDescricao'];
		$valor = $_POST['txtValor'];
		$tamanho = $_POST['txtTamanho'];
		$status = $_POST['txtStatus'];
		$categoria = $_POST['txtCategoria'];
		$tipo = $_POST['txtTipo'];
		$obs = $_POST['txtObs'];
		$img = "";
        
        if($_FILES["txtImagem"]["tmp_name"]==null)
        {
            $img = $_POST['txtCaminhoImg'];
        }
        else
        {
            if(isset($_FILES['txtImagem']))
            {
                $arquivo = $_FILES['txtImagem'];

            }else{
                echo "Imagem deve ser informada";
                return;
            }
            
            $img = $arquivo["name"];
        }
		
	$sql = $conn->prepare("update produto set

	        codigo_loja = :codigo_loja,
			nome_produto = :nome_produto,
			desc_produto = :desc_produto,
			valor_produto = :valor_produto,
			categoria_produto = :categoria_produto,
			tamanho_produto = :tamanho_produto,
			status_produto = :status_produto,
			tipo_produto = :tipo_produto,
			obs_produto = :obs_produto,
			img_produto = :img_produto
			where codigo_produto = :codigo_produto
			");
		
	
	$sql->execute(array(
	':codigo_produto'=>$id,	
	':codigo_loja'=>$idLoja,
	':nome_produto'=>$nome,
	':desc_produto'=>$descricao,
	':valor_produto'=>$valor,	
	':categoria_produto'=>$categoria,
	':tamanho_produto'=>$tamanho,
	':status_produto'=>$status,	
	':tipo_produto'=>$tipo,
	':obs_produto'=>$obs,
	':img_produto'=>$img			
	));
	
		
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados alterados com sucesso!</p>";
				echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";	
		
		 		if($_FILES["txtImagem"]["tmp_name"]==null)
            	{
                	$img = $_POST['txtCaminhoImg'];
            	}
            else
            {
                $pasta_dir = 'img/'.$id.'/';
                
                // deleta arquivos de uma pasta
                array_map('unlink', glob("$pasta_dir*.*"));

                if(!file_exists($pasta_dir))
                {
                    mkdir($pasta_dir);
                }
                $img = $pasta_dir . $arquivo["name"];
                move_uploaded_file($arquivo["tmp_name"],$img);
            }
	}
		
	}
	else 
	{
		header("Location:produto.php");
	}

	?>
	
	<a href="frm_produto.php" class="btn btn-dark">Voltar</a>
</body>
</html>