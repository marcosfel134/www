<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_editarchamado.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="">
    <section class="">
        <div class="">
            <h1 class="display-4 text-center">
                Editar alerta
                <hr>
            </h1>
        </div>
    </section>

    <?php
    $sql = "SELECT * FROM alertas WHERE id =" . $_REQUEST["id"];
    $res = $connealerta->query($sql);
    $row = $res->fetch_object();
    ?>

    <section class="container bg-white p-5">

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