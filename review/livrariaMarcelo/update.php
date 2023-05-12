<?php
include_once("conexao.php");

if (count($_POST) > 0) {
    mysqli_query($conexao, "UPDATE livros set isbn='" . $_POST['isbn'] . "', titulo='" . $_POST['titulo'] . "' ,autor='" . $_POST['autor'] . "',paginas='" . $_POST['paginas'] .
        "', preco='" . $_POST['preco'] . "' WHERE isbn ='" . $_POST['isbn'] . "'");
    $message = "Record Moified Successfully";
    echo $message;
}


$result = mysqli_query($conexao, "SELECT * FROM livros WHERE isbn='" . $_POST['isbn'] . "'");



?>


<table>
    <thead>
        <tr>
            <td>isbn</td>
            <td>titulo</td>
            <td>autor</td>
            <td>paginas</td>
            <td>preco</td>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($dado = $result->fetch_array()) {

        ?>




            <tr>
                <td><?php echo $dado['isbn']; ?></td>
                <td><?php echo $dado['titulo']; ?></td>
                <td><?php echo $dado['autor']; ?></td>
                <td><?php echo $dado['paginas']; ?></td>
                <td><?php echo $dado['preco']; ?></td>
            </tr>

        <?php } ?>
    </tbody>

</table>