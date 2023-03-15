<?php 
include_once("../config/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Lista de Produtos </title>
</head>

<body>

    <form action="../admin/produtos/inserir-produto.php" method="POST">

        <label for="">Nome</label>
        <input type="text" name="nome">

        <label for="">descricao</label>
        <input type="text" name="descricao">

        <label for="">Preço</label>
        <input type="text" name="preco">

        <input type="hidden" name="id">
        

        <select name="area" id="area">
            <option value="" selected=selected>Selecione uma categoria</option>


            <?php
            $queryConsultCat = "SELECT * FROM tbl_categorias";
            $consulta = mysqli_query($conexao, $queryConsultCat);
            $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

            foreach($resultado as $categoria){
            echo "<option value='".$categoria['id']."'>".$categoria['nome']."</option>";
            }
        ?>
        </select>

        <button>Cadastrar</button>
    </form>
</body>

</html>