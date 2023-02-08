<?php include_once("../config/conexao.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Categoria</title>

    <style>
        th, td{
            border: 1px solid black;
            text-align: center;
        }
    </style>

</head>
<body>

<a href="index.php">Voltar</a>

<h4>Gestão de Categorias</h4>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Visibilidade</th>
            <th>ID Situação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryConsultaCat = "SELECT * FROM tbl_categorias";
        $consulta = mysqli_query($conexao, $queryConsultaCat);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

        foreach($resultado as $categoria){
            echo "<tr>
                    <td>".$categoria["nome"]."</td>
                    <td>".$categoria["visibilidade"]."</td>
                    <td>".$categoria["id_situacao"]."</td>
                    <td>
                        <a href=''></a>
                    </td>
                </tr>";
        }
        
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){

    ?>
    <h4>Cadastro de Categoria</h4>
    
    <form action="inserir-categoria.php" method="POST">
        <input type="text" name="nome-categoria" placeholder="nome-categoria">
        <input type="text" name="img-categoria" placeholder="img-categoria">
        <input type="text" name="slug-categoria" placeholder="slug-categoria">

        <button>Salvar</button>
    </form>
    <?php        
        }
    }else{
        echo "Não Existe";
    }
?>


</body>
</html>