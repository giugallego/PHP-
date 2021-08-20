<!DOCTYPE html>
<html lang="pt-br">
    <head> <!-- metadados -->
        <meta charset="utf-8"> <!-- item obrigatorio na criação da pagina -->
        <meta name="description" content="Aplicatido Transformar Temperatura"> <!-- metas sao usados para ajudar a melhorar as pesquisas no google -->
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc2_1908.php">
        <title>Transformando Temperatura</title><!-- titulo da pagina-->


    </head>
    <body>
        <header> <!-- cabeçalho -->
            <center><h1> Transformando Temperatura </h1></center>
            <hr/> <!-- faz linha horizontal -->
        </header>
        
        <main> <!-- corpo do site -->
            <center><h1>Olá! Bem vindo ao Aplicativo de Transformar Temperatura!</h1></center>
            </br></br>
            <form action="exerc2_1908.php" method="post"> <!-- formulario sempre deve ter uma ação"action" e um metodo"method" pegar no robots o content -->
                <label>digite a temperatura em Fahrenheit </label><br/> <!-- rotulo do campo -->
                <input type="number" name="tempf" required/><br/><br/> <!-- tipo de entrada texto"text", data"date" número"number", sempre utilizar um nome para os imputs, também colocar required"requer preenchimento obrigatorio  -->
                <input type="submit" value="calcular"/> <!-- submit"tipo de botao, também pode ser usado -->
            </form>
            <center><?php
                if(isset($_POST["tempf"])){//fazer verificação pelo 1º name
                $tempf = $_POST['tempf']; // variavel global do php que está recebendo o name"feito no imput" do HTML
                $tempc = (5 * ($tempf-32) / 9);
                echo "A temperatura $tempf, em Celsius é" .number_format($tempc,2)." (Cº).";
                }
                else{
                    echo"";
                }    
            ?></center>


        </main>
        <footer> <!-- rodapé -->
            <p> Desenvolvido por G@llego </p>
        </footer>


    </body>
</html>