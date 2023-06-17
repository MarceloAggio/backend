<?php
// incluir arquivos de conexao de banco de dados 
include 'functions.php';
$updatedata = new DB_con();
if (isset($_POST['update'])) {
    // GET the userid
    $userid = intval($_GET['id']);
    // Posted values 
    $nome = $_POST['nome'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataEntrega = $_POST['dataEntrega'];

    // chamada de funcão

    $sql = $updatedata->update($nome, $pai, $mae, $email, $telefone, $endereco, $dataEntrega, $userid);

    // mensagem apos a atualização

    echo "<script>alert ('registro atualizado com sucesso!')</script>";

    // Código para redirecionamento

    echo "<script>window.location.href = 'index.php';</script>";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <title>Upadate</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md 12">

                    <h1>Crud Orientado a Objeto php</h1>
                    <hr>
                </div>
            </div>
        </div>

    </body>

    </html>

    <?php
    // Obtenha o ID do Usuario
    $userid = intval($_GET['id']);
    $onerecord = new DB_con();
    $sql = $onerecord->fetchonerecord($userid);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>

        <form action="#" name="insertrecord" method="POST">
            <div class="row">
                <div class="col-md-4"><b>Home</b>
                    <input type="text" name="nome" value="<?php echo htmlentities($row['nome']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>Mãe</b>
                    <input type="text" name="mae" value="<?php echo htmlentities($row['mae']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>Pai</b>
                    <input type="text" name="pai" value="<?php echo htmlentities($row['pai']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>E-mail</b>
                    <input type="text" name="email" value="<?php echo htmlentities($row['email']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>Telefone</b>
                    <input type="text" name="telefone" value="<?php echo htmlentities($row['telefone']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>Endereço</b>
                    <input type="text" name="endereco" value="<?php echo htmlentities($row['endereco']); ?>" class="form-control">
                </div>

                <div class="col-md-4"><b>Data Entrega</b>
                    <input type="text" name="dataEntrega" value="<?php echo htmlentities($row['dataEntrega']); ?>" class="form-control">
                </div>
            </div>
        </form>
    <?php
    }
    ?>


<?php
}
?>