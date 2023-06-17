<?php

include 'functions.php';

$updatedata = new DB_con();
if(isset($_POST['update'])){

    $userid = intval($_GET['id']);

    $nome = $_POST['nome'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco']; 
    $dataEntrega = $_POST['dataEntrega'];

    $sql = $updatedata->update($nome, $mae, $pai, $email, $telefone, $endereco, $dataEntrega ,$userid);

    echo "<script>alert('Registro atualizado com sucesso')</script>";

    echo "<meta http-equiv='refresh' content='0; url=teste.php'";
}