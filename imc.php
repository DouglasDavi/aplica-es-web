<?php
    if(isset($_POST['enviar'])){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso/pow($altura, 2);
        echo $imc;
    }


?>