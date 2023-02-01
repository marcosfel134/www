<?php 
include ("conexao.php");

    $cadastrousuario = $_POST["cadastrousuario"];
    $cadastrosenha = $_POST["cadastrosenha"];
    $cadastrorepitasenha = $_POST["cadastrorepitasenha"];

    $verificacao = "SELECT * FROM usuarios WHERE email = '$cadastrousuario'";
    $result = $mysqli->query($verificacao);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        echo "<script>
        alert('ERRO! Esse usuário já existe!');
        window.location='pages/index_cadastrarusuario.php';
        </script>";
    }else{
        if ($cadastrosenha == $cadastrorepitasenha){
            $sql = "INSERT INTO usuarios (email, senha) 
            VALUES ('{$cadastrousuario}', '{$cadastrosenha}')";
    
            $res = $mysqli->query($sql);
    
            echo "<script>
                alert('Usuário cadastrado com sucesso.');
                window.location='pages/index_cadastrarusuario.php';
                </script>";
        }else{
            echo "<script>
                alert('ERRO! As senhas inseridas não são iguais.');
                window.location='pages/index_cadastrarusuario.php';
                </script>";
        }
    }
?>