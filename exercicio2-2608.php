<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="exercicio2">
        <meta name="keywords" content="html,php">
        <meta name="robots" content="exercicio2.php">
        <title>Numeros Inteiros</title>
    </head>
    <body>
        <header>
            <center><h1> Numeros Inteiros </h1></center>
            <hr/>
        </header>
        
        <main>
            <center><h1>Olá! Bem vindo!</h1></center>
            </br></br>
            <form action="exercicio2.php" method="post">
                <label>digite 1º Numero</label><br/>
                <input type="number" name="num1" required/><br/><br/>
                <label>digite 2º Numero</label><br/>
                <input type="number" name="num2" required/><br/><br/>
                <input type="submit" value="mostrar"/>
            </form>
            <?php
                if(isset($_POST["num1"])){
                        $numero1 = $_POST['num1'];
                        $numero2 = $_POST['num2'];
                        for($i=$numero1;$i<=$numero2;$i++){
                            echo $i."<br/>";
                        }
                }
                else{
                    echo"";
                }
            ?>
        </main>
        <footer>
            <p> Desenvolvido por G@llego </p>
        </footer>
    </body>
</html>