<?php
if(($_POST['num1'] == '') || ($_POST['num2'] == '')){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado valores en los campos y que estos sean válidos</h4>';
}
else if(($_POST['num1'] == '-') || ($_POST['num2'] == '-')){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado valores en los campos y que estos sean válidos</h4>';
}
else if(($_POST['num1'] == '.') || ($_POST['num2'] == '.')){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado valores en los campos y que estos sean válidos</h4>';
}
else if(($_POST['num1'] == '-.') || ($_POST['num2'] == '-.')){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado valores en los campos y que estos sean válidos</h4>';
}
else if(($_POST['num1'] == '.-') || ($_POST['num2'] == '.-')){
    echo '<h4 class="text-danger">No se ha podido realizar la operación. Por favor, verifique que ha colocado valores en los campos y que estos sean válidos</h4>';
}
else{
    $total = $_POST['num1'] + $_POST['num2'];
    echo '<h4 class="text-success">El resultado es: '.$total.'</h4>';
}
?>