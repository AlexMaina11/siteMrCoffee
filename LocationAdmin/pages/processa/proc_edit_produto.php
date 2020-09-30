<?php
    session_start();
    include_once("../../connect-db/connection.php");
    include_once("verifica_login.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $tamanho = $_POST['tamanho'];
    $validade = $_POST['validade'];

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

    $result_usuario = "UPDATE produtos SET nome='$nome', tipo_prod='$tipo', tamanho='$tamanho', quantidade='$tamanho', descricao='$descricao', preco='$preco' WHERE cod_produto='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: ../product.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_produto.php?id=$id");
}
