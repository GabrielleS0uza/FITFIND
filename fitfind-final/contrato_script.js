// JavaScript Document

$(function(){
	console.log("Entrou no JS");
	
	debuga = $("#resposta");
	enviar = $("#FRM_contrato");
	action = "";
	
	function carregando(datas){
		debuga.empty().html("Carregando...");
	};
	
	function sucesso(datas){
		debuga.empty().html(datas);
		$("#txtId").val($("#IDGerado").text());
	};
	
	function errosend(datas){
		debuga.empty().html("Erro ao enviar os dados");
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
	
	$("#btnCadastro").click(function(){
		console.log("Cliquei no Cadastrar");
		
		action = 'contrato_cadastrar.php';
		
		$.ajax({
			url: action,
			data:{
				txtIdLoja: $('#txtIdLoja').val(),
				txtPlano: $('#txtPlano').val(),
				txtValor: $('#txtValor').val(),
				txtStatus: $('#txtStatus').val(),
				txtDataC: $('#txtDataC').val(),
				txtDataV: $('#txtDataV').val(),
				txtPag: $('#txtPag').val(),
				txtObs: $('#txtObs').val(),
			}
		});
	});
})















