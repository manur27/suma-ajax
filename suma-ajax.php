<?php
$total = $_POST['num1'] + $_POST['num2'];
if(($_POST['num1']!='') && ($_POST['num2']!='')){
    echo '<h4 class="text-success">El resultado es: '.$total.'</h4>';
}
else{
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado un valor en cada casilla y que estos sean válidos</h4>';
}
?>