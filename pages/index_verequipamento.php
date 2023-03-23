<?php
include('../protect.php');
include('../conexao.php');
include('../conexaochamado.php');
include('../conexaoequipamentos.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Detalhes de equipamento</title>
    <link rel="stylesheet" href="../_css/datatables_bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_ajuda1_1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">

<body>
    <?php
    include("../pages_components/header.php");
    ?>

    <main class="pb-5 px-5 pt-2">
        <?php
        include("../pages_components/menu_funcoes.php");
        ?>

        <section class="container">
            <div class="">
                <h1 class="display-4 text-center">
                    Detalhes de equipamento
                    <hr>
                </h1>
        </section>

        <?php
        $sql = "SELECT * FROM equipamentos WHERE patrimonio =" . $_REQUEST["patrimonio"];
        $res = $connequip->query($sql);
        $row = $res->fetch_object();
        ?>

        <section class="container p-5 bg-white">
            <div class="row">
                <label for="patrimonio">Nº de patrimônio registrado:</label>
                <h3><?php print $row->patrimonio ?></h3>

                <hr>

                <label for="dataregistro">Data de registro:</label>
                <p><?php print date('d/m/Y', strtotime($row->dataregistro)) ?></p>

                <hr>

                <label for="solucao">Setor:</label>
                <p><?php print $row->setor ?></p>

                <hr>

                <label for="descricao">Descrição:</label>
                <p><?php print $row->descricao ?></p>

                <hr>
            </div>
        </section>
        <section class="container pb-5 px-5 bg-white">
            <h1 class="display-6">Histórico de chamados desse patrimônio</h1>
            <hr>

            <?php
            $sql2 = "SELECT * FROM chamados WHERE patrimonio =" . $_REQUEST["patrimonio"];
            $res2 = $conn->query($sql2);
            $qtd2 = $res2->num_rows;

            if ($_SESSION['adm'] == 1) {
                if ($qtd2 > 0) {
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
                    while ($row = $res2->fetch_object()) {
                        print "<tr>";
                        print "<td>" . $row->n . "</td>";
                        print "<td>" . $row->usuario . "</td>";
                        print "<td>" . $row->situacao . "</td>";
                        print "<td>" . $row->setor . "</td>";
                        print "<td>" . $row->tipodechamado . "</td>";
                        print "<td>" . $row->descricao . "</td>";
                        print "<td>" . $row->responsavel . "</td>";
                        print "<td>" . $row->solucao . "</td>";
                        print "<td>" . $row->patrimonio . "</td>";
                        print "<td>" . date('d/m/Y', strtotime($row->datareceb)) . "</td>";
                        print "<td class='acoes'>
                                <div class='w-100 h-100 m-0'>
                                    <button onclick=\"location.href='index_verchamado.php?&n=" . $row->n . "';\"class='btn btn-primary btn-acoes d-inline-block'><i class='bi bi-eye'></i></button>
                                </div>  
                            </td>";
                        print "</tr>";
                    }
                    print "</tbody>";
                    print "</table>";
                }
            }
            ?>
        </section>
    </main>

    <?php
    include("../pages_components/footer.php");
    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../_js/jquery-3.5.1.js"></script>
    <script src="../_js/dataTables.bootstrap5.min.js"></script>
    <script src="../_js/jquery.1.0dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#listadechamados').DataTable();
        });
    </script>
</body>

</html>