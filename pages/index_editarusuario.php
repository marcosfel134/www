<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_editarchamado.css">
<link rel="stylesheet" href="../_css/style_chamados1.0.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="">
    <?php
    $sql = "SELECT * FROM usuarios WHERE id =" . $_REQUEST["id"];
    $res = $mysqli->query($sql);
    $row = $res->fetch_object();
    ?>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Editando usuário ID nº <?php echo $_REQUEST["id"]; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../salvarusuario.php" method="post">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php print $row->id ?>">
                        <fieldset>
                            <div class="row">
                                <div class="my-2 col-12 col-md-6">
                                    <label for="id">ID:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                                    <input value="<?php print $row->id ?>" name="id" id="id" class="form-control" type="text" required readonly>
                                </div>

                                <div class="my-2 col-12 col-md-6">
                                    <label for="user">Usuário:</label> <span class="text-danger">*</span>
                                    <input value="<?php print $row->user ?>" name="user" id="user" class="form-control" type="text" required>
                                </div>

                                <div class="my-2 col-12 col-md-6">
                                    <label for="email">Email:</label> <span class="text-danger">*</span>
                                    <input value="<?php print $row->email ?>" name="email" id="email" class="form-control" type="text" required>
                                </div>

                                <div class="my-2 col-12 col-md-6">
                                    <label for="senha">Senha:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                                    <input value="******" name="senha" id="senha" class="form-control" type="password" readonly>
                                </div>

                                <div class="my-2 col-md-6 col-12">
                                    <label for="setor">Setor:</label> <span class="text-danger">*</span>
                                    <select required class="d-block form-select inputsenha" name="setor" id="setor" value="<?php print $row->setor ?>">
                                        <option selected><?php print $row->setor ?></option>
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

                                <?php
                                if ($row->adm == 1) {
                                    echo '
                        <div class="my-2 col-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="adm" name="adm" checked>
                                <label class="form-check-label" for="adm">ADM?</label>
                                <div>
                                    <span class="text-danger">Forneça funções de administrador apenas para usuários confiáveis!</span>
                                </div>
                            </div>
                        </div>
                        ';
                                } else {
                                    echo '<div class="my-2 col-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="adm" name="adm">
                            <label class="form-check-label" for="adm">ADM?</label>
                            <div>
                                <span class="text-danger">Forneça funções de administrador apenas para usuários confiáveis!</span>
                            </div>
                        </div>
                    </div>
                    ';
                                }
                                ?>

                            </div>
                        </fieldset>
                        <div class="modal-footer">
                            <button onclick="location.href='index_listadeusuarios.php'" type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Confirmar alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="../js/bootstrap.bundle.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(window).load(function() {
        $('#exampleModal1').modal('show');
    });
</script>
</body>

</html>