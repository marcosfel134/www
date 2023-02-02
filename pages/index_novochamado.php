<?php

include('../protect.php');
include('../conexao.php');
include('../conexaochamado.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Novo chamado</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_novochamado1_1.css">
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
                    Novo chamado
                    <hr>
                </h1>
            </div>
        </section>
        <section class="container bg-white p-5">
            <form action="../salvarchamado.php" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <fieldset>
                    <div class="row">
                        <div class="my-2 col-12 col-md-6">
                            <label for="usuario">Usuário:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                            <input name="usuario" id="usuario" class="form-control" type="text" required readonly value="<?php echo $_SESSION['email']; ?>">
                        </div>

                        <div class="my-2 col-12 col-md-6">
                            <label for="responsavel">Responsável:</label>
                            <select class="d-block form-select" name="responsavel" id="responsavel">

                                <option selected></option>

                                <option value="Reinaldo Vieira dos Santos">Reinaldo Vieira dos Santos</option>

                                <option value="José Cirilo de Jesus Júnior">José Cirilo de Jesus Júnior</option>

                                <option value="Marcos Felipe Alves Macedo">Marcos Felipe Alves Macedo</option>

                                <option value="Letícia de Almeida Merink">Letícia de Almeida Merink</option>

                                <option value="Outro">Outro</option>

                            </select>
                        </div>

                        <div class="my-2 col-12 col-md-6">
                            <label for="situacao">Situação:</label> <span class="text-danger">*</span>
                            <select required class="d-block form-select" name="situacao" id="situacao">

                                <option selected></option>

                                <option value="Aberto">Aberto</option>

                                <?php
                                if ($_SESSION['adm'] == 1) {
                                    print "<option value='Em andamento'>Em andamento</option>

                                            <option value='Concluído'>Concluído</option>
        
                                            <option value='Cancelado'>Cancelado</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="my-2 col-12 col-md-6">
                            <label for="tipodechamado">Tipo de chamado:</label> <span class="text-danger">*</span>
                            <select required class="d-block form-select" name="tipodechamado" id="tipodechamado">

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
                        
                        <?php
                            if ($_SESSION['adm'] == 1){
                                print '';
                            }
                        ?>

                        <?php
                            if ($_SESSION['adm'] == 0){
                                echo '<div class="my-2 col-12 col-md-6">
                                        <label for="setor">Setor:</label>
                                        <input name="setor" id="setor" class="form-control" type="text" readonly value"'.$_SESSION['email'].'">
                                        </div>';
                            }
                        ?>
                        

                        <div class="my-2 col-12">
                            <label for="descricao">Descrição:</label> <span class="text-danger">*</span>
                            <textarea required class="d-block form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                        </div>

                        <div class="my-2 col-12">
                            <hr>
                        </div>

                        <div class="my-2 col-12 col-md-6">
                            <label for="datareceb">Data de recebimento:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                            <input class="form-control" type="date" name="datareceb" id="datareceb" readonly value="<?php echo date('Y-m-d'); ?>">
                        </div>

                        <?php if ($_SESSION['adm'] == 1) {
                            print "<div class='my-2 col-12 col-md-6'>
                                <label for='patrimonio'>Nº de patrimônio:</label>
                                <input class='form-control' type='text' name='patrimonio' id='patrimonio'>
                            </div>

                            <div class='my-2 col-12'>
                                <label for='solucao'>Solução:</label>
                                <textarea class='d-block form-control' name='solucao' id='solucao' cols='30' rows='10'></textarea>
                            </div>";
                        } ?>

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