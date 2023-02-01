<header class="px-5">
        <nav class="container navbar navbar-expand-lg">
            <a class="navbar-brand" href="index_home.php">
                <h1 class="display-6 text-dark d-inline-block">
                    GerenTI |
                </h1>
            </a>
            <span class="d-none d-lg-block">Logado como: <?php echo $_SESSION['email']; ?></span>

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