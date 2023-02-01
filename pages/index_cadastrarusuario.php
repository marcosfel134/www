<?php
include('../protect.php');
include('../conexao.php');

if ($_SESSION['adm'] == 1){
    
}else{
    echo "<script>
    alert('ERRO! Sem permissão para acessar.');
    window.location='index_home.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenTI - Cadastrar novo usuário</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/style_cadastrarusuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
</head>

<body>
    <header class="px-5">
        <nav class="container navbar navbar-expand-lg">
            <a class="navbar-brand" href="index_home">
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

                                        <?php
                                                if ($_SESSION['adm'] == 1){
                                                    print "<li><a class='dropdown-item' href='index_funcoesadm.php'>Fun. ADM</a></li>";
                                                }   
                                        ?>
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

    <main class="p-5">
        <section class="container">
            <div class="">
                <h1 class="display-4 text-center">
                    Cadastrar novo usuário
                    <hr>
                </h1>
            </div>
        </section>
        <section class="container bg-white p-5">
            <form action="../cadastrarusuario.php" method="POST">
                <fieldset>
                    <div class="row align-items-center justify-content-center">
                        <div class="my-2 text-center col-12">
                            <label for="cadastrousuario">Usuário:</label> <span class="text-danger">*</span>
                            <input name="cadastrousuario" id="cadastrousuario" class="form-control inputsenha" type="text" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrosenha">Senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrosenha" id="cadastrosenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 text-center col-12">
                            <label for="cadastrorepitasenha">Repita a senha:</label> <span class="text-danger">*</span>
                            <input name="cadastrorepitasenha" id="cadastrorepitasenha" class="form-control inputsenha" type="password" required>
                        </div>
                        <div class="my-2 col-12">
                            <input type="submit" value="Finalizar" class="form-control btn-finalizar">
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