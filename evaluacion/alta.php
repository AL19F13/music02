<?php
 include("conf/config.inc.php");
 session_start();
  if(isset($_POST['txtnombre'])and isset($_POST['txtalbum'])and isset($_POST['txtartista'])and isset($_POST['txtaño']))/*si existen las variables*/
	 {
		 if(($_POST['txtnombre']=="") or ($_POST['txtalbum']=="") or ($_POST['txtartista']=="") or ($_POST['txtaño']==""))/*las variables están vacías */
		 {
			 $vars['mensaje']="Debes llenar todos los campos";
			 echo $tpl->cargar('plt_alta.html',$vars);
		 }
	 
	 else//si no vienen vacias las variables POST
		 {
			 $consultaAlta="INSERT INTO songs (cancion, album, artista, año) VALUES
			 ('{$_POST['txtnombre']}','{$_POST['txtalbum']}','{$_POST['txtartista']}','{$_POST['txtaño']}');"; /*add new song*/
			 $resultadoAlta=mysqli_query($conexion,$consultaAlta);//making sure
			 if (!$resultadoAlta)//si hay error en el alta
			 {
				 die("Error en la consulta de Alta");
			 }
			 else //si no hay error en la consulta
			 {
				 $consultaClave="SELECT MAX(claveAmigo) AS mayor FROM amigos";
				 $resultadoClave=mysqli_query($conexion,$consultaClave);
				  if (!$resultadoClave)//si  hay error en el alta entonces:
			 {
				 die("Error en la consulta de Alta");
			 }
			 else //si no hay error en la consulta
			 {
				 $fila=mysqli_fetch_array($resultadoClave);
				 $temporal=$_FILES["imagen"]["tmp_name"];
				 $nombre=$_FILES["imagen"]["name"];
				 move_uploaded_file($temporal,"recursos/imagenes/fotos/" . $fila ['mayor'] . strrchr($nombre,"."));
				 
			 
			 }
			 
				 $vars['usuario']=$_SESSION['usuario'];
				 $vars['mensaje']="Se agrego un amigo correctamente";
				 echo $tpl->cargar('plt_altaAmigo.html',$vars);
			 }
			 
		 }
		 
	 }
	 
	 else//si no se crearon las variables POST
	 {
		 $vars['mensaje']='Llena el formulario para dar de alta un usuario';
		 $vars['usuario']=$_SESSION['usuario'];
		 echo $tpl->cargar('plt_altaAmigo.html',$vars);
	 }
	 
?>