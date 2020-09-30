<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon/sistemPrivate.png">
    <link rel="stylesheet" href="../css/areaAdmin/login1.css">
    <title>Login da Area Administrativa</title>

</head>
<body>
    <section>
 
        <div class="formulario" autocomplete="off">
            <form action="pages/processa/proc_login.php" method="post">

                <img src="../img/logoCafe01.png" alt="" width="100" >
                <h3>Mr.Coffee  </h3>
                <p>Login:
                    <input type="text" name="login" id="login" autocomplete="off" autofocus required>
                </p>
                <p>Senha:
                    <input type="password" name="senha" id="senha" autocomplete="off" required>
                </p>
                <button type="submit">Entrar</button>
                <?php
                    if(isset($_SESSION['nao_autenticado'])): 
                ?>
                <div class="txtErro">
                    <p>[ERROR]: Usuario o senha invalidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                ?>
            </form>
        </div>
    </section>
</body>
</html>