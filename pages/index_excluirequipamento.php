<!DOCTYPE html>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_excluirchamado.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> 
    <link rel="shortcut icon" href="../_img/favicon.png">
        <main class="px-5 pb-5">
            <section class="container">
                <div class="">
                    <h1 class="display-4 text-center">
                            Excluir equipamento
                        <hr>
                    </h1>
                </div>
            </section>

            <?php
            $sql = "SELECT * FROM equipamentos WHERE patrimonio =".$_REQUEST["patrimonio"];
            $res = $connequip->query($sql);
            $row = $res->fetch_object();
            ?>

            <section class="container bg-white px-5">
                <form action="../salvarequipamento.php" method="post">
                    <input type="hidden" name="acao" value="excluir">
                    <input type="hidden" name="patrimonio" value="<?php print $row->patrimonio?>">
                    <fieldset>
                    <div class="my-2 col-12">
                                <button type="submit" class="my-2 btn-finalizar w-100">Sim</button>
                            </div>
                    </fieldset>
                </form>
            </section>
        </main>

    <script src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>