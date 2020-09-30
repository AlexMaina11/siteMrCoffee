<?php
    session_start();
    include_once("../../connect-db/connection.php");
    // Verifica se tem conteudo.
    if(empty($_POST['login']) || empty($_POST['senha'])) {
        header('Location: ../../login.php');
        exit();
    }

    $login = mysqli_real_escape_string($conn, $_POST['login']); // mysqli_real_escape_string = defende de ataques de mysql injecti.
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "SELECT * FROM adm WHERE nome = '$login' AND senha = md5('$senha') ";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);

    if($row == 1) {
        $_SESSION['login'] = $login;
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../../login.php');
        exit();
    }
?>