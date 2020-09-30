<?php
  include_once("LocationAdmin/connect-db/connection.php");
  
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="css/form-validation.css">
    <link rel="shortcut icon" href="img/iconeSite.png" type="image/png">

    <title>Mr Coffee - O Café como deve ser!</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="css/index.css">
  </head>

  <body class="font-letras">

    <!-- INICIO DO MENU -->
    
    <header>
      <div class="menu"> 
        <nav>
          <ul>
            <li> <img src="img/logoDesc.png" alt="Logo da empresa Mr.Coffee" class="logoDesc" width="200"> </li>
            <li> <img src="img/logoMob.png" alt="Logo da empresa Mr.Coffee" class="logoMob" width="50"> </li>
          </ul>
          <ul>
            <li><a href="#promocao">Promoção</a></li>
            <li><a href="html/carrinho.php">Carrinho</a></li>
            <li><a href="html/login.html">Login</a></li>
          </ul>
        </nav>
        
          <div class="info">
            <p>Bem vindo ao <span>Mr.Coffee</span>, a melhor cafeteria da região. Atendemos de Segunda a Sabado das 7h às 16h, <br> sempre ofereçendo o melhor que nosso cliente merece.</p>
          </div>

          <div class="loginEmail"> 
            <form action="" method="post">
              <input type="email" name="loginEmail" class="item1" id="loginEmail" placeholder="&#9993;    Digite seu email para receber novas ofertas." required>
              <p>Exempo: teste000@gmail.com</p>
              <input type="submit" value="Cadastrar" class="item3">
            </form>
            <p>Exempo: teste000@gmail.com</p>
          </div>
      </div>
    </header>
    <!-- COMO FUNCIONA --> 
    <section class="como-funciona-fundo">
      <div class="como-funciona">
        <div class="como-funciona-item">
          <div class="como-funciona-icon">
            <img src="img/como-funciona-icon-cafe.svg" alt="Icone de cafe" width="50">
          </div>
          <div class="como-funciona-descricao">
            <h3>Comprou</h3>
            <p>Compre e retire seu pedido na loja ou peça para entrega-lo </p>
          </div>
        </div>

        <div class="como-funciona-item">
          <div class="como-funciona-icon">
            <img src="img/como-funciona-icon-cartao.svg" alt="Icone de cartão" width="50">
          </div>
          <div class="como-funciona-descicao">
            <h3>Pagou</h3>
            <p>Pague utilisando o cartão de crédito</p>  
          </div>
        </div>

        <div class="como-funciona-item">
          <div class="como-funciona-item">
            <div class="como-funciona-icon">
              <img src="img/como-funciona-icon-bike.svg" alt="Icone de bicicleta" width="50">
            </div>
            <div class="como-funciona-descicao">
              <h3>Chegou</h3>
              <p>Receba seu pedido na sua casa o mais rapido possível</p>    
            </div>
        </div>
      </div>
    </section>

    <!-- FIM DO COMO FUNCIONA -->

    <main role="main">

      <!-- PRODUTOS -->

      <section class="produtos-section">
        <h1>Escolha o produto que mais goste</h1>
        <h3></h3>
        <p>Compre da sua a casa ou vá ate nosso estabelecimento.</p>
        <div class="produtos">
          <div class="produtos-item">
            <a href="html/cafes.php"><img src="img/produto-icon-cafe.png" alt="icone de cafe" width="100"></a>
            <a href="html/cafes.php"><p>Cafés</p></a>
          </div>

          <div class="produtos-item">
            <a href="html/lanches.php"><img src="img/produto-icon-lanche.png" alt="icone de lanche" width="100"></a>
            <a href="html/lanches.php"><p>Lanches</p> </a>
          </div>

          <div class="produtos-item">
            <a href="html/sucos.php"><img src="img/produto-icon-suco.jpg" alt="Icone de suco" width="100"></a>
            <a href="html/sucos.php"><p>Sucos</p> </a>
          </div>

          <div class="produtos-item">
            <a href="#"><img src="img/produto-icon-doce.png" alt="Icone de doce" width="100"></a>
            <a href="#"><p>Doce</p> </a>
          </div>
        </div>
      </section>

      <!-- FIM DOS PRODUTOS -->
      
      <!--INICIO DAS PROMOÇÕES-->

      <section class="promocao-section">
          <h1>Promoções para dar água na boca</h1>
          <h3></h3>
          <p>Confira as melhores promoções da cidade</p>
          <div class="promocao">
            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/lanche/coxinha.jpg" alt="Foto de coxinha">
                </div>
                <div class="texto">
                  <h4>Coxinha</h4>
                  <p> <span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 3,50 </span> </p>
                </div>  
              </div>  
            </a>
            
            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/suco/suco-laranja.png" alt="Foto do suco de laranja">
                </div>
                <div class="texto">
                  <h4>Luco de Laranja</h4>
                  <p> <span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 5,00 </span> </p>
                </div>  
              </div>
            </a>

            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/cafe/capuccino.jpg" alt="Foto de capuccino">
                </div>
                <div class="texto">
                  <h4>Capuccino</h4>
                  <p><span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 2,00</span> </p>
                </div>  
              </div>  
            </a>

            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/cafe/cafe-expresso.jpg" alt="Foto de Cafe expresso">
                </div>
                <div class="texto">
                  <h4>Cafe expresso</h4>
                  <p><span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 3,00 </span> </p>
                </div>  
              </div>  
            </a>
            
            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/lanche/lache-na-chapa.jpg" alt="Foto de lanche na chapa">
                </div>
                <div class="texto">
                  <h4>Lanche na Chapa</h4>
                  <p><span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 5,50</span> </p>
                </div>  
              </div>
            </a>

            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/lanche/lanche-natural.jpg" alt="Foto de lanche natural">
                </div>
                <div class="texto">
                  <h4>Lanche Natural</h4>
                  <p><span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 5,50</span> </p>
                </div>  
              </div>  
            </a>
            
            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/suco/suco-morango.jpg" alt="Foto de suco de morango">
                </div>
                <div class="texto">
                  <h4>Suco de Morango</h4>
                  <p> <span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 4,50 </span> </p>
                </div>  
              </div>  
            </a>
            
            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/cafe/cafe-mocha.jpg" alt="Foto de cafe mocha">
                </div>
                <div class="texto">
                  <h4>Cafe Mocha</h4>
                  <p> <span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 7,50</span> </p>
                </div>  
              </div>
            </a>

            <a href="">
              <div class="promocao-item">
                <div class="imagem">
                  <img src="img/suco/suco-melancia.jpg" alt="Foto de suco de melancia">
                </div>
                <div class="texto">
                  <h4>Suco de Melancia</h4>
                  <p> <span class="precoVelho">R$ 999,99</span> <span class="precoNovo">R$ 2,00</span> </p>
                </div>  
              </div>  
            </a>

            

          </div>
        </section>
      <!--FIM DAS PROMOÇÕES-->
    </main>

    <hr>
    <footer class="text-center ajustes">
        <p class="mb-1">Mr Coffee &copy; 2019-2020. Todos os direitos reservados. </p>
        <ul class="list-inline margin" style="margin-left: 50%";>
            <!-- <a href="html/login.html">Entrar</a> -->
            <a class="nav-link" href="html/sobre.html" target="blanck">Sobre</a>
            <a href="https://www.facebook.com/Mr-Coffee-106831307390201/"><img src="img/facebookicone.png" width="30" height="30" class="media-object  img-responsive img-thumbnail"></a>
        </ul>
      </footer>
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
