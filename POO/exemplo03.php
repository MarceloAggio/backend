
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




//  *  o metodo construtor de uma classe sempre é executado quando um objeto da classe é instanciado. É um tipo especiaç de função do PHP. Normalmente o programador ultiliza o método construtor para iniciar os atributos de um objeto, como por exemplo: Estabelecer conexão com um banco de dados, abertura de um arquivo será utilizada para escrita  *  //

<?php

class MinhaClass{
    public $prop1 = "Sou uma propiedade de classe";
    public function _construct()
    {
        echo 'A classe "', __CLASS__, '" foi instanciada ! <br />';
    }
    public function setProperty($newval)
    {
     $this->prop1 = $newval;    
    }
    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }

}

//Cria um novo objeto
$obj = new MinhaClass;

//Mostra o valor de $prop1
echo $obj->getProperty();
//Mostra uma mensagem ao final do arquivo
echo "Fim do arquivo. <br/>";







?>

//  *  o metodo _destruct() funciona como  um finalizador e, é executado ao finalizarmos um objeto, ou seja, quando o objeto é deslocado da memoria, quando atribuirmos NULL, ao objeto, quando usarmos a função unset() no objeto ou também quando o programa é fechado.  *  //

<?php


function_destruct() {
    echo'Objeto Finalizado';
}


?>

//  *  Mostre uma mensagem quando um objeto for destruido usando o metodo magico _destruct() na class MinhaClass  *  //

<?php 

{
    public $prop1 = "Sou uma propiedadde de classe !";
    public function _construct()
}


?>


<?php


//Cria um novo objeto
$obj = new MinhaClass;
//Monstra o valor de $prop1
echo $obj->getProperty();
//Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo <br />";

?>




//  *  Metodo_toString(), tentar mostrar um objeto como uma string resulta em um erro fatal. Tente mostrar um objeto, usando echo, sem o método *  //


<?php 
class MinhaClass {
    public $prop1 = "sou uma propiedade de classe!";
    public function _construct()
    {
        echo'A classe"', __CLASS__, '"foi instanciado! <br />'
    }

    public function _destruct()
    {
        echo'A classe"', __CLASS__, '"foi destruida! <br />'
    }
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 . "br />";
    }
}
//Cria um novo objeto
$obj = new MinhaClass;
//Monstra o valor do objeto com uma string
echo $obj;
//Monstra o valor do objeto com uma string
unset ($obj);
//Mostra uma mensagem ao final do arquivo 
echo "Fim do arquivo <br />";


?>


//  *  Usando herança de classe *  //
//  *  Classes podem herdar métodos e propiedades da outra classe usando a palavra chave extends*  //




<?php 

//Private: A única classe que tem acesso ao atributo é a própria classe que o define, ou seja, se uma classe Pessoa declara um atributo privado chamado nome, somente a classe Pessoa terá acesso a ele.

//Default: Tem acesso a um atributo default (identificado pela ausência de modificadores) todas as classes que estiverem no mesmo pacote que a classe que possui o atributo.

//Protected: Esse é o que pega mais gente, ele é praticamente igual ao default, com a diferença de que se uma classe (mesmo que esteja fora do pacote) estende da classe com o atributo protected, ela terá acesso a ele. Então o acesso é por pacote e por herança.

//Public: Esse é fácil, todos tem acesso :)

Class MinhaClass
{
    public $prop1 = "Sou uma propiedade de classe";
    public function _construct()
    {
    echo 'A classe"', __CLASS__,'"foi instanciada <br/>';
    }
    public function _destruct()
    {
    echo 'A classe "', __CLASS__, '"foi destruida.<br/>';
    }
    public function _toString()
    {
        echo "Usando o método toString: ";
        return $this->getProperty();
    }
    public function setProperty($newval)
    {
        return $this->prop1 . "<br />";
    }
}

class MinhaOutraClass extends MinhaClass
{
    public function NewMethod()
    {
        echo " De um novo método na classe " . __CLASS__ . 
    }
}


//Cria um novo objeto 
$newobj = new MinhaOutraClass;
//Usa o método da nova classe
echo $newobj->NewMethod();
// Usa um método da classe pai
echo $newobj->getProperty();

?>

//  *  Sobrescrevendo métodos e propiedades herdadas *  //
//  *  Alterar uma propriedade ou o comportamento de um método existente na nova classe *  //


<?php
class MinhaClass
{
    public $prop1 =" De um novo método na classe " ;
    public function _construct()
    {
        echo 'A classe"', __CLASS__, '"foi instanciada! <br />';
    }
    public function _destruct ()
    {
        echo 'A classe"', __CLASS__, '"foi destruída <br />';
    }
    public function _toString()
    {
        echo "Usando o método toString:";
        return $this->getProperty();
        
    }
    public function setProperty($newval1)
    {
        $this->prop1 = $newval;
    }
}

?>



