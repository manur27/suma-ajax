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

$(document).ready(function(){ 
	$('input').on('input', function () {
        this.value = this.value.replace(/[^0-9.]/g, '');
      });
	});