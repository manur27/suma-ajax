<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Sumas con AJAX</title>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--JS-->
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/sumaAjaxFunction.js"></script>
</head>
<body>
    <header>
        <div class="container my-4">
            <div class="title-container">
                <h1 class="bg-primary">Suma de 2 valores con AJAX</h1>
            </div>
        </div>
    </header>
    <form class="mx-4 mb-4">
        <div class="container form-container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="row text-right">
                        <label class="col-6 my-1">Valor 1</label>
                        <input class="col-6 my-1" type="text" name="input_value" id="n1" value="0"/>
                    </div>
                    <div class="row text-right">
                        <label class="col-6 my-1">Valor 2</label>
                        <input class="col-6 my-1" type="text" name="input_value" id="n2" value="0"/>
                    </div>
                </div>
                <div class="col-12 my-3 text-center">
                    <input class="btn btn-success" type="submit" onclick="sumaAJAX($('#n1').val(), $('#n2').val()); return false;" value="Calcular Suma" />
                </div>
            </div>
        </div>
    </form>

    <div class="container text-center">
        <h2>Resultado</h2>
        <div id="total-suma"></div>
    </div>
</body>
</html>