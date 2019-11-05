<style>
    .division {
        margin: 0;
        padding: 0;
    }
    
    .container-form{
        margin: auto;
        height: auto;
        background-color: beige;
        border-radius: 15%;
        display: inline-flex;
        box-shadow: 5px 5px rgba(0,0,0,0.5);
    }

</style>




<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Example Title</title>
    <meta name="author" content="Your Name">
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/x-icon" href="" />
</head>

<body>
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
</body>
<?php


if(isset($_REQUEST['operacion'])){
    $op=$_REQUEST['operacion'];
switch ($op) {
	case 1:
	break;	
    case 2:
	break;	
    case 3:
	break;	
    case 4:
        ?>
<div class="division">
    <div class="container-form">
        <form action="" method="post">
            <div class="container-numero">
                <input type="number" name="numero1" class="numero">
                <input type="number" name="numero2" class="numero">
                <input type="submit" value="Calcular">
            </div>
        </form>
    </div>
</div>

<?php
break;

case 5:
break;

default:
echo "no coincide la seleccion";
break;
}
}
    ?>

<div class="resultado">
    <?php
        if(isset($_REQUEST['numero1']) && isset($_REQUEST['numero2'])) {
            $numero1=$_REQUEST['numero1'];
            $numero2=$_REQUEST['numero2'];
            if($numero2 != 0){
                $resultado = $numero1 / $numero2;
                echo $resultado;
            }else{
                echo "El divisor no puede ser cero";
                }
            }    
        ?>
</div>

</html>
