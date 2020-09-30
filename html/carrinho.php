<?php
    session_start();
    include_once("../LocationAdmin/connect-db/connection.php");


    if(!isset($_SESSION['itens'])) {
        $_SESSION['itens'] = array(); 
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho") {
        // Adiciona ao Carriho
        $idProduto = $_GET['id'];
        if(!isset($_SESSION['itens'] [$idProduto])) {
            $_SESSION['itens'] [$idProduto] = 1;
        }
        else {
            $_SESSION['itens'][$idProduto] += 1;
        }
    }




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/iconeSite.png" type="image/png">
    <title>Carrinho</title>

    <style>
        @import url("../css/carrinho.css");
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
              <a href=""><img src="../img/iconeCarrinhoDeCompra.png" alt=""></a>
            </nav>
            <!-- <a class="btn btn-outline-primary" href="login.html">Login</a> -->
          </div>
    </header>

    <?php 
        if($_SESSION['itens'] == false) {
           ?>
           <div class="carrinhoVazio">
                <div class="carrinhoVazioT">
                    <img src="../img/carrinhoDeCompraVazio.png" alt="" width="250">
                    <div class="carrinhoVarioTxt">
                        <h1>Ops... Seu carrinho esta vazio</h1>

                        <a href="../index.php"><button>Ir as Compras</button></a>
                    </div>
                </div>
    
            </div>
           <?php

        }
        else {
            ?>
        
        <section>
                    <ul class="tabela">
                    <!-- Cabeçalho de  cada item do carrinho-->
                    <li>
                        <div class="titulo-produto">
                        <div class="produtos">Produtos</div>
                        <div class="quantidade">Quantidade</div>
                        <div class="valorUnit">Valor Unitario</div>
                        <div class="valorTot">Valor Total</div>
                        </div>
                        <!-- itens cadastrados no carrinho -->

                        <?php
                                    // Exibe o Carrinho

                                    if(count($_SESSION['itens']) == 0) {
                                        echo "Carrinho vazio <br> <a href = 'index.php'> Adiconar itens </a>";
                                    }
                                    else {
                                        $_SESSION['dados'] = array();


                                        foreach($_SESSION['itens'] as $idProduto => $quantidade) {
                                          $conexao = new PDO('mysql:host=localhost;dbname=mrcoffee',"root","");
                                            $select = $conexao->prepare("SELECT * FROM produtos WHERE cod_produto = ? ");
                                            $select->bindParam(1,$idProduto);
                                            $select->execute();
                                            $produtos = $select->fetchAll(); // fetchAll = traz todas as linhas.
                                            $total = $quantidade * $produtos[0] ['preco'];

                                ?>

                        
                        <ul class="itens-list">
                                    <li>    
                                        <div class="produtos">
                                        <img src="../fotos/<?php echo $produtos[0] ['nome_img'] ?>" width="100" height="70" alt="">
                                        <div class="info-itens">
                                            <p class="codigo"><span>Codigo: </span><?php echo $idProduto ?></p>
                                            <p class="nome"><span>Nome:</span> <?php echo $produtos[0] ['nome'] ?> </p>
                                        </div>
                                        </div>
                                        <div class="quantidade">- <?php echo $quantidade ?> +</div>
                                        <div class="valorUnit"><?php echo $produtos[0] ['preco'] ?></div>
                                        <div class="valorTot">R$ <?php echo $total ?></div>
                                        <div class="remover"><a href="carrinhoRemover.php?remover=carrinho&id=<?php echo $idProduto; ?>"><button>Remover</button></a></div>
                                    
                                        
                                    </li>
                                    <hr> 
                                </ul>
                            </li>

                        <?php
                            

                                array_push(
                                $_SESSION['dados'],
                                array(
                                'id_produto' => $idProduto,
                                'id_cliente' => "1",
                                'quantidade' => $quantidade,
                                'preco' => $produtos[0] ['preco'],
                                'total' => $total
                                )
                                ); //Array Push
                            }



                            }

                            
                            ;

                        ?>



                    
                    </ul>
                    <a href="carrinhoFinalizar.php"><button class="finalizarCom">Finalizar pedido</button></a>
                </section>
            </body>
            </html>    
        
        <?php
        }
    ?>
    