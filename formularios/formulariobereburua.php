<!DOCTYPE html>
<html>

<head>
<title>Ejemplo</title>
<meta charset="utf-8">
</head>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $diametro = $_POST['diam'];
    $altura = $_POST['altu'];
    $radio = $diametro/2;
    $Pi = 3.141593;
    $volumen = $Pi*$radio*$radio*$altura;
    echo "<br/> &nbsp; El volumen del cilindro es de". $volumen. "metros cúbicos";
}
else{ ?>
    <body>

        <form name="formularioDatos"method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <p>CÁLCULO DEL VOLUMEN DE UN CILINDRO </p>
        <br/>
        Introduzca el diámetro en metros: <input type="text"name="diam"value="">
        <br/> <br/>
        Introduzca la altura en metros: <input type="text"name="altu"value="">
        <br/> <br/>
        <input value="Calcular" type="submit" />

        </form>

    </body>

<?php  
} ?>
</html>

<?php  
echo "aaaaa" ?>