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
    <title>gerenTI - Cadastrar novo usuário</title>
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
                    Cadastrar novo usuário
                    <hr>
                </h1>
            </div>
        </section>
        <section class="container bg-white p-5">
            <form action="../cadastrarusuario.php" method="POST">
                <fieldset>
                    <div class="row align-items-center justify-content-center">
                        <div class="my-2 text-center col-12">
                            <label for="cadastrousuario">Usuário:</label> <span class="text-danger">*</span>
                            <input name="cadastrousuario" id="cadastrousuario" class="form-control inputsenha" type="text" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastroemail">Email:</label> <span class="text-danger">*</span>
                            <input name="cadastroemail" id="cadastroemail" class="form-control inputsenha" type="email" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrosenha">Senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrosenha" id="cadastrosenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrorepitasenha">Repita a senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrorepitasenha" id="cadastrorepitasenha" class="form-control inputsenha" type="password" required>
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
                        <div class="my-2 col-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="cadastroadm" name="cadastroadm">
                                <label class="form-check-label" for="cadastroadm">ADM?</label>
                                <div>
                                    <span class="text-danger">Forneça funções de administrador apenas para usuários confiáveis!</span>
                                </div>
                            </div>
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
        </section>
    </main>
    <?php
    include("../pages_components/footer.php");
    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>