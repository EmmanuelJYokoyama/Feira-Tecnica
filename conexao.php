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
	
	function inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario){
		$comando = "insert into avaliacao (notaApresentacao, notaRelevancia, notaUtilidade, comentario) values (".$Apresentacao.", ".$Relevancia.", ".$Utilidade.", '".$comentario."');";
		$result = mysqli_query($this->con, $comando);


		return 1;
		
	}  

	//function inserirGRUPO($nomeCAP, $)
	

	function inserirALUNO($nome, $matriculaCAP, $emailCAP, $turma){
		$comando = "insert into aluno (nome, matricula, email, Turma_Turma) values ('".$nome."', '".$matriculaCAP."', '".$emailCAP."', '".$turma."');";   
		$result = mysqli_query($this->con, $comando);

	}

	
	function inserirTRABALHO($titulo, $resumo, $area){
		$comando = "insert into trabalho (titulo, resumo, areaConhecimento_idareaConhecimento) values ('".$titulo."', '".$resumo."', '".$area."');";
		$result = mysqli_query($this->con, $comando);
	}

		
		
	}
		
?>
