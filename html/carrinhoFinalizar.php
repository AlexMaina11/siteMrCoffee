<?php
    session_start();



        foreach($_SESSION['dados'] as $produtos ){
            $conexao = new PDO('mysql:host=localhost;dbname=mrcoffee',"root","");
           
            
            $insert = $conexao->prepare("INSERT INTO pedidos () VALUES (NULL,?,?,?,?, NULL)");
            $insert->bindParam(1, $produtos['id_produto']);
            $insert->bindParam(2, $produtos['quantidade']);
            $insert->bindParam(3, $produtos['preco']);
            $insert->bindParam(4, $produtos['total']);
            $insert->execute();


            
        }
    
    

    // header( "refresh:4;url=carrinho.php" );


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Finalizado</title>
</head>
<body>
    

    <div id="cont"></div>




<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">



var tempo = new Number();

// Tempo em segundos

tempo = 5;

function startCountdown(){

    // Se o tempo não for zerado

    if((tempo - 1) >= 0){

        // Pega a parte inteira dos minutos

        var min = parseInt(tempo/60);

        // Calcula os segundos restantes

        var seg = tempo%60;

 

        // Formata o número menor que dez, ex: 08, 07, ...

        if(min < 10){

            min = "0"+min;

            min = min.substr(0, 2);

        }

        if(seg <=9){

            seg = "0"+seg;

        }

 

        // Cria a variável para formatar no estilo hora/cronômetro

        horaImprimivel = '00:' + min + ':' + seg;

        //JQuery pra setar o valor

        $("#cont").html(horaImprimivel);

      // Define que a função será executada novamente em 1000ms = 1 segundo

        setTimeout('startCountdown()',1000);

        // diminui o tempo

        tempo--;

 

    // Quando o contador chegar a zero faz esta ação

    } else {

        window.open('carrinho.php', '_self');
        alert("Compra feita com sucesso");

    }

}

// Chama a função ao carregar a tela

startCountdown();

</script>


</body>
</html>