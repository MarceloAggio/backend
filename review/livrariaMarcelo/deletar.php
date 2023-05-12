<?php

include("conexao.php");

$query = "DELETE FROM livros WHERE isbn='" . $_POST ["isbn"] ."'";
if (mysqli_query($conexao, $query))
{

    /*header (location: deletar.php)*/
    echo "Excluido com sucesso";
}
else {
    echo "Error deleting record: " . mysqli_error($conexao);
}

$result = mysqli_query($conexao,"SELECT * FROM livros WHERE isbn='" .$_POST['isbn']."'");

?>

<?php
    include_once("conexao.php");
?>