<?php
include('../protect.php');
include("../conexaochamado.php");

$aberto = 0;
$emandamento = 0;
$concluido = 0;
$cancelado = 0;

$secretaria1 = 0;
$secretaria2 = 0;
$secretaria3 = 0;
$secretaria4 = 0;
$secretaria5 = 0;
$secretaria6 = 0;
$secretaria7 = 0;
$secretaria8 = 0;
$secretaria9 = 0;
$secretaria10 = 0;
$secretaria11 = 0;
$secretaria12 = 0;
$secretaria13 = 0;
$secretaria14 = 0;
$secretaria15 = 0;
$secretaria16 = 0;
$secretaria17 = 0;
$secretaria18 = 0;

$resultadochamados = "SELECT * FROM chamados";
$result = $conn->query($resultadochamados);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['situacao'] == "Aberto") {
        $aberto += 1;
    } else if ($row['situacao'] == "Em andamento") {
        $emandamento += 1;
    } else if ($row['situacao'] == "Concluído") {
        $concluido += 1;
    } else if ($row['situacao'] == "Cancelado") {
        $cancelado += 1;
    }
}

$resultadochamados2 = "SELECT * FROM chamados";
$result2 = $conn->query($resultadochamados2);
while ($row = mysqli_fetch_assoc($result2)) {
    if ($row['setor'] == "Gabinete do Prefeito") {
        $secretaria1 += 1;
    } else if ($row['setor'] == "Controladoria Geral") {
        $secretaria2 += 1;
    } else if ($row['setor'] == "Procuradoria-Geral") {
        $secretaria3 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Planejamento e Governo") {
        $secretaria4 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Defesa do Cidadão") {
        $secretaria5 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Administração") {
        $secretaria6 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Fazenda") {
        $secretaria7 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Saúde") {
        $secretaria8 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Educação") {
        $secretaria9 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Esporte e Lazer") {
        $secretaria10 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Cultura") {
        $secretaria11 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Turismo") {
        $secretaria12 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Indústria e Comércio") {
        $secretaria13 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Segurança Pública e Trânsito") {
        $secretaria14 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Obras e Urbanismo") {
        $secretaria15 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Meio Ambiente e Serviços Públicos") {
        $secretaria16 += 1;
    } else if ($row['setor'] == "Secretaria Municipal de Assistência Social e da Mulher") {
        $secretaria17 += 1;
    } else if ($row['setor'] == "Outro") {
        $secretaria18 += 1;
    }
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
    <link rel="stylesheet" href="../_css/style_home1_4_8.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../_img/favicon.png">
</head>

<body>
    <?php
    include("../pages_components/header.php");
    ?>

    <main class="pb-5 px-5 pt-2">
        <?php
        include("../pages_components/menu_funcoes.php");
        ?>

        <?php
        if ($_SESSION['adm'] == 1) {
            include("../pages_components/estatisticas.php");;
        }
        ?>


        <?php
        include("../pages_components/footer.php");
        ?>

        <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>