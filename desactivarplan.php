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
					<legend>Desactivar Plan</legend>
					<form action="add.php" method="post">
 						<label>Seleccione el n&uacute;mero de tel&eacute;fono:</label>
 							<select id="num_act_plan" name="num_act_plan">
								<option selected value="0">--</option>
							    <option value="1">2121234567</option> 
							    <option value="2">4147483647</option> 
							</select>
 						
 						<label>Seleccione el plan a activar:</label>
							<select id="nom_plan" name="nom_plan">
								<option selected value="0">--</option>
							    <option value="1">Plan habla 200</option> 
							    <option value="2">Plan habla 500</option> 
							</select>

 						<input type="submit" value= "Activar"/>
					</form>
				</fieldset>
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>