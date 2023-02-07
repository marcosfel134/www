<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_editarchamado.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="">
    <section class="">
        <div class="">
            <h1 class="display-4 text-center">
                Editar chamado
                <hr>
            </h1>
        </div>
    </section>

    <?php
    $sql = "SELECT * FROM equipamentos WHERE patrimonio =" . $_REQUEST["patrimonio"];
    $res = $connequip->query($sql);
    $row = $res->fetch_object();
    ?>

    <section class="container bg-white p-5">
        
        <form action="../salvarchamado.php" method="post">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="patrimonio" value="<?php print $row->patrimonio?>">
            <fieldset>
                <div class="row">
                    <div class="my-2 col-12 col-md-6">
                        <label for="patrimonio">Patrimônio:</label> <span class="text-danger">*</span>
                        <input value="<?php print $row->patrimonio ?>" name="patrimonio" id="patrimonio" class="form-control" type="text">
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="dataregistro">Data de registro:</label> <span class="text-danger">*</span>
                        <input value="<?php print $row->dataregistro ?>" name="dataregistro" id="dataregistro" class="form-control" type="date">
                    </div>

                    <div class="my-2 col-md-6 col-12">
                        <label for="setor">Setor:</label> <span class="text-danger">*</span>
                        <select required class="d-block form-select inputsenha" name="setor" id="setor" value="<?php print $row->setor ?>">
                            <option selected><?php print $row->setor ?> (Atual)</option>
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
                        <label for="descricao">Descrição:</label> <span class="text-danger">*</span>
                        <textarea required class="d-block form-control" name="descricao" id="descricao" cols="30" rows="10"><?php print $row->descricao ?></textarea>
                    </div>

                    <div class="my-2 col-12">
                        <button type="submit" class="btn-finalizar w-100">Finalizar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>
</main>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>