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
$conectado='Tu informacion a sido recibida, nos pondremos en contacto';
$fallida='Error, vuelve a intentar';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/practicas/kryptos-master/css/boostrap.css">


  <link rel="stylesheet" href="/practicas/kryptos-master/css/style.css">

	<title>Resume</title>
</head>
<body class="text-center">
<div class="alert alert-success" role="alert">
	 <?php
	 	if($actualizacion_dato==1){
			echo $conectado;
			mysqli_close($conn);
	 	}else{
			echo $fallida;
	 	}
	 ?>
	 </div>
</body>
</html>