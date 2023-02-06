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
    $sql = "SELECT * FROM chamados WHERE n =" . $_REQUEST["n"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <section class="container bg-white p-5">
        
        <form action="../salvarchamado.php" method="post">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="n" value="<?php print $row->n ?>">
            <fieldset>
                <div class="row">
                    <div class="my-2 col-12 col-md-6">
                        <label for="usuario">Usuário:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                        <input value="<?php print $row->usuario ?>" name="usuario" id="usuario" class="form-control" type="text" readonly>
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="responsavel">Responsável:</label>
                        <select value="<?php print $row->responsavel ?>" class="d-block form-select" name="responsavel" id="responsavel">

                            <option selected><?php print $row->responsavel ?></option>

                            <option value="Reinaldo Vieira dos Santos">Reinaldo Vieira dos Santos</option>

                            <option value="José Cirilo de Jesus Júnior">José Cirilo de Jesus Júnior</option>

                            <option value="Marcos Felipe Alves Macedo">Marcos Felipe Alves Macedo</option>

                            <option value="Letícia de Almeida Merink">Letícia de Almeida Merink</option>

                            <option value="Outro">Outro</option>

                        </select>
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="situacao">Situação:</label> <span class="text-danger">*</span>
                        <select required value="<?php print $row->situacao ?>" class="d-block form-select" name="situacao" id="situacao">

                            <option value="<?php print $row->situacao ?>" selected><?php print $row->situacao ?> (atual)</option>

                            <option value="Aberto">Aberto</option>

                            <option value="Em andamento">Em andamento</option>

                            <option value="Concluído">Concluído</option>

                            <option value="Cancelado">Cancelado</option>

                        </select>
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="tipodechamado">Tipo de chamado:</label> <span class="text-danger">*</span>
                        <select required value="<?php print $row->tipodechamado ?>" class="d-block form-select" name="tipodechamado" id="tipodechamado">

                            <option value="<?php print $row->tipodechamado ?>" selected><?php print $row->tipodechamado ?> (atual)</option>

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

                    <div class="my-2 col-12 col-md-6">
                        <label for="setor">Setor:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                        <input value="<?php print $row->setor ?>" name="setor" id="setor" class="form-control" type="text" readonly>
                    </div>

                    <div class="my-2 col-12">
                        <label for="descricao">Descrição:</label> <span class="text-danger">*</span>
                        <textarea required class="d-block form-control" name="descricao" id="descricao" cols="30" rows="10"><?php print $row->descricao ?></textarea>
                    </div>

                    <div class="my-2 col-12">
                        <hr>
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="datareceb">Data de recebimento:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                        <input value="<?php print $row->datareceb ?>" class="form-control" type="date" name="datareceb" id="datareceb" readonly>
                    </div>

                    <div class="my-2 col-12 col-md-6">
                        <label for="patrimonio">Nº de patrimônio:</label>
                        <input value="<?php print $row->patrimonio ?>" class="form-control" type="text" name="patrimonio" id="patrimonio">
                    </div>

                    <div class="my-2 col-12">
                        <label for="solucao">Solução:</label>
                        <textarea class="d-block form-control" name="solucao" id="solucao" cols="30" rows="10"><?php print $row->solucao ?></textarea>
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