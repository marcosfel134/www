<style>
    :root {
        --cor-primaria: #253342;
        --cor-secundaria: #5e9188;

        --cor-preto: #232226;
        --cor-branco: #ffffff;
        --cor-cinza: #ededf2;
    }

    .btn-finalizar {
        color: var(--cor-branco);
        background-color: var(--cor-primaria);
        font-family: 'roboto';
        border: none;
        border-radius: 10px;
        padding: 8px;
        height: 45px;
        transition: 0.3s;
        width: 100%;
    }

    .btn-finalizar:hover {
        color: var(--cor-preto);
        background-color: var(--cor-branco);
        border: 1px solid var(--cor-preto);
        transition: 0.3s;
    }
</style>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso negado!</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <main class="p-5 container mt-5">
        <div>
            <figure class="text-center">
                <img src="../_img/protect.svg" height="368px" alt="protect">
            </figure>
        </div>
        <div class="text-center">
            <h1>Acesso negado.</h1>
            <h3 class="fw-light">Talvez você não esteja logado... ou acessando conteúdo protegido.</h3>
        </div>

        <div class="text-center py-5">
            <button onclick="location.href='../pages/index_login.php'" class="btn-finalizar">Voltar para a página de login</button>
        </div>
    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>