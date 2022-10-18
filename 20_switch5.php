


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>IMC</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 align-item-center">Calculadora de IMC</span>
  </div>

</nav>
<?php

if($_POST){
    $peso=$_POST['peso'];
    $estatura=$_POST['estatura'];
    $altura_doble=pow($estatura,2);
    $imc=$peso/$altura_doble;
    $peso_ideal=24 * $altura_doble;
    $peso_a_bajar=$peso-$peso_ideal;
    $peso_por_alcanzar=$peso-$peso_a_bajar;

   echo "<br>La altura es de:  " .$estatura. " Metros <br>";
   echo "<br>El peso es de   " .$peso. "  Kilogramos <br>";
   echo "<br>Tu IMC es de:  " .round($imc, 1). " <br> ";

  if($peso_a_bajar<0){
    echo "<br>El peso que tenes que subir para llegar a la media de IMC de 24 es " .round($peso_a_bajar*-1). "Kg <br>";
    echo "<br>Tu peso a alcanzar es " .round($peso_por_alcanzar). "Kg <br>";
  }else
  {
    echo"<br>El peso que debes bajar para alcanzar tu peso ideal es ".round($peso_a_bajar,1). "Kg <br>";
    echo "<br>Tu peso a alcanzar es " .round($peso_por_alcanzar,1). "Kg <br>";
  }
    switch(true){
        case ($imc <24.9):
            echo "Peso Normal <br>";
        break;
        case ($imc<26.9):
            echo "<br>Sobrepeso grado I <br>" ;
        break;
        case ($imc<29.9):
            echo "<br>Sobrepeso grado II <br>";
        break;
        case ($imc<34.9):
            echo "<br>Obesidad de tipo I <br>";
        break;
        case ($imc<39.9):
            echo "<br>Obesidad de tipo II <br>";
        break;
        case ($imc<49.9):
            echo "<br>Obesidad de tipo III(Mórbida) <br>";
        break;
        case ($imc==50):
            echo"<br>Obesidad de tipo IV (extrema) <br>";
        break;
        default:
            echo "Peso o altura incorrecta";
        break;
    }
}
?>

  <form class="row g-3" action="imc_con_switch.php" method="post">
    <br>
    <div class="col-md-6">
    <span class="input-group-text" id="basic-addon1">Peso</span>
        <input type="text" name="peso"class="form-control" placeholder="Kg" aria-label="Kg" aria-describedby="button-addon2">
    </div>
    <div class="col-md-6">
        <span class="input-group-text" id="basic-addon1">Estatura</span>
        <input type="text" name="estatura"class="form-control" placeholder="Metros" aria-label="Kg" aria-describedby="button-addon2">
      </div>
      <div class="col-12">
        <button class="btn btn-outline-secondary btn-lg" type="submit" id="button-addon2">Calcular</button>
        </div>
    </form>

    <table class="table table-bordered border border-5">
		<tr>
			<th class=" border-primary">IMC</th>
			<th class="border-primary">Situacion</th>
		</tr>
		<tr>
			<td class="border-primary">Menor 18,5</td>
			<td class="border-primary">Bajo Peso</td>
		</tr>
    <tr>
			<td class="border-primary">18,5-24,9</td>
			<td class="border-primary">Normopeso</td>
		</tr>
    <tr>
			<td class="border-primary">125-26,9</td>
			<td class="border-primary">Sobrepeso grado I</td>
		</tr>
    <tr>
			<td class="border-primary">27-29,9</td>
			<td class="border-primary">Sobrepeso grado II</td>
		</tr>
    <tr>
			<td class="border-primary">30-34,9</td>
			<td class="border-primary">Obesidad de tipo I</td>
		</tr>
    <tr>
			<td class="border-primary">35-39,9</td>
			<td class="border-primary">Obesidad de tipo II</td>
		</tr>
    <tr>
			<td class="border-primary">40-49,9</td>
			<td class="border-primary">Obesidad de tipo III</td>
		</tr>
    <tr>
			<td class="border-primary">Mayor 50</td>
			<td class="border-primary">Obesidad de tipo IV</td>
		</tr>
		</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>