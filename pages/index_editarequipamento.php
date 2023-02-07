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

                    <div class="my-2 col-12 col-md-6">
                        <label for="setor">Setor:</label> <span class="text-danger">*</span>
                        <input value="<?php print $row->setor ?>" name="setor" id="setor" class="form-control" type="text">
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