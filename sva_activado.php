<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<img src="imagen/logo.png">
			<label id="titulo">Central Telef&oacute;nica MIH C.A.</label>
		</div>
		<hr>
		<div id="contenido">
			<div id="menu">
				<?php
	  				include("head.html");
	  			?>
			</div>
			<div id="espac_cont">
				
				
				<fieldset id="fields"> 
				
				<legend>SVA m&aacute;s activado</legend>

				<?php
				
				include("conexion.php");

				$query = "SELECT Nombre, MAX(Cant_activaciones) as maximo FROM sva WHERE Cant_activaciones= (Select MAX(Cant_activaciones) as maximo FROM sva) ";
				$e_query = mysql_query($query,$link);
				
				while($row = mysql_fetch_object($e_query)){

					
					 echo "Nombre: $row->Nombre";
					 echo "<br>";
					 echo "N&uacute;mero activaciones: $row->maximo";
					
				
				}
				?>
				
				</fieldset>
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>