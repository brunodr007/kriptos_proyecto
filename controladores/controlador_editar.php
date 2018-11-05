<?php
require_once '/opt/lampp/htdocs/practicas/kryptos-master/models/bd.php';
require_once '/opt/lampp/htdocs/practicas/kryptos-master/models/Kryptos.php';

$n=$_POST["name"];
$m=$_POST["mail"];
$t=$_POST["telefone"];
$a=$_POST["asunt"];
$c=$_POST["coment"];

$objeto1 = new Kryptos();
$actualizacion_dato= $objeto1->GuardarUsuario($conn,$n,$m,$t,$a,$c);
if($actualizacion_dato==1){
	echo 'Tu informacion a sido recibida, nos pondremos en contacto';
}else{
	echo 'Error vuelve a intentar';
}

?>

<!DOCTYPE html>
<head>
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/boostrap.css">


  <link rel="stylesheet" href="css/style.css">

	<title></title>
</head>
<body>
<div class="contenedor" style="max-width: 600px;"></div>
</body>
</html>