<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastra Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .texte{
            width: 100%;
            height: 200px;
            background-color: red;
        }
        input{
            width: 98%;
        }
    </style>
</head>
<body>
    
    <form action="cliente/inserir-cliente.php" method="POST" class="mb-3">

    <div class="row">

    <div class="col-md-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="sobrenome" class="form-label">Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" class="form-control">
    </div>
        <label for="data" class="form-label">Data de nascimento:</label>
        <input type="date" name="data_nasc" placeholder="Digite sua Data de Nascimento" class="form-control">

        <label for="genero" class="form-label">Genero:</label>
        <input type="text" name="genero" placeholder="Digite Seu genero" class="form-control">
    

        <label for="newsletter" class="form-label">Newsletters:</label>
        <input type="text" name="newsletter" placeholder="Deseja Receber as Newsletters?" class="form-control">

        <label for="numero" class="form-label">Numero:</label>
        <input type="number" name="numero" placeholder="Digite seu numero" class="form-control">

        <label for="email" class="form-label">E-mail:</label>
        <input type="email" name="email" placeholder="Digite seu E-mail" class="form-control">

    </div>

        <button class="btn btn-secondary mt-2">Cadastrar</button>
    </form>
    <div class="texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quidem iste quis molestiae dignissimos, ab laudantium eius modi. In incidunt totam exercitationem quam quos numquam quia sit nihil modi consequuntur?</div>

</body>
</html>