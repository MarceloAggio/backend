<?php   include_once("config/conexao.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastra Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    input {
        width: 98%;
    }

    section {
        width: 80%;
        margin: 0 auto;
    }

    button {
        width: 20%;
    }
    </style>
</head>

<body>


    <section>
        <form action="parceiros/inserir-parceiros.php" method="POST" class="mb-3 mt-3">

            <div class="row">

                <div class="col-md-3">
                    <label for="nome" class="form-label">Razão Social:</label>
                    <input type="text" name="razaoSocial" placeholder="Digite a razão social" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="sobrenome" class="form-label">Nome Fantasia:</label>
                    <input type="text" name="nomeFantasia" placeholder="Digite o nome fantasia" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="data" class="form-label">Inscrição Estadual:</label>
                    <input type="number" name="ie" placeholder="Digite sua Inscrição Estadual"
                        class="form-control">
                </div>
                
                <div class="col-md-3">
                    <label for="newsletter" class="form-label">Inscrição Municipal:</label>
                    <input type="text" name="im" placeholder="Digite sua Inscrição Municipal"
                        class="form-control">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-secondary mt-2">Continuar</button>
            </div>
        </form>
    </section>

</body>

</html>