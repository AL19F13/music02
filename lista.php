<?php
 include("conf/config.inc.php");
	 $vars="";
	 $consulta="SELECT * FROM songs ORDER BY clave_cancion ASC";
	 $resultado=mysqli_query($conexion,$consulta);
	 if (!$resultado)
	 {
		 die ("Error en la consulta");
	 }
	 else
	 {
		 echo $tpl->cargar_parte('plt_lista.html','encabezado',$vars);
		 if (mysqli_num_rows($resultado)>0)
		 {
			 //listar
			 $cuantos=mysqli_num_rows($resultado);
			 for ($i=1; $i<=$cuantos; $i++)
			 {
				 $fila=mysqli_fetch_array ($resultado);
				 $vars ['nombre']=$fila ['nombre'];
				 $vars ['album']=$fila ['album'];
				 $vars ['artista']=$fila ['artista'];
				 $vars ['anio']=$fila ['fecha'];
				 echo $tpl->cargar_parte('plt_lista.html','fila',$vars);
			 }
		 }
		 else
		 {
			echo "no hay nada"; //mandar mensaje de que no hay nada que listar
		 }
		 echo $tpl->cargar_parte('plt_lista.html','pie',$vars);
	 }
?>