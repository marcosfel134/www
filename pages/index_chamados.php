<?php
include('../protect.php');
include("../conexaochamado.php");
switch(@$_REQUEST["page"]){
    case "novo":
        header ("location: index_novochamado.php");
        break;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Início</title>
    <link rel="stylesheet" href="../_css/datatables_bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_home1_4_5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
</head>
    <body>
        <header class="px-5">
            <nav class="container navbar navbar-expand-lg">
                <a class="navbar-brand" href="index_home.php">
                    <h1 class="display-6 text-dark d-inline-block">
                    GerenTI |
                    </h1>
                </a>
                <span class="d-none d-lg-block">Logado como: <?php echo $_SESSION['email'];?></span> 

                <nav class="">
                    <div class="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#togglemenu" aria-controls="togglemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                        </button>
                    </div>
                </nav>

                <div class="menu collapse navbar-collapse" id="togglemenu">
                    <div class="py-4 py-lg-0" style="margin: 0px 0px 0px auto;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button class="nav-botao">
                                    <a class="nav-link" aria-current="page" href="index_home.php">
                                    Início
                                    </a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="nav-botao">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Configurações
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="index_alterarsenha.php">Alterar senha</a></li>
                                        </ul>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item">
                                <button class="nav-botao">
                                    <a class="nav-link" href="index_ajuda.php">
                                    Ajuda
                                    </a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-botao-sair">
                                    <a class="nav-link" href="../logout.php">
                                    Sair
                                    </a>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="pb-5 px-5 pt-2">
            <section class="container py-2">
                <div class="row">
                    <div class="col-4 col-md-2 col-lg-1 btn-funcoes p-0">
                        <a href="#">
                            <button>
                                <i class="bi bi-list-check"></i>
                                <div>
                                    Chamados
                                </div>
                            </button>
                        </a>
                    </div>
                    <?php
                        if ($_SESSION['adm'] == 1){
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
                </div>
                <hr>
            </section>                            

            <section class="container">
                <div class="">
                    <h1 class="display-4 text-center">
                        Chamados
                        <hr>
                    </h1>
                    <?php
                    switch(@$_REQUEST["page"]){
                        case "editar":
                            include("index_editarchamado.php");
                            break;
                    }                      
                    ?>
                    <br>
                </div>

                <div class="btn-novo-chamado">
                    <a href="?page=novo">
                        <button class= "">
                        <i class="bi bi-plus"></i> Novo chamado
                        </button>
                    </a>
                </div>
                <br>
            </section>
            <section class="container tabelachamados">
                <?php
                    switch(@$_REQUEST["page"]){
                        case "excluir":
                            include("index_excluirchamado.php");
                            break;
                    }                      
                    include("../listadechamados.php");
                ?>
            </section>
        </main>

        <footer class="p-5 text-center" style="font-size: 10px;">
            <div>
                Todos os direitos reservados &copy;
            </div>
            <div>
                Desenvolvido por: <a target="_blank" href="https://www.linkedin.com/in/marcosfel134/">@marcosfel134</a>
            </div>
        </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../_js/jquery-3.5.1.js"></script>
    <script src="../_js/dataTables.bootstrap5.min.js"></script>
    <script src="../_js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#listadechamados').DataTable();
        });
    </script>
    </body>
</html>