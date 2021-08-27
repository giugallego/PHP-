<!-- 
    exemplo 1 de for 
    <?php
    for($i=0;$i<=10;$i++){
        echo $i."<br/>";
    }
?>
     
    exemplo 2 de for 
    <?php
    for($i=0;$i<5;$i++){
        echo "Nome".$i."<input type='text' name='$i'/><br>";
    }
?>

    exemplo3
<?php
    $vetor = array(1,2,3,4,5);
    for($i=0;$i<5;$i++){
        $item = $vetor[$i];
        echo $item."<br/>";
    }
?>

    exemplo 4 foreach
<?php
    $vetor = array(1,2,3,4,5);
    foreach($vetor as $item){
        echo $item."<br/>";
    }
?>

    exemplo 5 while
<?php
    $contador = 0;
    while($contador <10){
        echo $contador. "<br/>";
        $contador++;
    }
?>

    exemplo 6
<?php
    $i = 1;
    while($i <= 10):
        echo $i. "<br/>";
        $i++;
    endwhile;
?>

    exemplo 7 do while
<?php
    $i = 1;
    do{
        echo $i. "<br/>";
        $i++;
    }while($i<15)
?>

    exemplo 8 break
<?php
    $i = 0;
    while(true){
        if ($i ==5){
            break;
        }
    echo $i."<br/>";
    $i++;
    }
?> -->

    
<?php
    $i = 0;
    while(true){
        if ($i ==5){
            break;
        }
    echo $i."<br/>";
    $i++;
    }
?> -->