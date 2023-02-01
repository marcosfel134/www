<?php
include('../protect.php');
include('../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Alterar senha</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_alterarsenha1_1.css">
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
                    Alterar senha
                    <hr>
                </h1>
            </div>
        </section>
        <section class="container bg-white p-5">
            <form action="../alterarsenha.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <fieldset>
                    <div class="row align-items-center justify-content-center">
                        <div class="my-2 text-center col-12">
                            <label for="senhaatual">Senha atual:</label> <span class="text-danger">*</span>
                            <input name="senhaatual" id="senhaatual" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="senhanova">Nova senha:</label> <span class="text-danger">*</span>
                            <input name="senhanova" id="senhanova" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="repitasenha">Repita a nova senha:</label> <span class="text-danger">*</span>
                            <input name="repitasenha" id="repitasenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 col-12">
                            <input type="submit" value="Finalizar" class="form-control btn-finalizar">
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>

    <?php
        include("../pages_components/footer.php");
    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>