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
                    Alertas
                    <hr>
                </h1>
            </div>
        </section>

        <section class="container bg-white p-5">
            <form action="../cadastraralertas.php" method="POST">
                <fieldset>
                    <div class="row justify-content-center align-items-center">
                        <div class="my-2 col-12">
                            <label for="alerta">Alerta:</label> <span class="text-danger">*</span>
                            <textarea required class="form-control" name="alerta" id="alerta" cols="30" rows="10"></textarea>
                        </div>

                        <div class="my-2 col-6">
                            <label for="tipoalerta">Tipo de alerta</label> <span class="text-danger">*</span>
                            <select required class="d-block form-select" name="tipoalerta" id="tipoalerta">

                                <option selected></option>

                                <option value="Vermelho">Vermelho (Grave)</option>

                                <option value="Amarelo">Amarelo (Requer atenção)</option>

                                <option value="Azul">Azul (Sem gravidade, informação)</option>

                            </select>
                        </div>

                        <div class="my-2 col-6">
                            <label for="datareceb">Data de recebimento:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                            <input class="form-control" type="date" name="datareceb" id="datareceb" readonly value="<?php echo date('Y-m-d'); ?>">
                        </div>

                        <div class="my-2 col-12">
                            <button type="submit" class="btn-finalizar w-100">Finalizar</button>
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