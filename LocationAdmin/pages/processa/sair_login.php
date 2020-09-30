<?php
    session_start();
    session_destroy(); // Destroi todas as sessoes.
    header('Location: ../../login.php')

   // unset($_SESSION['NOME DA SESSAO']) // Destroi somente uma sessao.
?>