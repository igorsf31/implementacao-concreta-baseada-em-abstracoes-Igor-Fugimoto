<?php

namespace Alfa;

class Produto {
    use \Alfa\Traits\Create;
    use \Alfa\Traits\Update;
    use \Alfa\Traits\Delete;
    use \Alfa\Traits\Retrieve;
    //use \Alfa\Abstracao\ClasseEntidade
    protected static $id;
    public $nome;
    public $preco;
    public static $servidor;

    public function __construct(BaseDeDados $base) {
        self::$servidor = $base;
    }
    
}
