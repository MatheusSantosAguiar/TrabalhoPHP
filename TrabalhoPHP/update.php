<?php
    require('conexao.php');

    mysqli_query($conexao, 'UPDATE produtos 
        SET descricao = "sadsad", marca = "asdasd", estoque ="2", preco = "2.00" WHERE id = 14');

?>