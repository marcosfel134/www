<?php
include('../protect.php');
include("../conexaochamado.php");

$aberto = 0;
$emandamento = 0;
$concluido = 0;
$cancelado = 0;

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
    <link rel="stylesheet" href="../_css/style_home1_4_7.css">
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

        <section class="container">
            <h1 class="display-4 text-center">
                Estatísticas
                <hr>
            </h1>

            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-5 m-2" style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 10px 0px; padding: 0px;">
                    <h6 class=""></h6>
                    <html>

                    <head>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load("current", {
                                packages: ["corechart"]
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Aberto', <?= $aberto ?>],
                                    ['Em andamento', <?= $emandamento ?>],
                                    ['Concluído', <?= $concluido ?>],
                                    ['Cancelado', <?= $cancelado ?>]
                                ]);

                                var options = {
                                    title: 'Situação de chamados:',
                                    pieHole: 0,
                                    colors: ['#253342', '#5e9188', '#000000', '#778899']
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </head>

                    <body>
                        <div id="donutchart" style="width: 100%; height: 300px;"></div>
                    </body>

                    </html>
                </div>
            </div>
        </section>

        <?php
            include("../pages_components/footer.php");
        ?>

        <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>