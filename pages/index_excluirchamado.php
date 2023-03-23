<!DOCTYPE html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../_css/style_excluirchamado.css">
<link rel="stylesheet" href="../_css/style_chamados1.0.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="shortcut icon" href="../_img/favicon.png">
<main class="px-5 pb-5">

    <?php
    $sql = "SELECT * FROM chamados WHERE n =" . $_REQUEST["n"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir chamado?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir permanentemente o chamado <?php echo $_REQUEST["n"]; ?>?
                </div>
                <div class="modal-footer">
                    <button onclick="location.href='index_chamados.php'" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="../salvarchamado.php" method="post">
                        <input type="hidden" name="acao" value="excluir">
                        <input type="hidden" name="n" value="<?php print $row->n ?>">
                        <fieldset>
                            <button type="submit" class="btn btn-danger">Sim, quero excluir</button>
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
        $('#exampleModal').modal('show');
    });
</script>
</body>

</html>