<style>
    @charset "UTF-8";

    @font-face {
        font-family: 'roboto';
        src: url('../_fonts/Roboto-Medium.ttf');
    }

    :root {
        --cor-primaria: #253342;
        --cor-secundaria: #5e9188;

        --cor-preto: #232226;
        --cor-branco: #ffffff;
        --cor-cinza: #ededf2;
    }

    * {
        /* border: 1px solid red; */
    }


    /* header */
    /* header */
    /* header */

    header {
        background-color: var(--cor-branco);
    }

    header h1 {
        font-family: 'roboto';
    }

    header button,
    header li {
        background-color: var(--cor-primaria);
        color: var(--cor-branco);
        border-radius: 10px;
        border: none;
        transition: 0.3s;
        width: 140px;
        font-size: 15px;
    }

    .dropdown-menu {
        width: 100px;
    }

    .dropdown-menu li {
        background-color: var(--cor-branco);
        width: 80%;
        font-size: 16px;
    }

    .dropdown-menu a {
        width: 100%;
        padding: 10px;
    }

    header button:hover {
        transform: scale(1.1);
        transition: 0.3s;
    }

    header li {
        margin-right: 10px;
        margin-left: 10px;
    }

    .nav-botao-desabilitado {
        background-color: gray;
    }

    header i {
        color: var(--cor-preto);
        font-size: 25px;
    }

    .nav-link {
        color: var(--cor-branco);
        font-family: 'roboto';
    }

    .nav-link:hover {
        color: var(--cor-branco);
    }

    @media (max-width: 768px) {
        header li {
            margin: 10px;
            text-align: center;
        }

        header li,
        header button {
            width: 100%;
        }

        header li {
            margin-right: 0px;
            margin-left: 0px;
        }

        .dropdown-menu {
            width: 100%;
            background-color: transparent;
            padding: 0px;
        }

        .dropdown-menu li {
            background-color: var(--cor-branco);
            width: 100%;
            font-size: 16px;
        }

        .dropdown-menu a {
            width: 100%;
            padding: 0px;
            background-color: transparent;
            margin: 0 auto;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    }
</style>

<header class="px-5">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand" href="index_home.php">
            <h1 class="display-6 text-red d-inline-block" style="font-size: 30px;">
            <i class="bi bi-gear-fill"></i> gerenTI |
            </h1>
        </a>
        <span class="d-none d-lg-block" style="font-size: 15px;">Logado como: <?php echo $_SESSION['user']; ?></span>
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
                                    Conta
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index_alterarsenha.php">Alterar senha</a></li>
                                </ul>
                            </button>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <button class="nav-botao">
                            <a class="nav-link" href="index_ajuda.php">
                                Ajuda
                            </a>
                        </button>
                    </li> -->
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