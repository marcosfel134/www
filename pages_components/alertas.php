<?php
include("../conexaoalertas.php");

$sql = "SELECT * FROM alertas";

$res = $connealerta->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    while ($row = $res->fetch_object()) {
        if ($row->tipoalerta == 'Vermelho') {
            print '
            <section class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> ALERTA! Setor de TI informa:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
        }else if ($row->tipoalerta == 'Azul'){
            print '
            <section class="container">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>ALERTA! Setor de TI informa:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
        }else if ($row->tipoalerta == 'Amarelo'){
            print '
            <section class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ALERTA! Setor de TI informa:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
    }
}
}


//

// if ($qtd > 0) {
//     print "<table class='table table-hover table-striped table-bordered' id='listadeequipamentos'>";
//     print "<thead>";
//     print "<tr>";
//     print "<th class='text-center'>Alerta</th>";
//     print "<th class='text-center'>Data de registro</th>";
//     print "<th class='text-center'>tipo</th>";
//     print "</tr>";
//     print "</thead>";
//     print "<tbody>";
//     while ($row = $res->fetch_object()) {
//         print "<tr>";
//         print "<td>" . $row->alerta . "</td>";
//         print "<td>" . date('d/m/Y', strtotime($row->datareceb)) . "</td>";
//         print "<td>" . $row->tipoalerta . "</td>";
//         print "</tr>";
//     }
//     print "</tbody>";
//     print "</table>";
// }

?>

<!-- <section class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ALERTA! Setor de TI informa:</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</section> -->