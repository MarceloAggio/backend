<?php

function get_endereco($cep)
{

    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml";

    $xml = simplexml_load_file($url);
    return $xml;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pesquisa de CEP</title>
    <style>
        body {
            background-color: #663399;
            /* Roxo escuro */
            color: #000000;
            /* Preto */
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            /* Branco */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            padding: 10px;
            border: 1px solid #000000;
            /* Preto */
            border-radius: 5px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #000000;
            /* Preto */
            color: #ffffff;
            /* Branco */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #663399;
            /* Roxo escuro */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Pesquisa de CEP</h2>
        <form method="POST">
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group">
                <button type="submit">Buscar</button>
            </div>
        </form>
    </div>

    <?php
        if($_POST['cep']){
    ?>
    <h2>Resultado</h2>
    <div>
        <?php $endereco = get_endereco($_POST['cep']);?>
        <b>CEP:</b> <?php echo $endereco->cep;?><br>
        <b>Logradouro:</b><?php echo $endereco->logradouro?><br>
        <b>Bairro:</b><?php echo $endereco->bairro?><br>
        <b>Localidade:</b><?php echo $endereco->localidade?><br>
        <b>UF:</b><?php echo $endereco->localidade?>

    </div>
<?php
}
?>
</body>

</html>