<?php
include("conexao.php");

switch ($_REQUEST["acao"]) {

    case 'editar';
        $setor = $_POST["setor"];
        $user = $_POST["user"];
        $email = $_POST["email"];

        $verificacao = "SELECT * FROM usuarios WHERE email = '$email'";
        $verificacao2 = "SELECT * FROM usuarios WHERE user = '$user'";

        $result = $mysqli->query($verificacao);
        $result2 = $mysqli->query($verificacao2);

        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);

        if (mysqli_num_rows($result2) > 0) {
            echo "<script>
            alert('ERRO! Esse usuário já existe!');
            window.location='pages/index_listadeusuarios.php';
            </script>";
        } else if (mysqli_num_rows($result) > 0) {
            echo "<script>
            alert('ERRO! Esse email já está cadastrado!');
            window.location='pages/index_listadeusuarios.php';
            </script>";
        } else {
            $sql = "UPDATE usuarios SET
                setor='{$setor}',
                user='{$user}',
                email='{$email}'
                WHERE 
                id= " . $_REQUEST["id"];

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário editado com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
        }

        break;

    case 'excluir';
        $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

        $res = $mysqli->query($sql);

        echo "<script>
	        alert('Usuário excluído com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
        break;
}
