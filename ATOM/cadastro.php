<!DOCTYPE html>
<html>
<head>
	<!--bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- my css -->
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Righteous&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
		<h1>Finalize seu cadastro!</h1>
		<form action="send-data.php" method="post">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputNome">Nome:</label>
					<input type="text" class="form-control" id="inputNome" placeholder="Nome" maxlength="15" name="nome">
				</div>
				<div class="form-group col-md-6">
					<label for="inputSobrenome">Sobrenome:</label>
					<input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome" maxlength="15" name="sobrenome">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label id="inputDataNascimento">Data de Nascimento:</label>
					<input type="date" class="form-control" id="inputDataNascimento" placeholder="Data de Nascimento" name="dataNascimento">
				</div>
				<div class="form-group col-md-6">
					<label id="inputSenha">Senha:</label>
					<input type="password" class="form-control" id="inputSenha" placeholder="Senha" minlength="8" name="senha">	
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputEmail">Email:</label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
				</div>
				<div class="form-group col-md-4">
					<label for="inputTelefone">Telefone:</label>
					<input type="tel" class="form-control" id="inputTelefone" name="telefone" placeholder="(XX)XXXXXXXXX" pattern="[\(]\d{2}[\)]\d{5}\d{4}">	
				</div>
			</div>
			<div id="buttons">
				<input type="submit" value="Cadastrar!" class="btn btn-light">
				<button type="reset" href="login.html" class="btn btn-light">Cancelar</button>
			</div>
		</form>
	</div>

	<footer>
		<!--bootstrap JQuery/JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- Já testei tirando isso pra ver se era porque baixava o negocio. Não é. -->
		<!-- clicar em um botão redireciona para outra pagina -->
		<script type="text/javascript">
			// $("button").click(function() {
		    //   if ($(this).attr("href")) { window.location.href = $(this).attr("href"); } });
		</script>
	</footer>
</body>
</html>