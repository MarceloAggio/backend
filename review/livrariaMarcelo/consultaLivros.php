<?php

$chave = $_POST['chave'];
$busca = $_POST['busca'];

if(strlen($busca)< 2){
    echo "O termo a ser buscado deve ser no minimo dois caracteres";
    exit;
}

include_once("conexao.php");

$consulta = "SELECT * FROM livros WHERE $chave like '%$busca&'";
$con = $conexao ->query ($consulta) or die ($conexao->error);

?>

<table>
    <thead>
        <td>ISBN</td>
        <td>Titulo</td>
        <td>Autor</td>
        <td>Paginas</td>
        <td>Preço</td>
    </thead>
    <?php while($dado = $con->fetch_array()){?>
    <tbody>
        <tr>
            <td><?php echo $dado["isbn"]; ?></td>
            <td><?php echo $dado["titulo"]; ?></td>
            <td><?php echo $dado["autor"]; ?></td>
            <td><?php echo $dado["paginas"]; ?></td>
            <td><?php echo $dado["preco"]; ?></td>
        </tr>
    </tbody>
    <?php }?>
</table>