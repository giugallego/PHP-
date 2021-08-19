<!DOCTYPE html>
<html lang="pt-br">
    <head> <!-- metadados -->
        <meta charset="utf-8"> <!-- item obrigatorio na criação da pagina -->
        <meta name="description" content="Aplicatido Consumo Medio"> <!-- metas sao usados para ajudar a melhorar as pesquisas no google -->
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exerc1_1908.php">
        <title>Média</title><!-- titulo da pagina-->


    </head>
    <body>
        <header> <!-- cabeçalho -->
            <center><h1> Calculo de Consumo Média </h1></center>
            <hr/> <!-- faz linha horizontal -->
        </header>
        
        <main> <!-- corpo do site -->
            <center><h1>Olá! Bem vindo ao Aplicativo Calculo de Consumo Média!</h1></center>
            </br></br>
            <form action="exerc1_1908.php" method="post"> <!-- formulario sempre deve ter uma ação"action" e um metodo"method" pegar no robots o content -->
                <label>digite a distancia percorrida </label><br/> <!-- rotulo do campo -->
                <input type="number" name="distancia" required/><br/><br/> <!-- tipo de entrada texto"text", data"date" número"number", sempre utilizar um nome para os imputs, também colocar required"requer preenchimento obrigatorio  -->
                <label>digite a quantidade de combustivel consumida</label><br/>
                <input type="number" name="litros" required/><br/><br/>
                <input type="submit" value="calcular"/> <!-- submit"tipo de botao, também pode ser usado -->
            </form>
            <center><?php
                if(isset($_POST["distancia"])){//fazer verificação pelo 1º name
                $distancia = $_POST['distancia']; // variavel global do php que está recebendo o name"feito no imput" do HTML
                $litros = $_POST['litros'];
                $media= $distancia/$litros;
                echo "o consumo medio foi de $media km/l";
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