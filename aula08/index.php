<?php include_once("config/conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market</title>

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
    </style>

</head>
<body>
    
    <header>
        <nav>
            <ul>
                <a href=""><li>Home</li></a>
                <a href=""><li><i class="fa-solid fa-circle-user"></i></li></a>
                <a href=""><li><i class="fa-solid fa-cart-shopping"></i></li></a>
            </ul>
        </nav>
    </header>

    <hr>
    
    <main>
<!--------------------------------------------------->

        <div id="categorias">
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