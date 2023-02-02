<section class="container">
    <h1 class="display-4 text-center">
        Estatísticas
        <hr>
    </h1>

    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 m-2">
            <figure width="100%" height="300px">
                <img src="../_img/estatisticas.svg" alt="estatisticas" width="100%" height="100%">
            </figure>
        </div>

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
                            pieHole: 0.2,
                            colors: ['#3b3759', '#aa5377', '#cf8da7', '#778899']
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

        <div class="col-12 m-2" style="border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 10px 0px; padding: 0px;">
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
                            ['Gabinete do Prefeito', <?= $secretaria1 ?>],
                            ['Controladoria Geral', <?= $secretaria2 ?>],
                            ['Procuradoria-Geral', <?= $secretaria3 ?>],
                            ['Secretaria Municipal de Planejamento e Governo', <?= $secretaria4 ?>],
                            ['Secretaria Municipal de Defesa do Cidadão', <?= $secretaria5 ?>],
                            ['Secretaria Municipal de Administração', <?= $secretaria6 ?>],
                            ['Secretaria Municipal de Fazenda', <?= $secretaria7 ?>],
                            ['Secretaria Municipal de Saúde', <?= $secretaria8 ?>],
                            ['Secretaria Municipal de Educação', <?= $secretaria9 ?>],
                            ['Secretaria Municipal de Esporte e Lazer', <?= $secretaria10 ?>],
                            ['Secretaria Municipal de Cultura', <?= $secretaria11 ?>],
                            ['Secretaria Municipal de Turismo', <?= $secretaria12 ?>],
                            ['Secretaria Municipal de Indústria e Comércio', <?= $secretaria13 ?>],
                            ['Secretaria Municipal de Segurança Pública e Trânsito', <?= $secretaria14 ?>],
                            ['Secretaria Municipal de Obras e Urbanismo', <?= $secretaria15 ?>],
                            ['Secretaria Municipal de Meio Ambiente e Serviços Públicos', <?= $secretaria16 ?>],
                            ['Secretaria Municipal de Assistência Social e da Mulher', <?= $secretaria17 ?>],
                            ['Outro', <?= $secretaria18 ?>]
                        ]);

                        var options = {
                            title: 'Chamados por secretaria:',
                            is3D: true,
                            colors: ['#3b3759', '#5B49E3', '#938ADE', '#261E5E', '#aa5377', '#F578AC', '#F7C3D8', '#5E4B53', '#cf8da7', '#778899', '#76B6F7', '#BFDAF5', '#385775', '#9FF5E5', '#297567', '#232226', '#AB91F7', '#E1DAF5']
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                    }
                </script>
            </head>

            <body>
                <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
            </body>

            </html>
        </div>
    </div>
</section>