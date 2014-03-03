<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>


</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<a href="index.php"><img src="imagen/logo.png"></a>
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
			
				<div id="cantidad_llamdas">
				
					<center><p style="font-size: 18px;font-weight: bold;">SVA mas activado<p></center>
					<?php 
						$link = mysql_connect("localhost", "root", NULL); 
						mysql_select_db("bd_ais", $link); 
						$result1 = mysql_query("SELECT Nombre FROM sva", $link); 
						echo "<table border = '1' style = 'margin: 0px 0px 0px 89px; width:300px;'> \n"; 
						echo "<tr style = 'height: 38px'><td style = 'font-size:18px'>SVA</td><td style = 'font-size:18px'>Cantidad de activaciones</td>
						</tr> \n"; 
						while ($row = mysql_fetch_row($result1)){ 
						echo "<tr style = 'height: 38px'><td>$row[0] </td></tr> \n"; 
						} 
						echo "</table> \n"; 
					?> 
				</div>
					
				</div>
					
				
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>