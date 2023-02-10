<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <style>
        header, main{
            width: 80%;
            margin: 0 auto;
        }
        a{
            text-decoration: none;
            color: black;
        }
        nav{
            display: flex; 
            justify-content: right;
        }
        ul li{
            display: inline-block;
            margin: 0px 1rem;
        }
        li{
            font-size: 26px;
        }
        i{
            font-size: 30px;
        }
        li:hover{
            transform: scale3d(1.1, 1.1, 1)
        }
        img{
            width: 20%;
        }
        .categorias h4{
            padding: 0 20px;
        }
    </style>

</head>
<body>
    
    <header>
        <nav class="d-flex justify-content-center align-items-center">
            <ul>
                <a href=""><li>Home</li></a>
                <a href=""><li><i class="fa-solid fa-circle-user"></i></li></a>
                <a href=""><li><i class="fa-solid fa-cart-shopping"></i></li></a>
            </ul>
        </nav>
    </header>

    <hr>
    
    <main>
        <h1 class="text-center">Categorias</h1>
<!--------------------------------------------------->

        <div id="categorias" class="categorias d-flex">
            <?php
                include_once("includes/vitrine-categoria.php");
            ?>
        </div>

<!--------------------------------------------------->

        <div id="top-categorias">

        </div>

<!--------------------------------------------------->

            <h3>Produtos em destaque</h3>
        <div id="promocoes-produtos">

        </div>

<!--------------------------------------------------->

        <div id="banner">

        </div>

<!--------------------------------------------------->

        <div id="top-mercados">

        </div>

<!--------------------------------------------------->

            <h3>Mercados</h3>
        <div id="mercados">

        </div>

<!--------------------------------------------------->
    </main>


<script  src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>
</body>
</html>