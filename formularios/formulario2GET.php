<?php //Ejemplo

       $diametro = $_GET['diam'];

       $altura = $_GET['altu'];

       $radio = $diametro/2;

       $Pi = 3.141593;

       $volumen = $Pi*$radio*$radio*$altura;

       echo"<br/> &nbsp; El volumen del cilindro es de". $volumen. "metros cúbicos";

?>