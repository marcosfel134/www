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
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <strong>SETOR DE T.I INFORMA:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
        }else if ($row->tipoalerta == 'Azul'){
            print '
            <section class="container">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <i class="bi bi-info-circle-fill"></i>
                    <strong>SETOR DE T.I INFORMA:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
        }else if ($row->tipoalerta == 'Amarelo'){
            print '
            <section class="container">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <strong>SETOR DE T.I INFORMA:</strong> '.$row->alerta.' <strong>('.date('d/m/Y', strtotime($row->datareceb)).')</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </section>';
    }
}
}

?>

<!-- <section class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ALERTA! Setor de TI informa:</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</section> -->