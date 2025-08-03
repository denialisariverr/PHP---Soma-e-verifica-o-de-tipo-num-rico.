 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numeros</title>
</head>
<body>
<center>
	<h1>Soma e verificação de números positivos, negativos ou zero:</h1>
	<br/>

	<form action="" method="post">
		<input type="text" id="txtN1" name="txtN1">
		<br/>
		<input type="text" id="txtN2" name="txtN2">
		<br/>
		<input type="submit" name="btncalcular">
		<br/>
	</form>
		<br/>		
	<?php
		// verifica se o forms já foi enviado
		if (isset($_POST['txtN1']) && isset($_POST['txtN2'])) {
			$N1 = $_POST['txtN1'];
			$N2 = $_POST['txtN2'];

			// verifica se os valores são numéricos
			if(is_numeric($N1) && is_numeric($N2)){
				$Res = $N1 + $N2;
				echo "O resultado da soma é: $Res.";

				if($Res < 0){
					echo "<br/>O número é negativo.";
				} 
					else if($Res == 0) {
						echo "<br/>O número é zero.";
					} 
					else{
						echo "<br/>O número é positivo.";
					}
			} 
			else{
				echo "<br/>Por favor, insira números válidos! :)";
			}
		}
	?>
</center>

</body>
</html>