<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_excluirchamado.css">
<link rel="stylesheet" href="../_css/style_chamados1.0.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="">

    <?php
    $sql = "SELECT * FROM equipamentos WHERE patrimonio =" . $_REQUEST["patrimonio"];
    $res = $connequip->query($sql);
    $row = $res->fetch_object();
    ?>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir usuário?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir permanentemente o equipamento de patrimônio nº <?php echo $_REQUEST["patrimonio"]; ?>?
                </div>
                <div class="modal-footer">
                    <button onclick="location.href='index_listadeequipamentos.php'" type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                    <form action="../salvarequipamento.php" method="post">
                        <input type="hidden" name="acao" value="excluir">
                        <input type="hidden" name="patrimonio" value="<?php print $row->patrimonio ?>">
                        <fieldset>
                            <div class="my-2 col-12">
                            <button type="submit" class="btn btn-danger">Sim, quero excluir</button>
                            </div>
                        </fieldset>
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