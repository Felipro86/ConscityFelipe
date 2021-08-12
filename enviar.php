<?php
//VALIDACIÓN DE CMAPOS
if(empty($_REQUEST['nombre']) || empty($_REQUEST['email']) || empty($_REQUEST['asunto']) || empty($_REQUEST['mensaje']))
{
	echo "<script> window.location ='contacto.html';</script>";
}else{
		//RECEPCIÓN DE DATOS
		$nom=$_POST['nombre'];
		$email=$_POST['email'];
		$asu=$_POST['asunto'];
		$msj=$_POST['mensaje'];

		//CORREO DESTINO
		$cor="felipemayorga3b@gmail.com";
		
		//ENVIO DE CORREO
		$de .="MIME-Version: 1.0\n"; 
		$de .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$de .= "Content-type: text/html; charset=UTF-8\r\n"; 
		$de .="From: https://conscityfelipe.000webhostapp.com/ <felipemayorga3b@gmail.com>\r\n";
		//ASUNTO
		$asunto="Usuario en contacto.";
		
		//MENSAJE
		$mensaje="
					Mensaje de:<b>".$nom."</b>
					<br><br>
					<b>DATOS DE CONTACTO</b><br>
					Nombre: <b>".$nom."</b><br>
					Correo: <b>".$email."</b><br>
					Asunto: <b>".$asu."</b><br><br>
					Mensaje: <b>".$msj."</b><br><br>
					<hr>
					<a href='https://conscityfelipe.000webhostapp.com/' target='_blank'>https://conscityfelipe.000webhostapp.com/</a>
				";

		//ENVIO DE CORREO
		mail($cor, $asunto, $mensaje, $de) or die('Hubo un error');	
		
		//SCRIPT DE CONFIRMACIÓN
		echo "<script>alert(\"Su mensaje ha sido enviado, gracias por contactarnos, pronto estaremos en contacto con usted.\\n|| www.constcity.abelosh.com ||\");</script>";
		echo "<script> window.location='contacto.html';</script>";
	}
?>