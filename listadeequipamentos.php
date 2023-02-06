<?php

$sql = "SELECT * FROM equipamentos";

$res = $connequip->query($sql);

$qtd = $res->num_rows;

if ($_SESSION['adm'] == 1){
    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered' id='listadeequipamentos'>";
        print "<thead>";
        print "<tr>";
        print "<th class='text-center'>Patrimônio</th>";
        print "<th class='text-center'>Data de registro</th>";
        print "<th class='text-center'>Descrição</th>";
        print "<th class='text-center'>Setor</th>";
        print "<th class='text-center'>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->patrimonio."</td>";
            print "<td>".date('d/m/Y', strtotime($row->dataregistro))."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->setor."</td>";
            print "<td class='acoes'>
                <div class='w-100 h-100 m-0'>
                <button onclick=\"location.href=''; \"class='btn btn-primary btn-acoes d-inline-block'><i class='bi bi-eye'></i></button>
                    <button onclick=\"location.href=''; \"class='btn btn-dark btn-acoes d-inline-block'><i class='bi bi-pencil'></i></button>
                    <button onclick=\"location.href=''; \"class='btn btn-danger btn-acoes d-inline-block'><i class='bi bi-trash'></i></button>
                </div>  
            </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    }

}
?>