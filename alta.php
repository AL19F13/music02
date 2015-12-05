<?php
 include("conf/config.inc.php");
  if(isset($_POST['txtnombre'])and isset($_POST['txtalbum'])and isset($_POST['txtartista'])and isset($_POST['txtanio']))/*si existen las variables*/
	 {
		 if(($_POST['txtnombre']=="") or ($_POST['txtalbum']=="") or ($_POST['txtartista']=="") or ($_POST['txtanio']==""))/*las variables están vacías */
		 {
			 $vars['mensaje']="Debes llenar todos los campos";
			 echo $tpl->cargar('plt_alta.html',$vars);
		 }
	 
	 else//si no vienen vacias las variables POST
		 {
			 $consultaAlta="INSERT INTO songs (nombre, album, artista, fecha) VALUES ('{$_POST['txtnombre']}','{$_POST['txtalbum']}','{$_POST['txtartista']}',{$_POST['txtanio']});"; /*add new song*/
			 $resultadoAlta=mysqli_query($conexion,$consultaAlta);//making sure
			 if (!$resultadoAlta)//si hay error en el alta
			 {
				 die("Error en la consulta de Alta");
			 }
			 else //si no hay error en la consulta
			 {
				
				 $vars['mensaje']="Se agrego una nueva cancion";
				 echo $tpl->cargar('plt_alta.html',$vars);
			 }
			 
		 }
		 
	 }
	 
	 else//si no se crearon las variables POST
	 {
		 $vars['mensaje']='Llena el formulario para agregar una nueva cancion';
		 echo $tpl->cargar('plt_alta.html',$vars);
	 }
 
?>