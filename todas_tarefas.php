<?php
	$acao = 'recuperar';
	require 'tarefa_controller.php';
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="icon" href="img/logo.png" type="image/x-icon">

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
		<script src="js/script.js" type="text/javascript"></script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<!-- informes para o usuário sobre a tarefa -->
		 <? require 'informe.php' ?>
		

		<div class="container app"><!-- inicio container -->
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
					<a href="index.php"><li class="list-group-item">Tarefas pendentes</li></a>
					<a href="nova_tarefa.php"><li class="list-group-item">Nova tarefa</li></a>
					<a href=""><li class="list-group-item active">Todas tarefas</li></a>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

								<? if(count($tarefas) == 0) { echo "Nenhuma tarefa cadastrada."; } ?>

								<? foreach($tarefas as $tarefa) { ?><!-- Inicio do foreach -->
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">

											<? if ($tarefa->status == 'pendente') { ?>
												<?= "<b>$tarefa->tarefa -> </b>
													Status: <label style='color: red;'>($tarefa->status)</label>"?>
											<? } else { ?>
												<?= "<b>$tarefa->tarefa -> </b>
													Status: <label style='color:rgb(13, 153, 0);'>($tarefa->status)</label>"?>
											<? }?>
												
											
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">

											<i class="fas fa-trash-alt fa-lg text-danger"
												onclick="removerTarefa(<?= $tarefa->id ?>, 'todas_tarefas')"></i>

											<? if($tarefa->status == 'pendente') { ?>

												<i class="fas fa-edit fa-lg text-info" 
													onclick="editarTarefa(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>', 'todas_tarefas' )"></i>
												<i class="fas fa-check-square fa-lg text-success" 
													onclick="marcarTarefaConcluida(<?= $tarefa->id ?>, 'todas_tarefas')"></i>

											<? } ?>

										</div>
									</div>
								<? } ?><!-- Fim do foreach -->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- fim container -->
	</body>
</html>