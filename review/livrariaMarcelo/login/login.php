<!DOCTYPE html>
<html>
<head>
	<title>Página de Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}

		.container {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			margin: 50px auto;
			max-width: 500px;
			padding: 20px;
		}

		h1 {
			font-size: 28px;
			margin: 0 0 20px;
			text-align: center;
		}

		input[type="text"],
		input[type="password"] {
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			display: block;
			font-size: 16px;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
		}

		button[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			display: block;
			font-size: 16px;
			margin: 20px auto 0;
			padding: 10px;
			width: 100%;
		}

		button[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form action="validar.php" method="POST">
			<label for="username">Usuário:</label>
			<input type="text" id="username" name="email">

			<label for="password">Senha:</label>
			<input type="password" id="password" name="senha">

			<button type="submit">Entrar</button>

            <a href="cadastro.php">cadastrar usuario</a>
		</form>
	</div>
</body>
</html>
