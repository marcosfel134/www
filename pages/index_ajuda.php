<?php
include('../protect.php');
include('../conexao.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Ajuda</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_ajuda1_0.css">
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
                    Ajuda
                    <hr>
                </h1>
        </section>
        <section class="container text-center">Em breve!</section>
    </main>

    <?php
        include("../pages_components/footer.php");
    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>