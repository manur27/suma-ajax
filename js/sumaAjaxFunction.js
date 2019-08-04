function sumaAJAX(num1, num2){
    var sumandos = {
        'num1' : num1,
        'num2' : num2,
    };

    $.ajax({
        data: sumandos,
        url: '../suma-ajax.php',
        type: 'POST',
        beforeSend: function(){
            $('#total-suma').html('Procesando valores...');
        },
        success: function(response){
            $('#total-suma').html(response);
        },
        error: function(response){
            $('#total-suma').html('Lo sentimos. Ha ocurrido un error');
        }
    });
}
    
    function validateFloatKeyPress(el, evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode;
        var number = el.value.split('.');
        // permitir el signo - (45) y . (46)
        if (charCode != 45 && charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        //just one dot
        if (number.length > 1 && charCode == 46) {
          return false;
        }
        //get the character position
        var caratPos = getSelectionStart(el);
        // evitar mostrar signo - en una posicion diferente de la inicial
        if (caratPos > 0 && charCode == 45) {
          return false;
        }
        // no permtir mas de un - en el numero
        if (charCode == 45 && el.value.charAt(0) == "-") {
          return false;
        }
        var dotPos = el.value.indexOf(".");
        if (caratPos > dotPos && dotPos > -1 && (number[1].length > 1)) {
          return false;
        }
        else{
          return true;
        }
    }
      
    function getSelectionStart(o) {
        if (o.createTextRange) {
          var r = document.selection.createRange().duplicate()
          r.moveEnd('character', o.value.length)
          if (r.text == '') return o.value.length
          return o.value.lastIndexOf(r.text)
        } else { return o.selectionStart }
    }