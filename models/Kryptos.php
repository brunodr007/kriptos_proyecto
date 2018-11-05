<?php


class Kryptos{

	public function getUsuarios($conn){
		$sql= "SELECT * FROM kryptos";
		$resultado=[];
		if ($result=mysqli_query($conn,$sql))
  		{
  			while ($row=mysqli_fetch_row($result))
		    {
		    	//printf ("%s (%s)\n",$row[0],$row[1]);
		    	array_push($resultado, $row);
		    }
  		  	return $resultado;
		}
	}
	public function GuardarUsuario($conn, $n,$m,$t,$a,$c){
		$sql="INSERT INTO Kryptos (`nombre`, `mail`, `telefono`, `asunto`, `comentario`) VALUES ('$n', '$m', '$t', '$a', '$c')";

		//echo $sql;
		
		if ($result=mysqli_query($conn,$sql))
  		{
  		  	return 1;
		}
		//hacer un update a la base de datos con los datos del usuario y retornar un 1 si se hizo el update o un 0 si no se hizo
	}

	public function BorrarUsuario($conn, $id,$nom,$ed,$cla){
		$sql="DELETE FROM usuario_proyecto WHERE id='$id'";
		if($result=mysqli_query($conn,$sql)){
			return 1;
		}
	}
}

?>