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
			<a href="index.php" title="Página Inicial"> Inicio</a>
			<a href="cadastro.php" title="Sobre haninibal">  Create</a>
                        <a href="Retrieve.php" title="Página Inicial">  Retreive</a>
			<a href="Update.php" title="Sobre haninibal">  Update</a>
                        <a href="Delete.php" title="Página Inicial">  Delete</a>
			
		</nav>

<?php


require 'autoload.php';

use Alfa\BaseDeDados;
use Alfa\Entidade;
use Alfa\Produto;
use Alfa\SGBD;


$servidor = new SGBD('mysql');
$servidor->setEndereco('localhost');
$servidor->setPorta(3306);
$servidor->setUsuario('root');
$servidor->setSenha('Total33');

$base = new Alfa\BaseDeDados('alfa_oo', $servidor);

try {
	$base->conectar();
        
} catch (Exception $e) {
	echo $e->getMessage();
}

$produto = new Produto($base);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

