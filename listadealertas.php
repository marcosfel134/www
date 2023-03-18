<?php

include("../conexaoalertas.php");

$sql = "SELECT * FROM alertas";

$res = $connealerta->query($sql);

$qtd = $res->num_rows;

            if ($qtd > 0) {
                print "<table class='table table-hover table-striped table-bordered' id='listadealertas'>";
                print "<thead>";
                print "<tr>";
                print "<th class='text-center'>Alerta</th>";
                print "<th class='text-center'>Tipo de alerta</th>";
                print "<th class='text-center'>Data de registro</th>";
                print "<th class='text-center'>Ações</th>";
                print "</tr>";
                print "</thead>";
                print "<tbody>";
                while ($row = $res->fetch_object()) {
                    print "<tr>";
                    print "<td>" . $row->alerta . "</td>";
                    print "<td>" . $row->tipoalerta . "</td>";
                    print "<td>" . date('d/m/Y', strtotime($row->datareceb)) . "</td>";
                    print "<td class='acoes'>
                    <div class='w-100 h-100 m-0'>
                    <button onclick=\"location.href='?page=editar&patrimonio=" . $row->id . "'; \"class='btn btn-dark btn-acoes d-inline-block'><i class='bi bi-pencil'></i></button>
                    <button onclick=\"location.href='?page=excluir&patrimonio=" . $row->id . "'; \"class='btn btn-danger btn-acoes d-inline-block'><i class='bi bi-trash'></i></button>
                    </div>  
                    </td>";
                    print "</tr>";
                }
                print "</tbody>";
                print "</table>";
            }
?>