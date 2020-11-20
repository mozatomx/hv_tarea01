<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Moisés Zárate Totolhua</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
  <script src="https://d3js.org/d3.v6.js"></script>

</head>

<body>
  <div class="jumbotron text-center">
    <h1>Herramientas de Visualización</h1>
    <p>Tarea 01</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Menu</h3>
        <p>Datos de la tarea</p>
        
      </div>
      <div class="col-sm-8">
        <h3>Respuestas a las preguntas</h3>
        <p>Pregunta 01 </p>
        <p>Respuesta 02 </p>
      </div>
      
    </div>
  </div>

</body>

</html>