<?php
include('../protect.php');
include("../conexaoalertas.php");

if ($_SESSION['adm'] == 1) {
} else {
    echo "<script>
    alert('ERRO! Sem permissão para acessar.');
    window.location='index_home.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Alertas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_cadastrarusuario.css">
    <link rel="stylesheet" href="../_css/datatables_bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
    <link rel="stylesheet" href="../_css/style_chamados1.0.css">
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
                    Lista de alertas
                    <hr>
                </h1>
            </div>
        </section>

        <section class="container">
            <?php
            switch (@$_REQUEST["page"]) {
                case "editar":
                    include("index_editaralerta.php");
                    break;
                case "excluir":
                    include("index_excluiralerta.php");
                    break;
            }
            ?>
        </section>

        <section class="container tabelachamados">
            <?php include("../listadealertas.php") ?>
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
            $('#listadealertas').DataTable();
        });
    </script>
</body>

</html>