<?php 
include ("conexaoequipamentos.php");

    $cadastropatrimonio = $_POST["cadastropatrimonio"];
    $cadastrodataregistro = $_POST["cadastrodataregistro"];
    $cadastrosetor = $_POST["cadastrosetor"];
    $cadastrodescricao = $_POST["cadastrodescricao"];

    $verificacao = "SELECT * FROM equipamentos WHERE patrimonio = '$cadastropatrimonio'";

    $result = $connequip->query($verificacao);

    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        echo "<script>
        alert('ERRO! Esse patrimônio já está cadastrado!');
        window.location='pages/index_cadastrarequipamento.php';
        </script>";
    }else{
        $sql = "INSERT INTO equipamentos (patrimonio, dataregistro, descricao, setor) 
        VALUES ('{$cadastropatrimonio}', '{$cadastrodataregistro}', '{$cadastrodescricao}', '{$cadastrosetor}')";
    
        $res = $connequip->query($sql);
    
        echo "<script>
            alert('Equipamento cadastrado com sucesso.');
            window.location='pages/index_cadastrarusuario.php';
            </script>";
    }   
?>