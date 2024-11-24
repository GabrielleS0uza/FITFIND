// JavaScript Document

$(function(){
	console.log("Entrou no JS");
	
	debuga = $("#resposta");
	enviar = $("#FRM_item");
	action = "";
	
	function carregando(datas){
		debuga.empty().html("Carregando...");
	};
	
	function sucesso(datas){
		debuga.empty().html(datas);
		$("#txtId").val($("#IDGerado").text());
	};
	
	function errosend(datas){
		debuga.empty().html("Erro ao enviar");
	};
	
	enviar.submit(function(){
		return false;		
	});
	
	$.ajaxSetup({
		type:			'POST',
		bereforeSend:	carregando,
		error:			errosend,
		success:		sucesso
	});
	
	$("#btnCadastro").click (function(){
		console.log("Cliquei no btn Cadastro");
		
		var tamanho = document.getElementById('txtTamanho');
		
		action = 'item_cadastrar.php';

		
		$.ajax({
			url: action,
			data:{
				txtIdCliente: $('#txtIdCliente').val(),
				txtIdLoja: $('#txtIdLoja').val(),
				txtIdProduto: $('#txtIdProduto').val(),
				txtQuant: $('#txtQuant').val(),
				txtValor: $('#txtValor').val(),
				txtTamanho: $(":checked").val(),
				calculo: $('#calculo').val()
			}
		});
		
		alert("Produto adicionado!");

	});
})





