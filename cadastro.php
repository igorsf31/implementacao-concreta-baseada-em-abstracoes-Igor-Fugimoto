<?php  
    //function __autoload($class_name)
    //{
//        require_once 'src/Alfa/'.$class_name.'.php';        
//    }
//?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		
        <script src="./js/jquery-1.12.4.min.js"></script>	

        <title>Pós-Graduação Alfa - PHP OO </title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"  />
        <link href="css/estilo2.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <header><h1>PHP OO</h1></header>
        <nav>
			<a href="index.php" title=""> Inicio</a>
			<a href="cadastro.php" title="">  Create</a>
                        <a href="index.php" title="">  Retreive</a>
			<a href="Update.php" title="">  Update</a>
                        <a href="Delete.php" title="">  Delete</a>
			
		</nav>

<?php
require '../../autoload.php';

use Alfa\SGBD;
use Alfa\Produto;

$servidor = new SGBD('mysql');
$servidor->setEndereco('localhost');
$servidor->setPorta(3306);
$servidor->usuario = 'root';
$servidor->senha = 'Total33';

$base = new Alfa\BaseDeDados('alfa_oo', $servidor);

try {
	$base->conectar();
} catch (Exception $e) {
    
	echo $e->getMessage();
}

$produto = new Produto($base);
$produto->setId(22);
$produto->nome = 'Geladeira tabaja12';
$produto->preco = 907.00;

//die($produto->getId());

try {
    
	$produto->create();
        
} catch (Exception $e) {
   
	echo $e->getMessage();
}

$base->desconectar();
?>


<?php  
    require_once './src/rodape.php';
?>
