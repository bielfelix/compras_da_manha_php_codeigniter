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
				<h3>Editar</h3>
			</div>
			<div class="register">
				<form method="post">
					<input type="text" class="form-control" placeholder="Adicionar Item" name="titulo" value="<?php echo $tarefa['titulo'] ?>" required>
					<input type="hidden" name="cod" value="<?php echo $tarefa['cod'] ?>">
					<button type="submit">Salvar</button>
				</form>
			</div>

            <a href="<?php echo base_url() ?>" class="btn_voltar">Voltar</a>

		</div>

	</body>
</html>		
