<?php
    include_once("../LocationAdmin/connect-db/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/iconeSite.png" type="image/png">

    <title>Lanches</title>

    <style>
      @import url("../css/produtos/lanche.css");
    </style>

</head>
<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white">Mr.Coffee</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-white" href="../index.php">Inicio</a>
              <!-- <a class="p-2 text-white" href="formulario2.html">Cadastro</a> -->
              <a class="p-2 text-white" href="carrinho.html">Carrinho</a>
            </nav>
            <!-- <a class="btn btn-outline-primary" href="login.html">Login</a> -->
          </div>
    </header>

    <section class="prod-section">
        <h1>Lanches</h1>

        <div class="prod">

        <?php
            $sql = "SELECT *  FROM produtos WHERE tipo_prod = 'lanche' ";
            $sqls = mysqli_query($conn, $sql);
            while($row_usuario = mysqli_fetch_assoc($sqls)){
        ?>

            <div class="prod-item">
                <img src="../fotos/<?php echo $row_usuario['nome_img'] ?>" alt="Imagem de cafe"  width="200">
                <h3><?php echo $row_usuario['nome']?></h3>
                <p><?php echo $row_usuario['descricao']?></p>
                <hr>
                <p><sup>R$</sup> <?php echo $row_usuario['preco']; ?></p>
                <a href="carrinho.php?add=carrinho&id=<?php print $row_usuario['cod_produto']; ?>"> <button>Adicionar ao Carrinho</button> </a>
            </div>

        <?php
            }
        ?>  
        </div>
    </section>

    <footer class="text-center text-small">
        <p class="mb-1">Mr Coffee &copy; 2019-2020. Todos os direitos reservados. </p>
        <ul class="list-inline">
            <a href="../index.php">Inicio</a> 
            <!-- <a href="html/login.html">Entrar</a> -->
            <a class="nav-link" href="html/sobre.html" target="blanck">Sobre</a>
            <a href="https://www.facebook.com/Mr-Coffee-106831307390201/"><img src="../img/facebookicone.png" width="30" height="30" class="media-object  img-responsive img-thumbnail"></a>
        </ul>
      </footer>
</body>
</html>