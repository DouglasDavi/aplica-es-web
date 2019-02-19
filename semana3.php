<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<p>
			<label for="num">Valor:</label>
			<input type="text" name="num">
		</p>
		<input type="submit" name="enviar">
	</form>
</body>
</html>


<?php 
if(isset($_POST['enviar'])){
	$n1 = $_POST['num'];
	moeda($n1);
}


function moeda($num){
	$um = $num;
	$cinco = $num/5;
	$dez = $num/10;
	$vintecinco = $num / 25;
	$cinquenta = $num / 50;
	$array = array(1,5,10,25,50);
	foreach ($array as $key => $value) {
		$moedas = $num / $value;
		echo $value."<br> quantidade de moedas para 1 centavo é: ".number_format($moedas,2);
	}
	// echo "quantidade de moedas para 1 centavo é: "number_format($um,2); 
}
?>

