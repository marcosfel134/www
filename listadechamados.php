<?php

$sql = "SELECT * FROM chamados";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($_SESSION['adm'] == 1){
    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered' id='listadechamados'>";
        print "<thead>";
        print "<tr>";
        print "<th class='text-center'>ID</th>";
        print "<th class='text-center'>Usuário</th>";
        print "<th class='text-center'>Situação</th>";
        print "<th class='text-center'>Setor</th>";
        print "<th class='text-center'>Tipo de chamado</th>";
        print "<th class='text-center'>Desrição</th>";
        print "<th class='text-center'>Responsável</th>";
        print "<th class='text-center'>Solução</th>";
        print "<th class='text-center'>Patrimônio</th>";
        print "<th class='text-center'>Data</th>";
        print "<th class='text-center'>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->n."</td>";
            print "<td>".$row->usuario."</td>";
            print "<td>".$row->situacao."</td>";
            print "<td>".$row->setor."</td>";
            print "<td>".$row->tipodechamado."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->responsavel."</td>";
            print "<td>".$row->solucao."</td>";
            print "<td>".$row->patrimonio."</td>";
            print "<td>".date('d/m/Y', strtotime($row->datareceb))."</td>";
            print "<td class='acoes'>
                <div class='w-100 h-100 m-0'>
                    <button onclick=\"location.href='index_verchamado.php?&n=".$row->n."';\"class='btn btn-primary btn-acoes d-inline-block'><i class='bi bi-eye'></i></button>
                    <button onclick=\"location.href='?page=editar&n=".$row->n."'; \"class='btn btn-dark btn-acoes d-inline-block'><i class='bi bi-pencil'></i></button>
                    <button onclick=\"location.href='?page=excluir&n=".$row->n."'; \"class='btn btn-danger btn-acoes d-inline-block'><i class='bi bi-trash'></i></button>
                </div>  
            </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    }

}else{
    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered' id='listadechamados'>";
        print "<thead>";
        print "<tr>";
        print "<th class='text-center'>ID</th>";
        print "<th class='text-center'>Usuário</th>";
        print "<th class='text-center'>Situação</th>";
        print "<th class='text-center'>Setor</th>";
        print "<th class='text-center'>Tipo de chamado</th>";
        print "<th class='text-center'>Desrição</th>";
        print "<th class='text-center'>Responsável</th>";
        print "<th class='text-center'>Solução</th>";
        print "<th class='text-center'>Patrimônio</th>";
        print "<th class='text-center'>Data</th>";
        print "<th class='text-center'>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->n."</td>";
            print "<td>".$row->usuario."</td>";
            print "<td>".$row->situacao."</td>";
            print "<td>".$row->setor."</td>";
            print "<td>".$row->tipodechamado."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->responsavel."</td>";
            print "<td>".$row->solucao."</td>";
            print "<td>".$row->patrimonio."</td>";
            print "<td>".date('d/m/Y', strtotime($row->datareceb))."</td>";
            print "<td class='acoes2'>
            <button onclick=\"location.href='index_verchamado.php?&n=".$row->n."'; \"class='btn btn-primary btn-acoes d-inline-block'><i class='bi bi-eye'></i></button>
            </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    }
}
?>
