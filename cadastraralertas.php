<?php 
include ("conexaoalertas.php");

    $alerta = $_POST["alerta"];
    $tipoalerta = $_POST["tipoalerta"];
    $data = $_POST["datareceb"];

    $sql = "INSERT INTO alertas (alerta, tipoalerta, datareceb) 
    VALUES ('{$alerta}', '{$tipoalerta}', '{$data}')";

    $res = $connealerta->query($sql);

    echo "<script>
        alert('Alerta criado com sucesso.');
        window.location='pages/index_alertas.php';
        </script>";
?>