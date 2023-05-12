<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <h1>Formulário de Livros</h1>
    <form class="formLivros" action="cadastroLivros.php" method="POST">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn">

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">

        <label for="paginas">Páginas:</label>
        <input type="number" id="paginas" name="paginas">

        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco">

        <input type="submit" value="submit" name="submit" >
    </form>

</body>

</html>