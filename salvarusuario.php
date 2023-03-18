<?php
include("conexao.php");

switch ($_REQUEST["acao"]) {

    case 'editar';
        $id = $_POST["id"];
        $setor = $_POST["setor"];
        $user = $_POST["user"];
        $email = $_POST["email"];
        $adm = $_POST["adm"];

        if ($adm == true){
            $adm = 1;
        }else{
            $adm = 0;
        }

        $verificacao = "SELECT * FROM usuarios WHERE email = '$email'";
        $verificacao2 = "SELECT * FROM usuarios WHERE user = '$user'";
        $verificacao3 = "SELECT * FROM usuarios WHERE id =" . $_POST["id"];

        $result = $mysqli->query($verificacao);
        $result2 = $mysqli->query($verificacao2);
        $result3 = $mysqli->query($verificacao3);

        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);
        $row3 = $result3->fetch_object();

        if ($row3->email == $email && $row3->user == $user){
            $sql = "UPDATE usuarios SET
                setor='{$setor}',
                adm='{$adm}'
                WHERE 
                id= " . $_REQUEST["id"];

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário editado com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
        }else if ($row3->email == $email){
            $sql = "UPDATE usuarios SET
                setor='{$setor}',
                adm='{$adm}',
                user='{$user}'
                WHERE 
                id= " . $_REQUEST["id"];

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário editado com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
        }else if ($row3->user == $user){
            $sql = "UPDATE usuarios SET
                setor='{$setor}',
                adm='{$adm}',
                email='{$email}'
                WHERE 
                id= " . $_REQUEST["id"];

            $res = $mysqli->query($sql);

            echo "<script>
	        alert('Usuário editado com sucesso!');
	        window.location='pages/index_listadeusuarios.php';
            </script>";
        }else{
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
                    email='{$email}',
                    adm='{$adm}'
                    WHERE 
                    id= " . $_REQUEST["id"];
    
                $res = $mysqli->query($sql);
    
                echo "<script>
                alert('Usuário editado com sucesso!');
                window.location='pages/index_listadeusuarios.php';
                </script>";
            }
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
