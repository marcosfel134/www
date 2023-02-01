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
                            <label for="cadastrosenha">Senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrosenha" id="cadastrosenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrorepitasenha">Repita a senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrorepitasenha" id="cadastrorepitasenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="tipodechamado">Tipo de chamado:</label> <span class="text-danger">*</span>
                            <select required class="d-block form-select inputsenha" name="tipodechamado" id="tipodechamado">
                                <option selected></option>
                                <option value="Aquisição de equipamento">Aquisição de equipamento</option>
                                <option value="Criação de email">Criação de email</option>
                                <option value="Criação de usuário">Criação de usuário</option>
                                <option value="Elétrica">Elétrica</option>
                                <option value="Infra de redes">Infra de redes</option>
                                <option value="Manutenção em hardware">Manutenção em hardware</option>
                                <option value="Manutenção de software">Manutenção de software</option>
                                <option value="Manutenção em conexão de internet">Manutenção em conexão de internet</option>
                                <option value="Manutenção em linha telefônica">Manutenção em linha telefônica</option>
                                <option value="Manutenção em impressora">Manutenção em impressora</option>
                                <option value="Suporte ao usuário (remoto ou presencial)">Suporte ao usuário (remoto ou presencial)</option>
                                <option value="Telefonia">Telefonia</option>
                                <option value="Outros">Outros</option>
                            </select>
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