<?php
    include("conexaochamado.php");

    switch ($_REQUEST["acao"]){
        case 'cadastrar';
            $setor = $_POST["setor"];
            $responsavel = $_POST["responsavel"];
            $situacao = $_POST["situacao"];
            $tipodechamado = $_POST["tipodechamado"];
            $usuario = $_POST["usuario"];
            $descricao = $_POST["descricao"];
            $datareceb = $_POST["datareceb"];
            $patrimonio = $_POST["patrimonio"];
            $solucao = $_POST["solucao"];

            $sql = "INSERT INTO chamados (setor, responsavel, situacao, tipodechamado, usuario, descricao, datareceb, patrimonio, solucao) 
            VALUES ('{$setor}', '{$responsavel}', '{$situacao}', '{$tipodechamado}', '{$usuario}', '{$descricao}', '{$datareceb}', '{$patrimonio}', 
            '{$solucao}')";

            $res = $conn->query($sql);
            
            echo "<script>
	        alert('Chamado criado com sucesso!');
	        window.location='pages/index_chamados.php';
            </script>";

            break;

        case 'editar';
            $setor = $_POST["setor"];
            $responsavel = $_POST["responsavel"];
            $situacao = $_POST["situacao"];
            $tipodechamado = $_POST["tipodechamado"];
            $usuario = $_POST["usuario"];
            $descricao = $_POST["descricao"];
            $datareceb = $_POST["datareceb"];
            $patrimonio = $_POST["patrimonio"];
            $solucao = $_POST["solucao"];

            $sql = "UPDATE chamados SET
                setor='{$setor}',
                responsavel='{$responsavel}',
                situacao='{$situacao}',
                tipodechamado='{$tipodechamado}',
                usuario='{$usuario}',
                datareceb='{$datareceb}',
                patrimonio='{$patrimonio}',
                solucao='{$solucao}',
                descricao='{$descricao}'
                WHERE 
                n= ".$_REQUEST["n"]; 

            $res = $conn->query($sql);

            echo "<script>
	        alert('Chamado editado com sucesso!');
	        window.location='pages/index_chamados.php';
            </script>";

            break;

        case 'excluir';
            $sql = "DELETE FROM chamados WHERE n=".$_REQUEST["n"];

            $res = $conn->query($sql);

            echo "<script>
	        alert('Chamado excluído com sucesso!');
	        window.location='pages/index_chamados.php';
            </script>";
            break;
    }