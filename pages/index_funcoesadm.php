<?php
include('../protect.php');
include('../conexao.php');

if ($_SESSION['adm'] == 1) {
} else {
    echo "<script>
    alert('ERRO! Sem permissão para acessar.');
    window.location='index_home.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Ajuda</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_funcoesadm1_0_0.css">
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
                    Funções administrativas
                    <hr>
                </h1>
        </section>
        <section class="container">
            <div class="row">
                <div class="my-2 col-12">
                    <a href="index_cadastrarusuario.php"><button class="btn-cadastrar w-100">Cadastrar novo usuário</button></a>
                </div>
                <div class="my-2 col-12">
                    <a href="#"><button class="btn-cadastrar w-100">Cadastrar equipamento</button></a>
                </div>
            </div>
        </section>
    </main>

    <?php
        include("../pages_components/footer.php");
    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>