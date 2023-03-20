<?php

$sql3 = "SELECT * FROM chamados WHERE usuario =" . $_SESSION['user'];

$res3 = $conn->query($sql3);

$qtd3 = $res3->num_rows;

    if($qtd3 > 0){
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
        while($row = $res3->fetch_object()){
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
