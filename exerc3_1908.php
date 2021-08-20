<!DOCTYPE html>
<html lang="pt-br">
    <head> <!-- metadados -->
        <meta charset="utf-8"> <!-- item obrigatorio na criação da pagina -->
        <meta name="description" content="Aplicatido Descobrindo os Números Pares"> <!-- metas sao usados para ajudar a melhorar as pesquisas no google -->
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc3_1908.php">
        <title>Número Par/Impar</title><!-- titulo da pagina-->


    </head>
    <body>
        <header> <!-- cabeçalho -->
            <center><h1> Descobrindo os Números Pares </h1></center>
            <hr/> <!-- faz linha horizontal -->
        </header>
        
        <main> <!-- corpo do site -->
            <center><h1>Olá! Bem vindo ao Aplicativo de Descobrir os Números Pares!</h1></center>
            </br></br>
            <form action="exerc3_1908.php" method="post"> <!-- formulario sempre deve ter uma ação"action" e um metodo"method" pegar no robots o content -->
                <label>digite qualquer Número </label><br/> <!-- rotulo do campo -->
                <input type="number" name="numero" required/><br/><br/> <!-- tipo de entrada texto"text", data"date" número"number", sempre utilizar um nome para os imputs, também colocar required"requer preenchimento obrigatorio  -->
                <input type="submit" value="calcular"/> <!-- submit"tipo de botao, também pode ser usado -->
            </form>
            <center><?php
                if(isset($_POST["numero"])){//fazer verificação pelo 1º name
                $numero = $_POST['numero']; // variavel global do php que está recebendo o name"feito no imput" do HTML
                }

                if (( $numero % 2 == 0 )){  
                echo "O Número $numero é Par!";
                }
                else{
                    echo "O Número $numero é Impar!";
                }    
            ?></center>


        </main>
        <footer> <!-- rodapé -->
            <p> Desenvolvido por G@llego </p>
        </footer>


    </body>
</html>