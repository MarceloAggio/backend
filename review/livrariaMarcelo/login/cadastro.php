<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #1c1c1c;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 14px;
			margin: 0;
			padding: 0;
		}

		.container {
			background-color: #7b1fa2;
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

		label {
			display: block;
			font-size: 18px;
			margin: 20px 0 10px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			background-color: #eee;
			border: none;
			border-radius: 5px;
			box-sizing: border-box;
			color: #333;
			display: block;
			font-size: 16px;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
		}

		button[type="submit"] {
			background-color: #000;
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
			background-color: #222;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Cadastro de Usuários</h1>
		<form action="inserir.php" method="POST">
			<label for="name">Nome:</label>
			<input type="text" id="name" name="nome">

			<label for="email">Email:</label>
			<input type="email" id="email" name="email">

			<label for="password">Senha:</label>
			<input type="password" id="password" name="senha">

			<input type="submit" value="submit">
		</form>
	</div>
</body>
</html>
