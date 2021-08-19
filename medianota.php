<!DOCTYPE html>
<html lang="pt-br">
    <head> <!-- metadados -->
        <meta charset="utf-8"> <!-- item obrigatorio na criação da pagina -->
        <meta name="description" content="Aplicatido Maioridade"> <!-- metas sao usados para ajudar a melhorar as pesquisas no google -->
        <meta name="keywords" content="html,php">
        <meta name="robots" content="maioridade.php">
        <title>Média</title><!-- titulo da pagina-->


    </head>
    <body>
        <header> <!-- cabeçalho -->
            <center><h1> Calculo de Média </h1></center>
            <hr/> <!-- faz linha horizontal -->
        </header>
        
        <main> <!-- corpo do site -->
            <center><h1>Olá! Bem vindo ao Aplicativo Calculo de Média!</h1></center>
            </br></br>
            <form action="medianota.php" method="post"> <!-- formulario sempre deve ter uma ação"action" e um metodo"method" -->
                <label>digite seu nome</label><br/> <!-- rotulo do campo -->
                <input type="text" name="nome" required/><br/><br/> <!-- tipo de entrada texto"text", data"date", sempre utilizar um nome para os imputs, também colocar required"requer preenchimento obrigatorio  -->
                <label>digite 1º Nota</label><br/>
                <input type="number" name="nota1" required/><br/><br/>
                <label>digite 2º Nota</label><br/>
                <input type="number" name="nota2" required/><br/><br/>
                <input type="submit" value="mostrar"/> <!-- submit"tipo de botao, também pode ser usado -->
            </form>
            <center><?php
                if(isset($_POST["nome"])){
                $nome = $_POST['nome']; // variavel global do php que está recebendo o name"feito no imput" do HTML
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $media=($nota1+$nota2)/2;
                if(($media>=7)){
                    echo "<br><b>$nome</b> foi Aprovado<h1>Parabéns!!!!</h1>";
                }
                else{
                    echo "<br><b>$nome</b> foi Reprovado que pena =/";
                }
            }
            else{
                echo "<br><br><br>Por favor insira os dados!";
            }
            ?></center>


        </main>
        <footer> <!-- rodapé -->
            <p> Desenvolvido por G@llego </p>
        </footer>


    </body>
</html>