<?php 
include ("conexao.php");

    $cadastrousuario = $_POST["cadastrousuario"];
    $cadastrosenha = $_POST["cadastrosenha"];
    $cadastrorepitasenha = $_POST["cadastrorepitasenha"];
    $cadastrosetor = $_POST["cadastrosetor"];
    $cadastroemail = $_POST["cadastroemail"];

    $verificacao = "SELECT * FROM usuarios WHERE email = '$cadastroemail'";
    $verificacao2 = "SELECT * FROM usuarios WHERE user = '$cadastrousuario'";

    $result = $mysqli->query($verificacao);
    $result2 = $mysqli->query($verificacao2);

    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);

    if(mysqli_num_rows($result2) > 0){
        echo "<script>
        alert('ERRO! Esse usuário já existe!');
        window.location='pages/index_cadastrarusuario.php';
        </script>";
    }else if (mysqli_num_rows($result) > 0){
        echo "<script>
        alert('ERRO! Esse email já está cadastrado!');
        window.location='pages/index_cadastrarusuario.php';
        </script>";
    }else{
        if ($cadastrosenha == $cadastrorepitasenha){
            $sql = "INSERT INTO usuarios (user, email, senha, setor) 
            VALUES ('{$cadastrousuario}', '{$cadastroemail}', '{$cadastrosenha}', '{$cadastrosetor}')";
    
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