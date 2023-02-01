<?php

include('conexao.php');

    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $mysqli->query($sql);
    $row = $res->fetch_object();

    $senhaatual = $_POST["senhaatual"];
    $senhanova = $_POST["senhanova"];
    $repitasenha = $_POST["repitasenha"];

    if ($senhaatual == $row->senha){
        if ($senhanova == $repitasenha) {
            $sql = "UPDATE usuarios SET 
            senha='{$senhanova}'
            WHERE
            id=".$_REQUEST["id"];
    
        $res = $mysqli->query($sql);
    
        echo "<script>
	        alert('Senha alterada com sucesso!');
	        window.location='pages/index_home.php';
            </script>";
        }else{
            echo "<script>
	        alert('ERRO! A senha nova não foi repetida corretamente!');
	        window.location='pages/index_alterarsenha.php';
            </script>";
        }
    }else{
         // header('location: pages/index_alterarsenha.php');
         echo "<script>
	        alert('ERRO! A senha atual não foi digitada corretamente!');
	        window.location='pages/index_alterarsenha.php';
            </script>";
    }
?>