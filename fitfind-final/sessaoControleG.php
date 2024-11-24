<?php
	
	if($_GET && isset($_GET['tela']))
	{
		if($_SESSION['tipo'] == "cliente")
		{
			if($_SESSION && isset($_SESSION['clienteSistemaID']) && isset($_SESSION['clienteSistemaNome']) && isset($_SESSION['clienteSistemaLogin']))
			{
				$clienteLogadoID = $_SESSION['clienteSistemaID'];
				$clienteLogadoLogin = $_SESSION['clienteSistemaLogin'];
				$clienteLogadoNome = $_SESSION['clienteSistemaNome']; 
			}
			else
			{
				header('Location:login.php');
			}
		}
		else if($_SESSION['tipo'] == "parceiro")
		{
			if($_SESSION && isset($_SESSION['lojaSistemaID']) && isset($_SESSION['lojaSistemaNome']) && isset($_SESSION['lojaSistemaLogin']))
			{
				$lojaLogadoID = $_SESSION['lojaSistemaID'];
				$lojaLogadoLogin = $_SESSION['lojaSistemaLogin'];
				$lojaLogadoNome = $_SESSION['lojaSistemaNome']; 
			}
			else
			{
				header('Location:login.php');
			}

		}
		else
		{
			header('Location:login.php');
		}
	}
?>