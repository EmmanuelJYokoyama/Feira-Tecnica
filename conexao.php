<?php
class Notas{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $dbname = "mydb";
	private $con = null;

	function __construct(){	
			$this->con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);
	}
	
	function inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario, $titulo){
		$comando = "insert into avaliacao (notaApresentacao, notaRelevancia, notaUtilidade, comentario) values (".$Apresentacao.", ".$Relevancia.", ".$Utilidade.", '".$comentario."');";
		$result = mysqli_query($this->con, $comando);
		

		
	}  

	//function inserirGRUPO($nomeCAP, $)
	

	function inserirALUNO($nome, $matricula, $email, $turma){
		$comando = "insert into aluno (nome, matricula, email, Turma_Turma) values ('".$nome."', '".$matricula."', '".$email."', '".$turma."');";   
		$result = mysqli_query($this->con, $comando);

	}

	
	function inserirTRABALHO($titulo, $resumo, $area){
		$comando = "insert into trabalho (titulo, resumo, areaConhecimento_idareaConhecimento) values ('".$titulo."', '".$resumo."', '".$area."');";
		$result = mysqli_query($this->con, $comando);
	}

	function inserirGRUPO($matricula,  $titulo){
		$comando = "select idAluno from aluno where matricula = '$matricula'";
		$result = mysqli_query($this->con, $comando);
		
		while($linha = $result->fetch_object()){
			$idCAP = $linha->idAluno;	
		}
		$comando = "select idTrabalho from trabalho where titulo = '$titulo'";
		$result = mysqli_query($this->con, $comando);
		while($coluna = $result->fetch_object()){
			$idTitulo = $coluna->idTrabalho;
		}
		
		$comando = "insert into grupo values ('".$idTitulo."', '".$idCAP."');";
		$result = mysqli_query($this->con, $comando);

	}
	
		
		
	}
		
?>
