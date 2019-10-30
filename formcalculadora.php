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
</form>
<?php

$op=$_REQUEST['operacion'];
switch ($op) {
	case 1
	break;
	case 2
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
