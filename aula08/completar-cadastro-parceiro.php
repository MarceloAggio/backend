<?php include_once("config/conexao.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Cadastro</title>
     <style> 
        body{
            font-family: Arial
        }
        .conteiner{
            display: flex;
            justify-content: center;
        }
        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form{
            display: flex;
            flex-direction: column;
            
        }
        .coluna {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        textarea{
            height: 150px;
        }
        
        h3{
            text-align: center;
            
            
        }
        .notifica{
            display: flex;
            padding: 12px 0px 12px 140px;
        }

    </style>
</head>
<body>


<?php
    if(isset($_GET['msg'])){
        if($_GET["msg"] == "email"){
            echo "E-mail já está em uso";
        }
    }
?>
<section class="conteiner">
    <div class="contato">
        <h3>Completar Cadastro</h3>

        <form action="documentos/inserir-documento-parceiros.php" class="form"  method="POST">
            
                 <label>CNPJ</label>
                 <input type="hidden" name="id_parceiro" class="coluna" value='<?=$_GET["id_parceiro"]?>'>
                 <input type="text" class="coluna" name="cnpj" >      
            
                 <label>Email:</label>
                <input type="text" class="coluna" name="email" >

                <label>Celular:</label>
                <input type="text" class="coluna" name="celular" >

                <label>Senha</label>
                <input type="password" class="coluna" name="senha">
            

            <button class="coluna">Cadastrar</button>
     
        </form>
    </div>
</section>

 
    
</body>
</html>