<?php
    session_start();
    
    if(isset($_GET['remover']) && $_GET['remover'] == "carrinho") {
        $idProduto = $_GET['id'];
        unset($_SESSION['itens'] [$idProduto]);
        header("Location: carrinho.php");

        // echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=carrinho.php"/>';
    }
?>