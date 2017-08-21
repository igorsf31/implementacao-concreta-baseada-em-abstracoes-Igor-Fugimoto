<?php  
    require_once './src/topo.php';


   $colunas = array('id', 'nome', 'preco');


try {
    

    echo '<table>';
    echo '<tr>';

    for ($i = 0; $i < count($colunas); $i++) {
        echo '<th>|' . $colunas[$i] . '</th>';
    }

    echo '</tr>';
    $result = $produto->retrieve($colunas, "id = 110");
    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
        echo '<tr>';
        for ($i = 0; $i < count($colunas); $i++) {
            echo '<td>|' . $row[$colunas[$i]] . '</td>';
        }
        echo '</tr>';
    }
    mysqli_free_result($result);
    echo '</table>';
    
} catch (Exception $e) {
    echo $e->getMessage();
}

$base->desconectar();
    require_once './src/rodape.php';
?>





