<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
		<title>Compras da Manhã</title>
		 
		<link rel="stylesheet" href="/bootstrap.min.css">		
		<link rel="stylesheet" href="/animate.min.css">
		<link rel="stylesheet" href="/site.css?<?php echo rand(); ?>">

		<script src="/bootstrap.min.js"></script>	
		<script src="/jquery-3.6.0.min.js"></script>
		<script src="/fontwasome.js"></script>	
	
		
	</head>
	<body>

		<div class="screen">
			<div class="head">
				<h3>Compras da Manhã</h3>
			</div>
			<div class="register">
				<form method="post">
					<input type="text" class="form-control" placeholder="Adicionar Item" name="titulo">
					<input type="hidden" name="tipo" value="cadastrar">
					<button type="submit">Adicionar</button>
				</form>
			</div>
			<div class="tarefas"></div>
		</div>


		<script>

			$( document ).ready(function() {
				lista_atual();
			});


			function lista_atual(){ 

				let path = '<?php echo site_url("tarefas") ?>';
	
				var load = "<img src='/load.gif' class='loadGif'>";
				
				$.ajax({
					'type': "GET",
					'url' : path, 
					'beforeSend' : function(retorno) {
						$('.tarefas').html(load);
					},
					'success' : function(retorno) {
						$('.tarefas').html(retorno);
					}
				});
			}

		</script>
	
	</body>
</html>		