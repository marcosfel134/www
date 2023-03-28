<?php
    include("conexaoequipamentos.php");

    switch ($_REQUEST["acao"]){

        case 'editar';
            $setor = $_POST["setor"];
            $descricao = $_POST["descricao"];
            $dataregistro = $_POST["dataregistro"];
            $patrimonionovo = $_POST["patrimonionovo"];

            $sql = "UPDATE equipamentos SET
                setor='{$setor}',
                dataregistro='{$dataregistro}',
                patrimonio='{$patrimonionovo}',
                descricao='{$descricao}'
                WHERE 
                patrimonio= ".$_REQUEST["patrimonio"]; 

            $res = $connequip->query($sql);

            echo "<script>
	        alert('Equipamento editado com sucesso!');
	        window.location='pages/index_listadeequipamentos.php';
            </script>";

            break;

        case 'excluir';
            $sql = "DELETE FROM equipamentos WHERE patrimonio=".$_REQUEST["patrimonio"];

            $res = $connequip->query($sql);

            echo "<script>
	        alert('Equipamento excluído com sucesso!');
	        window.location='pages/index_listadeequipamentos.php';
            </script>";
            break;
    }