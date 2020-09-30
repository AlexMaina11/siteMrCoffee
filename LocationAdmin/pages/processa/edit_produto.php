<?php
    session_start();
    include_once("../../connect-db/connection.php");
    include_once("verifica_login.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM produtos WHERE cod_produto = '$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../../css/form.css">
    <link rel="icon" href="../../img/icon/sistemPrivate.png">

    <title>Cadastrar produtos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Mr.Coffee Admin</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
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
                            <a class="nav-link" href="../product.php">
                                <span data-feather="shopping-cart"></span>
                                Produtos
                            </a>
                            <a class="nav-link" href="../cadastro_produtos.php">
                                <span data-feather="shopping-cart"></span>
                                Cad Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pedidos.php">
                                <span data-feather="shopping-cart"></span>
                                Pedidos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../client.php">
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
                    <h1 class="h2">Editar, <?php echo $row_usuario['nome'] . " / " . " ID: " . $row_usuario['cod_produto'] ?></h1>
                </div>
                <div class="table-responsive">  
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
                    <form action="proc_edit_produto.php" method="post" >
                    <input type="hidden" name="id" value="<?php echo $row_usuario['cod_produto']; ?>">

                        <p class="nome">Nome: 
                            <input type="text" name="nome" id="nome" value="<?php echo $row_usuario['nome'] ?>">
                            <select name="tipo" id="">
                                <option value="<?php echo $row_usuario['tipo_prod'] ?>"><?php echo $row_usuario['tipo_prod'] ?></option>
                                <option value="cafe">cafe</option>
                                <option value="suco">suco</option>
                                <option value="lanche">lanche</option>
                            </select>
                        </p><hr>
                        <p class="descricao">Descrição: 
                            <textarea name="descricao" id="descricao" cols="30" rows="2"><?php echo $row_usuario['descricao']; ?></textarea>
                        </p><hr>
                        <p class="preco">Preço:
                            <input name="preco" id="preco" pattern="^\d*(\.\d{0,2})?$" value="<?php echo $row_usuario['preco']; ?>"/>                        
                        </p><hr>
                        <p class="tamanho">Litros/mililitro:
                            <input type="text" name="tamanho" id="tamanho" value="<?php echo $row_usuario['tamanho']; ?>"> <span>Ex: 250ml</span>
                        </p><hr>


                        <input type="submit" value="Salvar">
                    </form>

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

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
</body>

</html>