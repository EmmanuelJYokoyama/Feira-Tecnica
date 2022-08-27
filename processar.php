<?php

include "conexao.php";
	$banco = new Notas();

	if(isset($_POST['nota1'])){
		//Variaveis para a Avaliação
		$Apresentacao = $_POST['nota1'];
		$Relevancia = $_POST['nota2'];
		$Utilidade = $_POST['nota3'];
		$comentario = $_POST["coment"];
		$res = $banco->inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario);
	}
	
	if(isset($_POST['nome'])){
		//Váriaveis para o cadastro do Formulario
		$nome = $_POST['nome'];
		$arraynome = explode(",", $_POST['nome']);
		$matriculaCAP = $_POST['matricula'];
		$turma = $_POST['turma'];
		$emailCAP = $_POST['email'];
		$titulo = $_POST['titulo'];
		$resumo = $_POST['resumo'];
		$area = $_POST['area'];
		$res = $banco->inserirALUNO($nome, $matriculaCAP, $emailCAP, $turma);
		$res = $banco->inserirTRABALHO($titulo, $resumo, $area);
		//$res = $banco->inserirGRUPO();
		//$res = $banco->inserirTURMA($turma);
		//$res = $banco->inserirCURSO($area);
		for ($i=0; $i<count($arraynome); $i++)
		{
			$nome = $arraynome[$i];
			echo count($arraynome);
		}
		
		
		
	}
	

	
	
	
	
	



	
	
