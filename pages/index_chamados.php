<?php
include('../protect.php');
include("../conexaochamado.php");
include("../conexao.php");
switch (@$_REQUEST["page"]) {
    case "novo":
        header("location: index_novochamado.php");
        break;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Chamados</title>
    <link rel="stylesheet" href="../_css/datatables_bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_chamados1.0.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
</head>

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
                    Chamados
                    <hr>
                </h1>
                <?php
                switch (@$_REQUEST["page"]) {
                    case "editar":
                        include("index_editarchamado.php");
                        break;
                }
                ?>
                <br>
            </div>

            <div class="btn-novo-chamado">
                <a href="?page=novo">
                    <button class="">
                        <i class="bi bi-plus"></i> Novo chamado
                    </button>
                </a>
            </div>
            <br>
        </section>
        <section class="container tabelachamados">
            <?php
            switch (@$_REQUEST["page"]) {
                case "excluir":
                    include("index_excluirchamado.php");
                    break;
            }

            if ($_SESSION['adm'] == 1){
                include("../listadechamadosadm.php");
            }else{
                include("../listadechamados.php");
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