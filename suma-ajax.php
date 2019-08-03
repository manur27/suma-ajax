<?php
if(((float)$_POST['num1'] == 0) && ((float)$_POST['num2'] == 0)){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado algun valor y que estos sean válidos y distintos de 0</h4>';
    echo '<h4 class="text-warning">Si alguna de las casillas está vacía, el valor de la misma se tomará como un 0, si ambas lo están no será válida la operación.</h4>';
}
else{
    $total = (float)$_POST['num1'] + (float)$_POST['num2'];
    echo '<h4 class="text-success">El resultado es: '.$total.'</h4>';
}
?>