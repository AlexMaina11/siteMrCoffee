<?php
session_start();
include_once("../../connect-db/connection.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT *  FROM produtos WHERE cod_produto = '$id'";
$sqls = mysqli_query($conn, $sql);
 while($row_usuario = mysqli_fetch_assoc($sqls)){
     $imagem = $row_usuario['nome_img'];

 
 }

    // Script para deletar arquivos
    // unlink -> função do php para deletar arquivo 
    $arquivo = ("../../../fotos/$imagem");
    if (!unlink($arquivo))
    {
    echo ("Erro ao deletar $arquivo");
    }
    else
    {
    echo ("Deletado $arquivo com sucesso!");
    }

    /* APAGA DO BANCO DE DADOS */

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM produtos WHERE cod_produto = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Produto apagado com sucesso</p>";
		header("Location: ../product.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o produto não foi apagado com sucesso</p>";
		header("Location: ../product.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um produto</p>";
	header("Location: ../product.php");
}
?>