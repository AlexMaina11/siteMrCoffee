<?php
    session_start();
    include_once("processa/verifica_login.php");
    include_once("../connect-db/connection.php");

    
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/icon/sistemPrivate.png">
    <link rel="stylesheet" href="../css/index.css">

    <title>Bem vindo ao sistema administrativo Mr.Coffee.</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Mr.Coffee Admin</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">
                                <span data-feather="shopping-cart"></span>
                                Produtos
                            </a>
                            <a class="nav-link" href="cadastro_produtos.php">
                                <span data-feather="shopping-cart"></span>
                                Cad Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedidos.php">
                                <span data-feather="shopping-cart"></span>
                                Pedidos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="client.php">
                                <span data-feather="users"></span>
                                Clientes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Pedidos</h1>
                </div>


                <div class="table-responsive texto">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NomeProduto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Total</th>
                                <th scope="col">HoraDoPedido</th>
                                <th scope="col">Sugestão</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php

                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                            // Pega todos os cilentes do banco de dados
                            $result_client = "SELECT po.nome, p.cod_pedido, p.quantidade, p.total, p.hora_pedido   FROM pedidos AS p INNER JOIN produtos as po ON po.cod_produto = p.cod_produto  ORDER BY p.hora_pedido asc";
                            $results_client = mysqli_query($conn, $result_client);

                            // Olha todas as linhas do banco de dados e imprime todos
                            while($row_client = mysqli_fetch_assoc($results_client)) {
                        ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $row_client['cod_pedido'] . "<br>"; ?></th>
                                        <td><?php echo $row_client['nome'] . "<br>"; ?></td>
                                        <td><?php echo  $row_client['quantidade'] . "<br>";?></td>
                                        <td><?php echo  $row_client['total'] . "<br>";?></td>
                                        <td><?php echo  $row_client['hora_pedido'] . "<br>";?></td>
                                        <td> Faze de teste  </td>

                                    <td><a class="botaoApagar"href="processa/delete_pedido.php?id=<?php print $row_client['cod_pedido']; ?>">Apagar</a></td>
                                    </tr>   
                                </tbody>
                                <?php 
                            }
                            ?>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>