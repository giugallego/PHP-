<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> <!-- item obrigatorio na criação da pagina -->
        <meta name="description" content="Aplicatido Maioridade"> <!-- metas sao usados para ajudar a melhorar as pesquisas no google -->
        <meta name="keywords" content="html,php">
        <meta name="robots" content="maioridade.php">
        <title>Maioridade</title>


    </head>
    <body>
        <header> <!-- cabeçalho -->
            <center><h1> Maioridade </h1></center>
            <hr/> <!-- faz linha horizontal -->
        </header>
        
        <main> <!-- corpo do site -->
            <center><h1>Olá! Bem vindo ao Aplicativo Maioridade!</h1></center>
            </br></br>
            <form action="maioridade.php" method="post"> <!-- formulario sempre deve ter uma ação"action" e um metodo"method" -->
                <label>digite seu nome</label><br/> <!-- rotulo do campo -->
                <input type="text" name="nome" required/><br/><br/> <!-- tipo de entrada texto"text", data"date", sempre utilizar um nome para os imputs, também colocar required"requer preenchimento obrigatorio  -->
                <label>digite sua idade</label><br/>
                <input type="number" name="idade" required/><br/><br/>
                <input type="submit" value="mostrar"/> <!-- submit"tipo de botao, também pode ser usado -->
            </form>
            <center><?php
            if(isset($_POST["nome"])){
                $nome = $_POST['nome']; // variavel global do php que está recebendo o name"feito no imput" do HTML
                $idade = $_POST["idade"];
                if($idade>=18){
                    echo "<br><b>$nome</b> é maior de idade, e tem <b>$idade</b>";
                }
                else{
                    echo "<br><b>$nome</b> não é maior de idade, e tem <b>$idade</b>";
                }
            }
            else{
                echo "<br><br><br>Por favor digite o nome e a idade!";
            }
            ?></center>


        </main>
        <footer> <!-- rodapé -->
            <p> Desenvolvido por </p>
        </footer>


    </body>
</html>