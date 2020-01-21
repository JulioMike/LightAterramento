<?php include_once "banco.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nada</title>

    <script src="dist/Chart.min.js"></script>
</head>
<body>
    <div>
		<?php
			$tensao = buscar_medicoes_tensao_ac_todas($conexao);
			$string_tensao = implode("|", $tensao);
			
			$corrente = buscar_medicoes_corrente_ac_todas($conexao);
			$string_corrente = implode("|", $corrente);
			
			$instante = buscar_instantes_tensao_ac_todas($conexao);
			$string_instante = implode("|", $instante);
		?>
		
		<input type="button" onclick="grafico()" value="Iniciar">
        <canvas id="canvas"></canvas>
        <script type="text/javascript">
			var tensao, string_tensao;
			string_tensao = "<?php echo $string_tensao; ?>";
			tensao = string_tensao.split("|");

			var instante, string_instante;
			string_instante = "<?php echo $string_instante; ?>";
			instante = string_instante.split("|");
			console.log(tensao.length);
			var corrente, string_corrente;
			string_corrente = "<?php echo $string_corrente; ?>";
			corrente = string_corrente.split("|");

			console.log(corrente.length);
			var lineChartData = {
			labels: Array(tensao.length).fill(""),
			datasets: [{
				label: 'Tensão (V)',
				borderColor: "#ff0000",
				backgroundColor: "#ff0000",
				fill: false,
				data: tensao,
				yAxisID: 'y-axis-1'
			}, {
				label: 'Corrente (A)',
				borderColor: "#0000ff",
				backgroundColor: "#0000ff",
				fill: false,
				data: corrente,
				yAxisID: 'y-axis-2'
			}]
		};
		grafico = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = Chart.Line(ctx, {
				data: lineChartData,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Tensão e Corrente Impulsivos'
					},
					scales: {
						yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',
							// grid line settings
							gridLines: {
								drawOnChartArea: false, // only want the grid lines for one axis to show up
							},
						}],
					}
				}
			});
		};
		</script>
    </div>        
</body>
</html>