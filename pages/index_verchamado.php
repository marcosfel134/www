<?php
include('../protect.php');
include('../conexao.php');
include('../conexaochamado.php');
include('../conexaoequipamentos.php');
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
                    Detalhes do chamado
                    <hr>
                </h1>
        </section>

        <?php
        $sql = "SELECT * FROM chamados WHERE n =" . $_REQUEST["n"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
        ?>

        <section class="container p-5 bg-white">
            <div class="row">
                <div class="my-2 col-12">
                    <label for="situacao">Situação:</label>
                    <br>

                    <?php
                    if ($row->situacao == "Concluído") {
                        print '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 100%">' . $row->situacao . '</div>
                                    </div>';
                    } else if ($row->situacao == "Em andamento") {
                        print '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 66%">' . $row->situacao . '</div>
                                    </div>';
                    } else if ($row->situacao == "Aberto") {
                        print '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-info" style="width: 33%">' . $row->situacao . '</div>
                                    </div>';
                    } else if ($row->situacao == "Cancelado") {
                        print '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 100%">' . $row->situacao . '</div>
                                    </div>';
                    }
                    ?>
                </div>

                <div class="row col-12 col-md-6 px-3">
                    <div class="col-12">
                        <hr>
                        <label for="datareceb">Data de recebimento:</label>
                        <p><?php print date('d/m/Y', strtotime($row->datareceb)) ?></p>

                        <hr>

                        <label for="solucao">Solução:</label>
                        <p><?php print $row->solucao ?></p>

                        <hr>

                        <label for="solucao">Nº de patrimônio:</label>
                        <h3><?php print $row->patrimonio ?></h3>


                        <?php
                        if ($_SESSION['adm'] == 1) {
                            $verificacao = "SELECT * FROM equipamentos WHERE patrimonio = '$row->patrimonio'";
                            $result = $connequip->query($verificacao);
                            $row2 = mysqli_fetch_assoc($result);

                            $verificacao3 = "SELECT * FROM chamados WHERE patrimonio = '$row->patrimonio'";
                            $result3 = $conn->query($verificacao3);
                            $row3 = mysqli_fetch_assoc($result3);

                            if (mysqli_num_rows($result) > 0) {
                                print "Equipamento cadastrado <br>";
                                if (mysqli_num_rows($result3) > 0) {
                                    print "<a href='#'>Ver equipamento e histórico de chamados</a>";
                                }
                            }else{
                                print "Equipamento não cadastrado <br>";
                                print "<a href='index_cadastrarequipamento.php'>Clique para cadastrar</a>";
                            }

                            
                        }
                        ?>
                    </div>
                </div>

                <div class="row col-12 col-md-6 mt-2 mt-md-0">

                    <div class="my-2 col-12">
                        <label for="usuario">Usuário:</label>
                        <input value="<?php print $row->usuario ?>" name="usuario" id="usuario" class="form-control" type="text" readonly>
                    </div>

                    <div class="my-2 col-12">
                        <label for="responsavel">Responsável:</label>
                        <input value="<?php print $row->responsavel ?>" name="responsavel" id="responsavel" class="form-control" type="text" readonly>
                    </div>


                    <div class="my-2 col-12">
                        <label for="usuario">Tipo de chamado:</label>
                        <input value="<?php print $row->tipodechamado ?>" name="usuario" id="usuario" class="form-control" type="text" readonly>
                    </div>

                    <div class="my-2 col-12">
                        <label for="usuario">Setor:</label>
                        <input value="<?php print $row->setor ?>" name="usuario" id="usuario" class="form-control" type="text" readonly>
                    </div>

                    <div class="my-2 col-12">
                        <label for="descricao">Descrição:</label>
                        <textarea required class="d-block form-control" name="descricao" id="descricao" cols="30" rows="10" readonly><?php print $row->descricao ?></textarea>
                    </div>

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