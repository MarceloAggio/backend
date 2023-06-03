<?php
class MinhaClass
{
    //Propriedades e metodos da Classe vem aqui
}
?>

    <!--Instancia e guarda variavel usando a palavra chave new-->$_COOKIE

    $obj = new MinhaClass;

    <!-- Visualilador conteudo da classe usando var_dump-->

    <!-- Exemplo completo de class e instancia de objeto recebendo valor MinhaClass.php-->

    <?php
    class MinhaClass{
        //As propriedades e metodos da Classe vrm aqui
    }

    $obj = new MinhaClass;
    var_dump($obj);
    ?>

    <!-- Definindo as propriedades de classe-->
    <!-- Usamos as propriedades, que são variaveis epecificas a classe-->

    <?php
    class MinhaClass;
    {
        public $obj = "Sou uma propriedade de classe";
    }
    $obj = new MinhaClass;
    var_dump($obj);
    ?>

    <!--Definindo as Propriedades da classe-->
    <!--Usamos as propriedades, que são variaveis especificas á classe-->
    <!--Funcionalidades particulares que os objetivos serão capazes de executar, são definidas dentro das classes na forma de metodos.-->

    <?php
    class MinhaClass
    {
        public $prop1 = "Sou uma propriedade de classe";
    }
    $obj = new MinhaClass;
    var_dump($obj);
    ?>

    <!--Para ver o valor da propriedade-->
    <!--echo $obj->prop1-->
    <!--O uso da flecha (->) é um contruto da POO-->

    <?php
    class MinhaClass
    {
        public $prop1 = "Sou uma propriedade de classe";
    }
    $obj = new MinhaClass;
    echo $obj->prop1; //Mostra a saida/conteudo da propriedade
    ?>

    <!--Definindo Metodos de Classe-->
    <!--Metodos são funções especificas da  classes-->


    
    //  *  o poder da orientação objeto mostra-se ao usar multiplas instâncias da mesma classe.  *  //

    <?php
    class MinhaClass
    {
        public $prop1 = "Sou uma propriedades de classe";
        public function setProperty($newval)
        {
            $this->prop1 = $newval;
        }
        public function getProperty()
        {
            return $this->prop1."</br>";
        }
    }


    $obj = new MinhaClass;
    echo $obj->getProperty(); //le o valor da propriedade.
    $obj->getProperty("Sou um valor da propiedade"); //atribui um novo valor.
    echo $obj->getProperty(); //le o valor novamente para mostrar a mudança.


    ?>





//  *  o poder da orientação objeto mostra-se ao usar multiplas instâncias da mesma classe.  *  //


    

     
<?php

class MinhaClass
{
    public $prop1 = "Sou uma propriedades de classe";
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1."</br>";
    }
}

//create two objects
$obj = new MinhaClass;
$obj2 = new MinhaClass;

//Mostra o valor do prop1 de ambos os objetos
echo $obj->getProperty(); 
echo $obj2->getProperty(); 

//Atribui valores para ambos os objetos 
$obj->setProperty("Sou um valor da propiedade"); 
$obj2->setProperty("Pertenço a segunda instancias"); 

//Mostra o valor de prop1 de ambos os objetos
echo $obj->getProperty(); 
echo $obj2->getProperty(); 

    
?>


<?php


class MinhaClass {
    public $prop1 = "Sou uma propriedade de classe";
    public function __construct()
    {
        
    }
}
