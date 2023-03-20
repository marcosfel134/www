<?php
    include("conexaoalertas.php");

    switch ($_REQUEST["acao"]){

        case 'editar';
            $tipoalerta = $_POST["tipoalerta"];
            $alerta = $_POST["alerta"];
            $datareceb = $_POST["datareceb"];

            $sql = "UPDATE alertas SET
                tipoalerta='{$tipoalerta}',
                datareceb='{$datareceb}',
                alerta='{$alerta}'
                WHERE 
                id= ".$_REQUEST["id"]; 

            $res = $connealerta->query($sql);

            echo "<script>
	        alert('Alerta editado com sucesso!');
	        window.location='pages/index_alertas.php';
            </script>";

            break;

        case 'excluir';
            $sql = "DELETE FROM alertas WHERE id=".$_REQUEST["id"];

            $res = $connealerta->query($sql);

            echo "<script>
	        alert('Alerta excluído com sucesso!');
	        window.location='pages/index_alertas.php';
            </script>";
            break;
}