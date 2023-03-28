<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_editarchamado.css">
<link rel="stylesheet" href="../_css/style_chamados1.0.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="">

    <?php
    $sql = "SELECT * FROM alertas WHERE id =" . $_REQUEST["id"];
    $res = $connealerta->query($sql);
    $row = $res->fetch_object();
    ?>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Editando o alerta de ID nº <?php echo $_REQUEST["id"]; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../salvaralerta.php" method="post">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="id" value="<?php print $row->id ?>">
                        <fieldset>
                            <div class="row">
                                <div class="my-2 col-12">
                                    <label for="alerta">Alerta:</label> <span class="text-danger">*</span>
                                    <textarea required class="d-block form-control" name="alerta" id="alerta" cols="30" rows="10"><?php print $row->alerta ?></textarea>
                                </div>

                                <div class="my-2 col-12 col-md-6">
                                    <label for="tipoalerta">Tipo de alerta:</label> <span class="text-danger">*</span>
                                    <select value="<?php print $row->tipoalerta ?>" class="d-block form-select" name="tipoalerta" id="tipoalerta">

                                        <option selected><?php print $row->tipoalerta ?></option>

                                        <option value="Vermelho">Vermelho (Grave)</option>

                                        <option value="Amarelo">Amarelo (Requer atenção)</option>

                                        <option value="Azul">Azul (Sem gravidade, informação)</option>

                                    </select>
                                </div>

                                <div class="my-2 col-12 col-md-6">
                                    <label for="datareceb">Data de recebimento:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                                    <input value="<?php print $row->datareceb ?>" class="form-control" type="date" name="datareceb" id="datareceb" readonly>
                                </div>
                            </div>
                        </fieldset>
                        <div class="modal-footer">
                            <button onclick="location.href='index_alertas.php'" type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
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