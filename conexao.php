<?php

include "conexao.php";
    $banco = new Notas();

    if(isset($_POST['nota1'])){

        
        //Variaveis para a Avaliação
        $Apresentacao = $_POST['nota1'];
        $Relevancia = $_POST['nota2'];
        $Utilidade = $_POST['nota3'];
        $comentario = $_POST["coment"];
        $area = $_POST['area'];
        $res = $banco->inserirNOTA($Apresentacao, $Relevancia, $Utilidade, $comentario, $area);
    }
    
    if(isset($_POST['nome'])){

        //Váriaveis para o cadastro do Formulario

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];
        $turma = $_POST['turma'];
        $titulo = $_POST['titulo'];
        $resumo = $_POST['resumo'];
        $area = $_POST['area'];

        $res = $banco->inserirALUNO($nome, $matricula, $email, $turma);
        $res = $banco->inserirTRABALHO($titulo, $resumo, $area);
        //$res = $banco->inserirGRUPO();
        //$res = $banco->inserirTURMA($turma);
        //$res = $banco->inserirCURSO($area);
       
        
           
    }
