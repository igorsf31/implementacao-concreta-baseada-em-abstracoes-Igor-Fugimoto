<?php  
    require_once './src/topo.php';



//die($produto->getId());

try {
	$produto->delete("id = 110");
} catch (Exception $e) {
	echo $e->getMessage();
}

$base->desconectar();


?>

<?php  
    require_once './src/rodape.php';
?>





