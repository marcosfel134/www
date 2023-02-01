<?php

include('../protect.php');
include('../conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Novo chamado</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_novochamado1_1.css">
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
                                    <a class="nav-link" href="index_home.php">
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
                        Novo chamado
                        <hr>
                    </h1>
                </div>
            </section>
            <section class="container bg-white p-5">
                <form action="../salvarchamado.php" method="post">
                    <input type="hidden" name="acao" value="cadastrar">
                    <fieldset>
                        <div class="row">
                            <div class="my-2 col-12 col-md-6">
                                <label for="usuario">Usuário:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                                <input name="usuario" id="usuario" class="form-control" type="text" required readonly value="<?php echo $_SESSION['email'];?>">
                            </div>

                            <div class="my-2 col-12 col-md-6">
                                <label for="responsavel">Responsável:</label>
                                <select class="d-block form-select" name="responsavel" id="responsavel">

                                    <option selected></option>

                                    <option value="Reinaldo Vieira dos Santos">Reinaldo Vieira dos Santos</option>

                                    <option value="José Cirilo de Jesus Júnior">José Cirilo de Jesus Júnior</option>

                                    <option value="Marcos Felipe Alves Macedo">Marcos Felipe Alves Macedo</option>

                                    <option value="Letícia de Almeida Merink">Letícia de Almeida Merink</option>

                                    <option value="Outro">Outro</option>
                                    
                                </select>
                            </div>

                            <div class="my-2 col-12 col-md-6">
                                <label for="situacao">Situação:</label> <span class="text-danger">*</span>
                                <select required class="d-block form-select" name="situacao" id="situacao">

                                    <option selected></option>

                                    <option value="Aberto">Aberto</option>

                                    <option value="Em andamento">Em andamento</option>

                                    <option value="Concluído">Concluído</option>

                                    <option value="Cancelado">Cancelado</option>
                                    
                                </select>
                            </div>

                            <div class="my-2 col-12 col-md-6">
                                <label for="tipodechamado">Tipo de chamado:</label> <span class="text-danger">*</span>
                                <select required class="d-block form-select" name="tipodechamado" id="tipodechamado">

                                    <option selected></option>

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
                                <label for="setor">Setor:</label>
                                <input name="setor" id="setor" class="form-control" type="text">
                            </div>

                            <div class="my-2 col-12">
                                <label for="descricao">Descrição:</label> <span class="text-danger">*</span>
                                <textarea required class="d-block form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                            </div>

                            <div class="my-2 col-12">
                                <hr>
                            </div>

                            <div class="my-2 col-12 col-md-6">
                                <label for="datareceb">Data de recebimento:</label> <span class="text-danger">*</span> <i>(Não editável)</i>
                                <input class="form-control" type="date" name="datareceb" id="datareceb" readonly value="<?php echo date('Y-m-d');?>">
                            </div>

                            <div class="my-2 col-12 col-md-6">
                                <label for="patrimonio">Nº de patrimônio:</label>
                                <input class="form-control" type="text" name="patrimonio" id="patrimonio">
                            </div>

                            <div class="my-2 col-12">
                                <label for="solucao">Solução:</label>
                                <textarea class="d-block form-control" name="solucao" id="solucao" cols="30" rows="10"></textarea>
                            </div>

                            <div class="my-2 col-12">
                                <button type="submit" class="btn-finalizar w-100">Finalizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
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
    </body>
</html>