<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Categoria</title>
</head>
<body>

<a href="index.php">Voltar</a>
    
    <form action="categorias/inserir-categoria.php" method="POST">
        <input type="text" name="nome-categoria" placeholder="nome-categoria">
        <input type="text" name="img-categoria" placeholder="img-categoria">
        <input type="text" name="slug-categoria" placeholder="slug-categoria">

        <button>Salvar</button>
    </form>

</body>
</html>