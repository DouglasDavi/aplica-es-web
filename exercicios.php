<?php
echo "teste";


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- 
        Elabore um programa em PHP que calcule a média aritmética de duas notas 
        e exiba o resultado na tela. As notas estão armazenadas em variáveis.
        -->
        <div>
            <h2>Exercício 1</h2>
            <form method="post" action="">
                <p>
                    <label for="primeiro">Nota 1</label>
                    <input type="text" name="primeiro">
                </p>
                <p>
                    <label for="segundo">Nota 2</label>
                    <input type="text" name="segundo">
                </p>
                <input type="submit" name="enviar">
            </form>
        </div>
        <?php
            if(isset($_POST['enviar'])){
                $media = ($_POST['primeiro'] + $_POST['segundo'])/2;
                echo "A média é de: " .$media;
            }                    
        ?>
        <hr>
        <div>
            <h2>Exercício 2</h2>
            <form method="post" action="">
                <p>
                    <label for="inteiro">Escreva um número inteiro</label>
                    <input type="text" name="inteiro">
                </p>
                <input type="submit" name="enviar2">
            </form>
        </div>    
            <?php
                if(isset($_POST['enviar2'])){
                    $inteiro = $_POST['inteiro'];                   
                    divisor($inteiro);
                }
                 
            ?>
        <hr>
        <div>
            <h2>Exercício 3</h2>
            <form method="post" action="">
                <p>
                    <label for="n1">1º numero: </label>
                    <input type="text" name="n1">
                </p> 
                <p>
                    <label for="n2">2º numero: </label> 
                    <input type="text" name="n2">
                </p>
                <p>
                    <label for="n3">3º numero: </label> 
                    <input type="text" name="n3">
                </p>
                <button type="submit" name="enviar3">Maior dos 3</button>
                <p>
                <?php
                    if (isset($_POST['enviar3'])){
                        $num1 = $_POST['n1'];
                        $num2 = $_POST['n2'];
                        $num3 = $_POST['n3'];
                   echo ordenar($num1, $num2, $num3);
                    
                    }
                    
                ?></p>


                </form>
        </div>
        <hr>
        <div>
            <h2>Exercício 4</h2>
            <form method="post" action="">
                <p>
                   <label for="numero">1º numero: </label> 
                   <input type="text" name="numero">
                </p>
                <button type="submit" name="enviar4">Sucessor</button>
                <p><label>O sucesor do número é: </label>
                    <?php
                    if (isset($_POST['enviar4'])){
                        $numero = $_POST['numero'];
                        echo ++$numero;
                    }
                    ?></p>
            </form>
        </div>        
</body>
</html>
<?php 
function divisor($inteiro){
     echo "resultado = ";
    for ($i = 1; $i <= $inteiro; $i++) {
        if ($inteiro % $i === 0) {
            echo ' ' . $i;
        }
    }

} 
function ordenar($num1, $num2, $num3){ 
    $ordem;
    if ($num1 < $num2) {
                        $aux = $num1;
                        $num1 = $num2;
                        $num2 = $aux;
                    }
                    if ($num1 < $num3) {
                        $aux = $num1;
                        $num1 = $num3;
                        $num3 = $aux;
                    }
                    if ($num2 < $num3) {
                        $aux = $num2;
                        $num2 = $num3;
                        $num3 = $aux;
                    }
                    $ordem =  "O maior: ".$num1."<br>ordem crescente : ".$num3.", ".$num2.", ".$num1;
                    return $ordem;
    //  echo "O maior é: ";
    // if($num1 >= $num2 && $num1 >= $num3){ 
    //     echo $num1."<br>";
    //     if($num2 > $num3){
    //          echo "entrou na 1.1<br>";
    //         $ordem = $num3.", ".$num2.", ".$num1;
    //     }else{
    //          echo "entrou na 1.2";
    //         $ordem = $num2.", ".$num3.", ".$num1;
    //     }                        
    // }else if($num2 > $num1 && $num2 > $num3){
    //     echo $num2."<br>";
    //     if($num3 > $num1){
    //          echo "entrou na 2.1<br>";
    //         $ordem = $num1.", ".$num3.", ".$num2;
    //     }else{
    //          echo "entrou na 2.2";
    //         $ordem = $num3.", ".$num1.", ".$num2;
    //     }
    // }else{
    //     echo "<br>entrou na 3<br>";
    //     $ordem = $num1.", ".$num2.", ".$num3;
    // }
    // return $ordem;
}                   

?>
