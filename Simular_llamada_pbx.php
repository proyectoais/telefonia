<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>

	<script type="text/javascript">
		function ActivarPBX(){
		var contenedor = document.getElementById("PBX");
		contenedor.style.display = "block";
		return true;
		}
	</script>


</head>
<body>
	<div id="contenedor_simular">
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
				
	
					<!-- AQUI FALTA COLOCAR EN ACTION EL METODO ADECUADO -->
					<!--action="add.php"-->
				<div id ="capula_simular">
					<form id ="foracp" method="post" >
 						<label>Seleccione un n&uacute;mero de tel&eacute;fono:</label>
							<?php include("conexion.php"); ?>

							<select id="simular_tradicional" name="simular_traicional" class="required">
								<option value="--">Elija un n&uacute;mero</option>
							<?php
								$B_BUSCAR= mysql_query ("SELECT Numero FROM telefono",$link);
								$R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
								$C_BUSCAR=mysql_num_rows($B_BUSCAR);
								$suma=0;
								do{ ++$suma;
								echo "<option value='".$R_BUSCAR['Numero']."'>".$R_BUSCAR['Numero']."</option>";
								}while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
								echo "</select>";
							?>	
								<br>
								<br>
							<img src = 'imagen/Celulares.jpg' style= "width:200px; height:185px;">
				</div>
				
				<div id ="capula_simular2">
						<label>Seleccione el n&uacute;mero de tel&eacute;fono a llamar:</label>
							

							<select id="simular_tradicional" name="simular_traicional" class="required">
								<option value="--">Elija un n&uacute;mero</option>
							<?php
								$B_BUSCAR= mysql_query ("SELECT Numero FROM telefono ",$link);
								$R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
								$C_BUSCAR=mysql_num_rows($B_BUSCAR);
								$suma=0;
								do{ ++$suma;
								echo "<option value='".$R_BUSCAR['Numero']."'>".$R_BUSCAR['Numero']."</option>";
								}while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
								echo "</select>";
							?>					
 						
								<br>
								<br>
								<img src = 'imagen/iphone.jpg' style= "width:213px; height:189px;">
						
						<br>
						<br>
						
						<div id="PBX"  style=" display:none; position: absolute; margin: -146px 3px 3px -178px;">
						<img src= 'imagen/enrutador.png' name="imagen2" style="width:164px;"><br>
						<br>
						
						<img src = 'imagen/Telefonos.jpg' name="imagen3" style ="width: 159px;">
						</div>
						
						<div id = "boton_registrar">
						<input type="submit"  value= "Registrar llamada" style="margin: -87px 6px 0px 165px; position:static; width:151px; height:30px;"/>
					</div>
						
				</div>
					</form>
					
					<div id = "boton_activar">
						<input type="submit" onclick="ActivarPBX()" value= "Agregar PBX" style="margin: -158px 6px 0px 623px; position:static; width:151px; height:30px;"/>
					</div>
				</div>
					<?php mysql_close($link); ?>
				
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>