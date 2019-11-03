ingrese su selecciòn
<form action="" method=post>
<select name=operacion>
	<option value=0>seleccione una</option>
	<option value=1>suma</option>
	<option value=2>resta</option>
	<option value=3>multiplicacion</option>
	<option value=4>division</option>
	<option value=5>raiz cuadrada</option>
</select>
<input type=submit value="sleccionar operacion">
<input type="text" id="num1" name="num1"/>




<form id="Formulario" name="formulario" method="post"
action="sumar.php">

<input type="text" id="num2" name="num2"/>




</form>

<form id= "Formulario2" name ="formulario2" method="post"
action="sumar.php">
</form>

<?php

$op=$_REQUEST['operacion'];
switch ($op) {
	case 1:
	
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$suma;

$suma = $num1 + $num2;

	echo "<br>RESULTADO = $suma <br>";
	
	
	break;
	case 2:
		if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$resta = $num1 
		+ $num2;
		echo "La resta de ".$num1." y ".$num2." es ".$resta; 
	}
	break;
	case 5:
		$num = 25;
		$raiz_cuadrada = sqrt ($num);
		echo "La raíz cuadrada de $num es $raiz_cuadrada";
	break;

	default:
		echo "no coincide la seleccion";
		break;
}


?>
