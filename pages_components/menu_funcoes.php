<style>
.btn-funcoes a {
display: block;
margin: 0 auto;
text-align: center;
padding: 0px;
}

.btn-funcoes i {
    font-size: 25px;
}

.btn-funcoes button{
    border: none;
    background-color: var(--cor-cinza);
    border-radius: 10px;
    padding: 10px;
    color: var(--cor-primaria);
    font-size: 10px;
    border: 1px solid var(--cor-preto);
    width: 70px;
    height: 70px;
}
</style>

<section class="container py-2">
            <div class="row">
                <div class="col-4 col-md-2 col-lg-1 btn-funcoes p-0">
                    <a href="index_home.php">
                        <button>
                            <i class="bi bi-house"></i>
                            <div>
                                Início
                            </div>
                        </button>
                    </a>
                </div>
                <div class="col-4 col-md-2 col-lg-1 btn-funcoes p-0">
                    <a href="index_chamados.php">
                        <button>
                            <i class="bi bi-list-check"></i>
                            <div>
                                Chamados
                            </div>
                        </button>
                    </a>
                </div>
                <?php
                if ($_SESSION['adm'] == 1) {
                    print "<div class='col-4 col-md-2 col-lg-1 btn-funcoes p-0'>
                            <a href='index_funcoesadm.php'>
                                <button>
                                    <i class='bi bi-person-gear'></i>
                                    <div>
                                        Fun. ADM
                                    </div>
                                </button>
                            </a>
                        </div>";
                }
                ?>
                <?php
                if ($_SESSION['adm'] == 1) {
                    print "<div class='col-4 col-md-2 col-lg-1 btn-funcoes p-0'>
                            <a href='index_listausuarios.php'>
                                <button>
                                    <i class='bi bi-people'></i>
                                    <div>
                                        List. Usuá.
                                    </div>
                                </button>
                            </a>
                        </div>";
                }
                ?>
            </div>
            <hr>
        </section>