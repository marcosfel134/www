<?php
    include("conexao.php");

    switch ($_REQUEST["acao"]){

        case 'editar';
            $setor = $_POST["setor"];
            $user = $_POST["user"];
            $email = $_POST["email"];

            $sql = "UPDATE usuarios SET
                setor='{$setor}',
                user='{$user}',
                email='{$email}'
                WHERE 
                id= ".$_REQUEST["id"]; 

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário editado com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";

            break;

        case 'excluir';
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário excluído com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
            break;
    }