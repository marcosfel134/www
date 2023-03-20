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
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Cadastrar equipamento</title>
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
                    Cadastrar equipamento
                    <hr>
                </h1>
            </div>
        </section>
        <!-- <section class="container bg-white p-5">
            <form action="../cadastrarequipamento.php" method="POST">
                <fieldset>
                    <div class="row align-items-center justify-content-center">
                        <div class="my-2 text-center col-12">
                            <label for="cadastropatrimonio">Patrimônio:</label> <span class="text-danger">*</span>
                            <input name="cadastropatrimonio" id="cadastropatrimonio" class="form-control inputsenha" type="text" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrodataregistro">Data de registro:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                            <input name="cadastrodataregistro" id="cadastrodataregistro" class="form-control inputsenha" type="date" value="<?php echo date('Y-m-d'); ?>" required readonly>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrodescricao">Descrição:</label> <span class="text-danger">*</span>
                            <textarea required class="d-block form-control inputsenha" name="cadastrodescricao" id="cadastrodescricao" cols="30" rows="10"></textarea>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrosetor">Setor:</label> <span class="text-danger">*</span>
                            <select required class="d-block form-select inputsenha" name="cadastrosetor" id="cadastrosetor">
                                <option selected></option>
                                <option value="Gabinete do Prefeito">Gabinete do Prefeito</option>
                                <option value="Controladoria Geral">Controladoria Geral</option>
                                <option value="Procuradoria-Geral">Procuradoria-Geral</option>
                                <option value="Secretaria Municipal de Planejamento e Governo">Secretaria Municipal de Planejamento e Governo</option>
                                <option value="Secretaria Municipal de Defesa do Cidadão">Secretaria Municipal de Defesa do Cidadão</option>
                                <option value="Secretaria Municipal de Administração">Secretaria Municipal de Administração</option>
                                <option value="Secretaria Municipal de Fazenda">Secretaria Municipal de Fazenda</option>
                                <option value="Secretaria Municipal de Saúde">Secretaria Municipal de Saúde</option>
                                <option value="Secretaria Municipal de Educação">Secretaria Municipal de Educação</option>
                                <option value="Secretaria Municipal de Esporte e Lazer">Secretaria Municipal de Esporte e Lazer</option>
                                <option value="Secretaria Municipal de Cultura">Secretaria Municipal de Cultura</option>
                                <option value="Secretaria Municipal de Turismo">Secretaria Municipal de Turismo</option>
                                <option value="Secretaria Municipal de Indústria e Comércio">Secretaria Municipal de Indústria e Comércio</option>
                                <option value="Secretaria Municipal de Segurança Pública e Trânsito">Secretaria Municipal de Segurança Pública e Trânsito</option>
                                <option value="Secretaria Municipal de Obras e Urbanismo">Secretaria Municipal de Obras e Urbanismo</option>
                                <option value="Secretaria Municipal de Meio Ambiente e Serviços Públicos">Secretaria Municipal de Meio Ambiente e Serviços Públicos</option>
                                <option value="Secretaria Municipal de Assistência Social e da Mulher">Secretaria Municipal de Assistência Social e da Mulher</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <div class="my-2 col-12">
                            <input type="submit" value="Finalizar" class="form-control btn-finalizar">
                        </div>
                        <div class="my-2 col-12">
                            <input type="reset" value="Redefinir" class="form-control btn-redefinir">
                        </div>
                    </div>
                </fieldset>
            </form>
        </section> -->
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