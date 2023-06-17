<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'teste');



class DB_con
{
    function_construct()
    {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME)
        $this->dbh=$con;

        //check connection
        if (mysqli_connect_errno())
        {
         echo "Failed to connect to MySQL:" . mysqli_connect_errno();
        }
    }
}

//Data Insertion Funtion - insert 
    public function insert($nome,$pai,$mae,$email,$telefone,$dataEntrada,$endereco)
    {
        $ret=mysqli_query($this->dbh, "insert into cadastro
        (nome,pai,mae,email,telefone,dataEntrada,endereco) 
        
        values 
        ('$nome','$pai','$mae','$email','$telefone','$dataEntrada','$endereco')");
        return $ret;
    }

?>