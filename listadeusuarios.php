<?php

$sql = "SELECT * FROM usuarios";

$res = $mysqli->query($sql);

$qtd = $res->num_rows;

if ($_SESSION['adm'] == 1){
    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered' id='listadeusuarios'>";
        print "<thead>";
        print "<tr>";
        print "<th class='text-center'>ID</th>";
        print "<th class='text-center'>Usuário</th>";
        print "<th class='text-center'>Email</th>";
        print "<th class='text-center'>Senha</th>";
        print "<th class='text-center'>Setor</th>";
        print "<th class='text-center'>ADM</th>";
        print "<th class='text-center'>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->user."</td>";
            print "<td>".$row->email."</td>";
            print "<td>*******</td>";
            print "<td>".$row->setor."</td>";
            print "<td>".$row->adm."</td>";
            print "<td class='acoes'>
                <div class='w-100 h-100 m-0'>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'; \"class='btn btn-dark btn-acoes d-inline-block'><i class='bi bi-pencil'></i></button>
                    <button onclick=\"location.href='?page=excluir&id=".$row->id."'; \"class='btn btn-danger btn-acoes d-inline-block'><i class='bi bi-trash'></i></button>
                </div>  
            </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    }

}
?>
