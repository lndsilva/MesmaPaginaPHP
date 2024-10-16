<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <div class="container">
        <div class="card text-center w-50 cartao" style="width: 18rem;">
            <div class="card-body card-header">
                <h5>Calcular IMC</h5>
                <form name="calc" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <label for="Peso"> Peso</label>
                    <input type="text" id="Peso" name="peso" required autocomplete="off" autofocus placeholder="Insira seu peso">

                    <br>
                    <br>
                    <label for="Altura"> Altura</label>
                    <input type="text" id="Altura" name="altura" required autocomplete="off" placeholder="Insira sua altura">

                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary" value="CALCULAR">
                    <input type="reset" class="btn btn-warning" value="LIMPAR">
                </form>
            </div>
        </div>
    </div>

    <div id="resultado">
        <?php
        if (isset($_POST)) {
            
            $peso = isset($_POST['peso']) ? $_POST['peso'] : false;
            
            $altura = isset($_POST['altura']) ? $_POST['altura'] : false;
            
            if (isset($peso) && $peso > 0 && isset($altura) && $altura > 0) {
                $imc = $peso / ($altura * $altura);

                // var_dump($altura);
                // var_dump($peso);

                if (isset($imc) && $imc != 0) {;
                    echo '<h1>Seu IMC é:</h1>';
                    echo '<h2>' . $imc . '</h2>';
                }
                if (isset($imc) && $imc < 17) {
                    echo 'é menor que 17';
                } else {
                    echo '<h1>Por favor, utilize apenas numeros!</h1>';
                }
            }
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>